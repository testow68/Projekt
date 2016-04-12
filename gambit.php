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
	<div id="tytu"><div id="ttlo"> FORMULARZ ZAMÓWIENIA</div></div>
	<div id="zawa"><form action="order.php" method="post">

	
	Imię i Nazwisko*: &nbsp &nbsp &nbsp
	<input required type="text" name="imienazwisko" />
	<br /><br />
	Adres e-mail*:&nbsp &nbsp &nbsp 
	<input type="email" name="email" />
	<br /><br />


	Liczba szklanek(0.99 EUR/szt)*: &nbsp &nbsp &nbsp
	<input required type="number" min="0" max="100" name="szklanki" placeholder=" 0-100" />
	<br /><br />
	Liczba talerzy(2.29 EUR/szt)*: &nbsp &nbsp &nbsp
	<input required type="number" min="0" max="100" name="talerze" placeholder=" 0-100" />
	<br /><br />
	Typ dostawy*: &nbsp &nbsp &nbsp
	<select required id="dostawa" name="dostawa">
		
		<option value="" selected>Wybierz</option>

 	<option value="Wysyłka kurierska po wpłacie">Wysyłka kurierska po wpłacie</option>
 	<option value="Wysyłka za pobraniem">Wysyłka za pobraniem</option>
 	<option value="Odbiór osobisty">Odbiór osobisty</option>


	</select>
	<br /><br />
	Dołącz wiadomość: <br/><br/>
	<textarea rows="10" cols="70" name="message" placeholder="Treść"></textarea>
	<br /><br />

	<input type="submit" value="Wyślij zamówienie" />
	<br /><br /><br /><br />
</form>
*wymagane pola

	</div>
</div>

<?php
 include('footer.php');
?>


</body>
</html>