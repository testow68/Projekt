<?php

  session_start();

  if (isset($_POST['emailo']))
  {
  	$wszystko_OK=true;

  	$nick = $_POST['nick'];
  	// Sprawdzanie długości:
  	if((strlen($nick)<3) || (strlen($nick)>20))
	{
	$wszystko_OK = false;
	$_SESSION['e_nick']="Nick powinien zawierać od 3 do 20 znaków";
  }

  if(ctype_alnum($nick)==false)
  {
  	$wszystko_OK=false;
  	$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez poslskich znaków)";
  }

  $emailo = $_POST['emailo'];
  $emailb = filter_var($emailo, FILTER_SANITIZE_EMAIL);
	if ((filter_var($emailb, FILTER_VALIDATE_EMAIL)==false) || ($emailb!=$emailo))
	{
		$wszystko_OK=false;
		$_SESSION['e_email']="Podaj poprawny adres e-mail";
	}
	//Poprawność hasła 
	$haslo1 = $_POST['haslo1'];
	$haslo2 = $_POST['haslo2'];

	if((strlen($haslo1)<8) || (strlen($haslo1)>20))
	{
	$wszystko_OK = false;
	$_SESSION['e_haslo']="Hasło powinno zawierać od 8 do 20 znaków";
	}
	if($haslo1!=$haslo2)
	{
	$wszystko_OK = false;
	$_SESSION['e_haslo']="Podane hasła nie są jednakowe";
	}
	$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

	//Czy zaznaczono regulamin 
	if(!isset($_POST['akceptreg']))
	{
		$wszystko_OK=false;
		$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu";
	}

	//Czy nie bot?
	$kodniejawny = "6LfYAxwTAAAAANjYv-Ux2DhXeL6rV4pHyT9TANxU";

	$sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$kodniejawny.'&response='.$_POST['g-recaptcha-response']);

	$odpowiedz = json_decode($sprawdz);
	if($odpowiedz->success==false)
		{
		$wszystko_OK=false;
		$_SESSION['e_bot']="Potwierdź, że nie jesteś botem!";
		}

		require_once "connect.php";

		mysqli_report(MYSQLI_REPORT_STRICT);

		try
		{
			  $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			  if($polaczenie->connect_errno!=0)
			  {
			    throw new Exception(mysqli_connect_errno());
			  }
			  else
			  {
			  	//Czy email jest w bazie
			  	$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$emailo'");
			  	if(!$rezultat) throw new Exception($polaczenie->error);
			  	$ile_takich_maili = $rezultat->num_rows;
			  	if($ile_takich_maili>0)
				{
				$wszystko_OK=false;
				$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu email";
				}


				//Czy nick jest w bazie
			  	$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");
			  	if(!$rezultat) throw new Exception($polaczenie->error);
			  	$ile_takich_nickow = $rezultat->num_rows;
			  	if($ile_takich_nickow>0)
				{
				$wszystko_OK=false;
				$_SESSION['e_nick']="Istnieje już gracz o takim nicku";
				}

				if($wszystko_OK==true)
  				{
				  	//Wszystko powyższe spełnione

				  	if($polaczenie->query("INSERT INTO uzytkownicy VALUES(NULL, '$nick', '$haslo_hash', '$emailo', 100, 100, 100, 14)"))
				  	{
				  		$_SESSION['udanarejestracja']=true;
				  		header('Location: witamy.php');
				  	}
				  	else
				  	{
				  		throw new Exception($polaczenie->error);
				  	}

				  		echo $haslo_hash; exit();
				  	
				  }

			  	$polaczenie->close();
			  }
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie.</span>';
			echo'<br />Informacja developerska : '.$e; //To zakomentować w publicznej wersji
		}
}
  
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Załóż konto</title> 
	<meta name="description" content="Gambit - klasyka literatury światowej. Gambit o strona poświęcona największym dziełom literatury klasycznej. Umorzliwia udostępnianie fragmentów książek, dzielenie się opiniami. Umorzliwia kupno wybranych pozycji w sklepie internetowym." />
	<meta name="keywords" content="gambit, literatura, książki, cytaty, literatura światowa, literatura klasyczna" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="stylesheet" href="gambit.css" type="text/css" />


<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="skrypt.js"></script>
	

	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<?PHP
  include('header.php');
?>


<div id="content">
	<div id="tytu"><div id="ttlo">ZAREJESTRUJ SIĘ</div></div>
	<div class="zawa"><form method="post">

	
	Nickname: &nbsp &nbsp &nbsp
	<input required type="text" name="nick" />
	<br /><br />
	<?php 

	

		if(isset($_SESSION['e_nick']))
		{
			echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
			unset($_SESSION['e_nick']);
		} 
	 ?>
	E-mail:&nbsp &nbsp &nbsp 
	<input required type="email" name="emailo" />
	<br /><br />
	<?php 

	

		if(isset($_SESSION['e_email']))
		{
			echo '<div class="error">'.$_SESSION['e_email'].'</div>';
			unset($_SESSION['e_email']);
		} 
	 ?>
	Hasło: &nbsp &nbsp &nbsp
	<input required type="password" name="haslo1" />
	<br /><br />
	<?php 
		if(isset($_SESSION['e_haslo']))
		{
			echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
			unset($_SESSION['e_haslo']);
		} 
	 ?>
	Powtórz hasło:&nbsp &nbsp &nbsp 
	<input required type="password" name="haslo2" />
	<br /><br />
	<label>
	<input required type="checkbox" name="akceptreg" /> Akceptuję regulamin</label>
	<br /><br />
		<?php 
		if(isset($_SESSION['e_regulamin']))
		{
			echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
			unset($_SESSION['e_regulamin']);
		} 
	 ?>
	<div class="g-recaptcha" data-sitekey="6LfYAxwTAAAAAIEy-kYE8EI3lE4ACApT7gaD2iM3"></div>
	<?php 
		if(isset($_SESSION['e_bot']))
		{
			echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
			unset($_SESSION['e_bot']);
		} 
	?>
	<br /><br />

	<input type="submit" value="Zarejestruj się" />
	<br /><br /><br /><br />
</form>
<?php
	if(isset($_SESSION['blad']))
	echo $_SESSION['blad'];
?>


	</div>
</div>


<?PHP
  include('footer.php');
?>

</body>
</html>