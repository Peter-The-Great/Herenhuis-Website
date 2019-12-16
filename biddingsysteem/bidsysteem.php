
<!DOCTYPE html>
<html>
<head>
<title>bidsysteem</title>
	
</head>
<body>

<h1>plaats hier uw bod</h1>
<form action="insert.php" method="POST">
bid: <input type="number" name="bid" value="<?php echo $bid;?>" min="<?php $row["BID"];?>" placeholder="Minst meer dan € 100.000" required><br><br>
Voornaam: <input type="text" name="voornaam" value="<?php echo $voornaam;?>"required><br><br>
Achternaam: <input type="text" name="achternaam" value="<?php echo $achternaam;?>"required><br><br>
E-mail: <input type="email" name="email" value="<?php echo $email;?>" required><br><br>
<input type="submit" name="submit">
<input type="reset" name="reset">
</form>

<?php
$servername = "localhost";
$database = "80781_beroeps";
$username = "80781";
$password = "v6odf2zfX";

$conn = mysqli_connect($servername, $username, $password, $database);
	
	
	$sql= "SELECT `Voornaam`, `date`, `BID` FROM `BID` ORDER BY BID DESC";
    $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) >= 5) {
    
		
	
		echo "<table>";
    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
        echo "<td>".$row["Voornaam"]."</td>" . "<td>" . $row["BID"]. "</td>" . "<td>" . $row["date"] . "</td>" . "<br>";
		echo "</tr>";
    }
			//Close table
		echo "</table>";
} else {
    echo "0 results";
}
sort ($row["BID"]);
	
	
	?>
</body>
</html>
