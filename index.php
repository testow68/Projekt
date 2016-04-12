<?php
 
 session_start();

 if(isset($_POST['komentusera']))
  {
  	$pozwol=true;
  	$komentusera= $_POST['komentusera'];

  	if((strlen($komentusera)>2000))
  	{
  		$pozwol = false;
		$_SESSION['e_koment']="Komentarz nie może mieć więcej niż 2000 znaków !";
	}

	$host = "localhost";
	$db_user = "root";
	$db_password = "piwo102";
	$db_name = "bazakomentarzy";
	mysqli_report(MYSQLI_REPORT_STRICT);

	
		{
			  $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			 	
				$komentusera = mysqli_real_escape_string($polaczenie, $_POST['komentusera']);//Link działa ale nie jest częścią kodu.
				$komentusera = htmlentities($komentusera, ENT_QUOTES, "UTF-8");//Link nie wyświetla się jako link tylko ciąg znaków.
			  	

			  if($polaczenie->connect_errno!=0)
			  {
			    throw new Exception(mysqli_connect_errno());
			  }

			 if($polaczenie->query("INSERT INTO komentarze VALUES(NULL, '$komentusera')"))
				  	{
				  		$_SESSION['komentarzdodany']=true;
				  		header('Location: index.php#footer');
				  	}
				  	else
				  	{
				  		throw new Exception($polaczenie->error);
				  	}

		 }
			  	$polaczenie->close();
			  	
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
	

<scritp type="text/javascritp" src="jquery.js"></scritp>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
	</script>
	



<script type="text/javascript" src="http://ciasteczka.eu/cookiesEU-latest.min.js"></script>




<script>
$(function(){
	
	$('#toggll').click(function(){
			$('#zawa').slideUp(800)
			$('#toggll').slideUp('fast');;
			$('#toggll').toggle();
			$('#togglldw').toggle();
			
			
		});
		$('#togglldw').click(function(){
					$('#zawa').slideDown(800);
					$('#togglldw').toggle();
					$('#toggll').toggle();
				
			
			
		});
		
	

	
		$('#komentujesz').click(function(){
			$('#komentos').slideToggle(800);
						
		});

		



	});
</script>	





<link href='http://fonts.googleapis.com/css?family=Exo&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<style>
p.normal {
    font-variant: normal;
}

p.small {
    font-variant: small-caps;
}
</style>


<script type="text/javascript">

jQuery(document).ready(function(){
	jQuery.fn.cookiesEU({
		text:		'Nasza strona internetowa używa plików cookies (tzw. ciasteczka) w celach statystycznych, reklamowych oraz funkcjonalnych. Dzięki nim możemy indywidualnie dostosować stronę do twoich potrzeb. Każdy może zaakceptować pliki cookies albo ma możliwość wyłączenia ich w przeglądarce, dzięki czemu nie będą zbierane żadne informacje. Dowiedz się więcej jak je wyłączyć.',
		close:		'x',
		position:	'fixed',
		bottom: 0,
		cookies_name: 'cookies-accepted',
		parent: jQuery('body'),
		show_close: true,
		box_class: '',
		use_default_css: true,
		box_css: '',
		inner_css: '',
		text_css: '',
		close_css: '',
		animation: 'slide',
		time: 500,
		auto_accept: true,
		test: false




	});
});


</script>


<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow35.js"></script>




</head>
<body>




  
<?PHP
  include('header.php');
   @$strona=$_GET['strona']; 				// 1
  
 if (file_exists('strony/'.$strona.'.php'))
	include('strony/'.$strona.'.php'); 	// 2
  else  
	include('strony/home.php'); 				// 3

  include('footer.php');

 
?>



</body>
</html>