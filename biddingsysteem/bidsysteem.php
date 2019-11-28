<!DOCTYPE html>
<html>
<body>


Voornaam: <input type="text" name="voornaam" value="<?php echo $voornaam;?>"required><br><br>
Achternaam: <input type="text" name="achternaam" value="<?php echo $achternaam;?>"required><br><br>
E-mail: <input type="email" name="email" value="<?php echo $email;?>"required><br><br>
bid: <input type="text" name="voornaam" value="<?php echo $bid;?>"required><br><br>
<script>
Asking Price: $1
Bidder 1: Max Bid of $4,000 -> High Bid: $1,000
Bidder 2: Max Bid of $3,000 -> High Bid: $3,000 -> [AUTO BIDDER 1] High Bid: $4,000
Bidder 3: Max Bid of $8,000 -> High Bid: $5,000
Bidder 4: Max Bid of $10,000 -> [AUTO BIDDER 3] High Bid: $8,000 -> High Bid: $9,000

</script>
<?php  
	$voornaam = $achternaam = $email = $bid =  "";

		
		if ($_POST["submit"]) {
	print "<h2>uw bid wordt geplaats</h2>";
	$email = $_POST["email"];
	$voornaam = $_POST["voornaam"];
	$achternaam = $_POST["achternaam"];	

	/*$mailtekst = "
Geachte $voornaam $achternaam.

Hierbij uw reserveringsgegevens:
De gekozen datum is:.$datum
De gekozen tijd is: $tijd
Comment: $comment


tot gauw, 

kip & ei restaurant.";
**/
	mail("rik@remijn.org,$email", "Kip & Ei resevering ", $mailtekst, "From: no-reply@kipei.org");

function placeBid($currentBidder,$highBid,$thisBidder,$thisBid,$increment)
?>  

</body>
</html>
