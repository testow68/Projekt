<?php
  session_start();
  if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
{
  header('Location: logowanie.php');
  exit();
}
?>




<?php
  

  require_once "connect.php";

  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

  if($polaczenie->connect_errno!=0)
  {
    echo "Error: ".$polaczenie->connect_errno." Opis: ".$polaczenie->connect_error;
  }
  else
  {
  $login = $_POST['login'];
  $haslo = $_POST['haslo'];
  
  $login = htmlentities($login, ENT_QUOTES, "UTF-8"); //zabezpieczenie przed wstrzyknięciem
  

 if ($rezultat = @$polaczenie->query(
    sprintf("SELECT*FROM uzytkownicy WHERE user='%s'",
      mysqli_real_escape_string($polaczenie,$login)))) 
  {
    $ilu_userow = $rezultat->num_rows;
    if($ilu_userow>0)
    {
        $wiersz = $rezultat->fetch_assoc();

        if(password_verify($haslo, $wiersz['pass']))
        {
              $_SESSION['zalogowany']=true;
              $_SESSION['id'] = $wiersz['id'];
              $_SESSION['user'] = $wiersz['user'];

              unset($_SESSION['blad']);

              $rezultat->free();
              header('Location: dlazalog.php');
         }

         else{
          $_SESSION['blad'] = '<span style="color:red">Błędny login lub hasło!</span>'; header('Location: logowanie.php');
          }


    }else{

      $_SESSION['blad'] = '<span style="color:red">Błędny login lub hasło!</span>'; header('Location: logowanie.php');

    }
  }

  $polaczenie->close();
  }

?>

