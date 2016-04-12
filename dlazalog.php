<?php
  session_start();
  if(!isset($_SESSION['zalogowany']))
  {
  header('Location: logowanie.php');
  exit();
  }
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


<div id="content"><br /><br />
	<div id="tytu"><div id="ttlo"> STRONA LOGOWANIA</div></div>
	<div id="zawa">
<br /><br /><br />
	<?php
	
	

	echo "<p>Witaj ".$_SESSION['user']."!";

	?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	</div>
</div>



<?PHP
  include('footer.php');
?>

</body>
</html>