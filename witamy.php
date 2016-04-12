<?php

  session_start();

  if(!isset($_SESSION['udanarejestracja']))
  {
  	header('Location: index.php');
  	exit();
  }
  else
  {
    unset($_SESSION['udanarejestracja']);
  }

  //Usuwanie zmiennych pamiętających wartości wpisane do formularza
  if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
  if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
  if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
  if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
  if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
  
  //Usuwanie błędów rejestracji
  if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
  if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
  if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
  if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
  if (isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);

?>

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
	<div id="tytu"><div id="ttlo"> STRONA LOGOWANIA</div></div>
	<div id="zawa"><br /><br />Dziękujemy za rejestrację w serwisie. Możesz już zalogować się na swoje konto!
<br /><br /><br /><br />
	</div>
</div>

<?PHP
  include('footer.php');
?>

</body>
</html>