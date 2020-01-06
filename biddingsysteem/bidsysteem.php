<?php
$servername = "localhost";
$database = "80781_beroeps";
$username = "80781";
$password = "Qu1p3*v6";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>bidsysteem</title>
	
</head>
<body>

	<?php
	$sql= "SELECT `bod` FROM `BID` ORDER BY `bod` DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$antwoord = mysqli_fetch_array($result);
	
	/*if (!$conn -> query($sql)) {
	  echo("Error description: " . $conn -> error);
	}
	else {echo $sql;}*/
	
	$minbid = ($antwoord['bod'] + 10000);
	//echo "<p>$minbid</p>";

	
	?>
<h1>plaats hier uw bod</h1>
<form action="insert.php" action="mail.php"  method="POST">
bid: <input type="number" name="bid" value="<?php echo $bid;?>" min="<?php echo $minbid;?>"placeholder="Minst meer dan € 100.000" required><br><br>
Voornaam: <input type="text" name="voornaam" value="<?php echo $voornaam;?>"required><br><br>
Achternaam: <input type="text" name="achternaam" value="<?php echo $achternaam;?>"required><br><br>
E-mail: <input type="email" name="email" value="<?php echo $email;?>" required><br><br>
<input type="submit" name="submit">
<input type="reset" name="reset">
</form>

<?php

	
	$sql= "SELECT `Voornaam`, `date`, `bod` FROM `BID` ORDER BY bod DESC";
    $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)  > 0 ) {
    
		
	
		echo "<table>";
    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
        echo "<td>".$row["Voornaam"]."</td>" . "<td>" . $row["bod"]. "</td>" . "<td>" . $row["date"] . "</td>" . "<br>";
		echo "</tr>";
    }
			//Close table
		echo "</table>";
} else {
    echo "0 results";
}
sort($row["bod"]);
	
	
	?>
</body>
</html>
