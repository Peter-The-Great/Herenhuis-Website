<?php
$servername = "localhost";
$database = "80781_beroeps";
$username = "80781";
$password = "v6odf2zfX";

$conn = mysqli_connect($servername, $username, $password, $database);

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$bid = $_POST["bid"];
$email = $_POST["email"];
$date = date("Y-m-d");
	

		$sql = "INSERT INTO BID (Voornaam, Achternaam, BID, E_mail, date)
VALUES ('$voornaam', '$achternaam', '$bid', '$email', '$date');";

	mysqli_query($conn, $sql);
echo mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";
//header("Location: .../bidsysteem.php");
?>