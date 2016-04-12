<div id="content">
	<div id="tytu"><div id="ttlo">LORD JIM, JOSEPH CONRAD</div></div>
	<div id="zawa" style="text-indent: 1.25cm"> 


		<?php
		include_once "tekst.txt";
		?>

	</div>
</div>
<div class="buttons">

<script>
$(window).scroll(function(){
    if ($(window).scrollTop() >= 90)
    {
        $("#tak").css({position:'fixed',width:'100%',top:'0'});
    }
    else
    {
        $("#tak").css({position:'absolute',width:'100%',top:'90px'});
    }
});

</script>

<?php

 

  if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
  {
echo<<<END
 <div id="komentujesz" class="btn_red">Komentarze</div>
END;
  }
  else
  {
echo<<<END

<a href="logowanie.php"><div onclick="return confirm('Zaloguj się, aby skomentować');window.close();" id="skomentuj" class="btn_red">Komentarze</div></a>



END;
  }

?>
	
	<div id="toggll" class="btn_blue">Zwiń</div>
	<div id="togglldw" class="btn_blue">Rozwiń</div>
</div>



<div id="komentos" class="buttons">
	<div id="dol" class="zawa">
		<form method="post">

			<div class="comhead">Dodaj komentarz</div><br />
			<br /><br />
			<textarea maxlength="2000" required rows="10"  cols="100%" name="komentusera"></textarea>
			<br /><br />
			

				<?php
				if(isset($_SESSION['e_koment']))
				{
					echo '<div class="error">'.$_SESSION['e_koment'].'</div>';
					unset($_SESSION['e_koment']);
				} 
				?>


			<input class="btn_green" type="submit" value="Publikuj"></input>
				


			<div>
			<br><br>
			<br /><br />
<?php
				$host = "localhost";
				$db_user = "root";
				$db_password = "piwo102";
				$db_name = "bazakomentarzy";
				$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			 	 $sql = "SELECT komentarz FROM komentarze ORDER by id DESC LIMIT 7";
					$result = $polaczenie->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
         echo "<br>"."Komentarz: ". $row["komentarz"]."<br>";

					     }
					} else {
					     echo "0 komentarzy";
					}
					$result->free();
					$polaczenie->close();
?>
			</div>
			
		</form>
	</div>
</div>

