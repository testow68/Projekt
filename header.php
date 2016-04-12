
<head><link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="arkusz600.css" />


<script>
$(function(){
  
  $('#plog').mouseover(function(){
      $('#panellog').fadeToggle(800); 
    });

$('#content').click(function(){
      $('#panellog').fadeOut(800);
 
    });

  $('#gambitn').mouseover(function(){
      $('#wingl').fadeToggle(300);
       $('#wingr').fadeToggle(300);
     });
  $('#gambitn').mouseout(function(){
      $('#wingl').fadeToggle(300);
       $('#wingr').fadeToggle(300);
     });
    });
 </script>   

</head>
<div id="full">
<?php
echo<<<END
<header><img id="wingl" src="img/wingl.png" style="width:90px;height:75px;">
<img id="wingr" src="img/wingr.png" style="width:90px;height:75px;">

<a href="index.php" id="gambitn">
	G A M B I T</a><div id="login">
END;

  if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
  {
echo<<<END
 <a href="logout.php"><form method="get" action="logout.php"><button id="plog">WYLOGUJ</a></button></form></div>
END;
  }
  else
  {
echo<<<END
<a href="logowanie.php"><button id="plog">ZALOGUJ</button></a></div>

END;
include('panellog.php');
  }

echo<<<END

  </header>

</div>

<div id="tak">
  <ol>
    <li><a href="#">OFERTA</a>
      <ul>
        <li><a href="index.php?strona=slider">Slajder</a></li>
        <li><a href="index.php?strona=plikpdf">Plik PDF</a></li>
        <li><a href="rejestr.php">Zła rejestracja SQL</a></li>
        <li><a href="index.php?strona=podmiana">Ajax slider</a></li>
      </ul>
    </li>

    <li><a href="#">FORMULARZ</a>
      <ul>
        <li><a href="gambit.php">Wypełnij online</a></li>
        <li><a href="tekst.pdf">Pobierz</a></li>
      </ul>
    </li>

    <li><a href="index.php?strona=home">STRONA GŁÓWNA</a></li>

    <li><a href="#">KONTAKT</a>
      <ul>
        <li><a href="index.php?strona=adres">Adres firmy</a></li>
        <li><a href="index.php?strona=mapa">Mapa dojazdu</a></li>
      </ul>
    </li>

    <li><a href="rejestracja.php">REJESTRACJA</a>
    </li>

  </ol>
</div>
END;
?>
