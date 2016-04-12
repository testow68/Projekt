<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Gambit</title> 
	<meta name="description" content="Gambit - klasyka literatury światowej. Gambit o strona poświęcona największym dziełom literatury klasycznej. Umorzliwia udostępnianie fragmentów książek, dzielenie się opiniami. Umorzliwia kupno wybranych pozycji w sklepie internetowym." />
	<meta name="keywords" content="gambit, literatura, książki, cytaty, literatura światowa, literatura klasyczna" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="stylesheet" href="gambit.css" type="text/css" />


<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="skrypt.js"></script>
	

	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

</head>
<body>

<?PHP
  include('header.php');
?>


<div id="content">
	<div id="tytu"><div id="ttlo"> FORMULARZ REJESTRACJI</div></div>
	<div id="zawa"><form action="rejestrtosql.php" method="post">

	
	
	<input required type="text" name="imie" placeholder="Imię" />
	<br /><br />

	<input required type="text" name="nazwisko" placeholder="Nazwisko" />
	<br /><br />
	
	<input required type="email" name="useremail" placeholder="Adres e-mail" />


	<br /><br />
	
	<input required type="text" name="loginusera" placeholder="Login" />
	<br /><br />


	<input required type="password" name="userhaslo" placeholder="Hasło"/>
	<br /><br />
	

	<input type="submit" value="Zarejestruj" />
	<br /><br /><br /><br />
</form>
*wszystkie pola wymagane
<br /><br /><br />
	</div>
</div>


<?PHP
  include('footer.php');
?>

</body>
</html>