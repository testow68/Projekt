
  
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


<?PHP
    $adresat = 'p.piw91@gmail.com';    // pod ten adres zostanie wysłana wiadomosc 
   $header =    "From: p.piw91@gmail.com "; 
if (empty($_POST['imienazwisko'])) { 
                         echo "<script>alert('Nie wypełniono prawidłowo formoularza.'); document.location.href='gambit.php';</script>"; 


} else {  
     

 $imienazwisko = $_POST['imienazwisko'];
 $email = $_POST['email'];
 $szklanki = $_POST['szklanki'];
 $talerze = $_POST['talerze'];
 $suma = 0.99*$szklanki + 2.29*$talerze;
 $sumszkla = 0.99*$szklanki;
 $sumtal = 2.29*$talerze;
 $message = $_POST['message'];
 

 $tytul = "Formularz kontaktowy z Gambit";
 $dostawa = $_POST['dostawa'];

echo<<<END
<div id="content">
  <div id="tytu"><div id="ttlo">PODSUMOWANIE ZAMÓWIENIA</div></div>
  <div id="zawa"><div id="tabelazam">
    <table border="1" cellpadding="10" cellspace="0">

  <tr>
    <td>Imię i Nazwisko</td><td>$imienazwisko</td>
  </tr>
  <tr>
    <td>Adres e-mail</td><td>$email</td>
  </tr>

  <tr>
    <td>Szklanki (0.99 EUR/szt)</td><td>szt. $szklanki ; EUR $sumszkla</td>
  </tr>
  <tr>
    <td>Talerze (2.29 EUR/szt)</td><td>szt. $talerze ; EUR $sumtal</td>
  </tr>

  <tr>
    <td>Typ dostawy</td><td>$dostawa</td>
  </tr>


  <tr>
    <td>Suma</td><td>$suma EUR</td>
  </tr>
  </table>
  <br><a href="index.php" class="btn_blue">Powrót</a>
  </div>

  </div>
</div>


END;




require '/opt/lampp/htdocs/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'testow68@gmail.com';                 // SMTP username
$mail->Password = 'testow68123';                          // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to 587-poprzednie465

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('testow68@gmail.com', 'Joe User');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('aa@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML


$mail->Subject = $tytul;
$mail->Body = "";
$mail->Body .= "Imie i nazwisko: " . $imienazwisko . "\n". "<br />";
$mail->Body .= "Email: " . $email . "\n". "<br />";
$mail->Body .= "Wiadomość: " . $message . "\n". "<br />";
$mail->Body .= "Szklanki: " . "szt." . $szklanki . "; EUR" . $sumszkla . "\n". "<br />";
$mail->Body .= "Talerze: " . "szt." . $talerze . "; EUR" . $sumtal . "\n". "<br />";
$mail->Body .= "Suma: " . $suma .  "EUR". "\n". "<br />";
$mail->Body .= "Dowstawa: " . $dostawa . "\n". "<br />";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo "<script>alert('Wysyłanie nie powiodło się !'); 
     </script>"; 
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
     echo "<script>alert('Wysłano !'); 
    </script>";
    include('footer.php');
    exit;
   
}

} 
?>




<?PHP
  include('footer.php');
?>

</body>
</html>