<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8" />
  <title>Tabela z danymi</title>



<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <link rel="stylesheet" href="gambit.css" type="text/css" />

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://ciasteczka.eu/cookiesEU-latest.min.js"></script>

<script type="text/javascript">

jQuery(document).ready(function(){
  jQuery.fn.cookiesEU();
});

</script>



</head>

<body>


<?PHP
  include('header.php');
?>

<?php


if (empty($_POST['imie'])) { 
                         echo "<script>alert('Nie wypełniono prawidłowo formoularza.'); document.location.href='rejestr.php';</script>"; 

} 





else {  


$mysql_host='localhost';
$mysql_user='root';
$mysql_password='piwo102';
$dbg = 'rejestgambit';


@$dbg = new mysqli($mysql_host, $mysql_user, $mysql_password, $dbg) or die();

@$connect = mysqli_connect($mysql_host, $mysql_user, $mysql_password, 'rejestgambit');
$connect->set_charset('utf8');
}

if (!@$connect) {
    echo "<script>alert('Nie nawiązano połączenia z bazą danych !'); document.location.href='rejestr.php';
    </script>";
}
else{



echo<<<END
<div id="content">
  <div id="tytu"><div id="ttlo">REJESTRACJA PRZEBIEGŁA POMYŚLNIE</div></div>
  <div id="zawa">
 
  <br /> 
  <br />
  
    Witamy w serwisie Gambit!
  <br />
  <br />
  <br />
  <br />
  <a href="index.php" class="btn_blue">Powrót</a>
   <br />
  <br />
  <br />
  <br />
   <br />
  <br />
  </div>


</div>


END;

  include('footer.php');






@$sql = mysqli_query($connect,"INSERT INTO gambittabela (imie, nazwisko, emailusera, loginusera, userhaslo)
VALUES ('$_POST[imie]', '$_POST[nazwisko]', '$_POST[useremail]', '$_POST[loginusera]', '$_POST[userhaslo]')") or die();



echo "<script>alert('Twoje dane znalazły się w bazie danych !'); 
    </script>";
} 
  



?>


</body>
</html>