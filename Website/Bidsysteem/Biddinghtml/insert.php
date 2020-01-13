<?php
$servername = "localhost";
$database = "80781_beroeps";
$username = "80781";
$password = "Qu1p3*v6";

$conn = mysqli_connect($servername, $username, $password, $database);

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$bid = $_POST["bid"];
$email = $_POST["email"];
$bank = $_POST["bank"];
$kaartnaam = $_POST["kaartnaam"];
$kaartnummer = $_POST["kaartnummer"];
$expmaand = $_POST["expmaand"];
$expjaar = $_POST["expjaar"];
$CVC = $_POST["cvc"];
$date = date("Y-m-d");
	

		$sql = "INSERT INTO BID (Voornaam, Achternaam, bod, E_mail, date, bank, kaartnaam, kaartnummer, expmaand, expjaar, CVC)
VALUES ('$voornaam', '$achternaam', $bid, '$email', '$date', '$bank', '$kaartnaam', '$kaartnummer', '$expmaand', '$expjaar', $CVC );";


	mysqli_query($conn, $sql);
echo mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";


$mailtekst = '
<html>
<head>
  <title>uw bod</title>
</head>
<body>
  <p>geachte'.$voornaam. $achternaam.'</p>
 
  <p>U staat als hoogste biedder met een bod van: '.$bid.'.<br>
  klik hier om het te zien.</p>
  
  <p>Met vriendelijke groet,<br><br><br>
  Henry petersons.</p>
</body>
</html>';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'To: '.$voornaam. $email.', ';
$headers[] = 'From: Henry petersons <henrypetersons@gmail.org>';
$headers[] = 'Cc: ramlal524@gmail.com.com';
$headers[] = 'Bcc: ramlal524@gmail.com';

		

mail("ramlal524@gmail.com", $email, "Uw bod", $mailtekst, implode("\r\n", $headers));



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/24c24daece.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="..\Huis foto's/logo.png">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <title>About Us</title>
</head>
<body>
    <center><div class="Text"><b style="color: darkviolet;">Bod Verstuurt</b><br> Uw bod is nu op de server gekomen.<br> U kunt terug gaan naar de homepagina om uw bod te zien.<br><br>
<a href="..\Website.html" style="color: green;">Terug naar de homepagina</a>
    </div></center>
    <script src="Script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
<!-- Ik weet misschien niet alles van html en css maar ik heb uiteindelijk wel iets kunnen maken.
	01001000 01100101 01101100 01110000
-->
</html>