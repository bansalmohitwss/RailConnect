<?php
session_start();
?>

<html>

<center>
<h1> Payment Details </h1>

<?php 

if(isset($_SESSION['train']))
{
	$row = $_SESSION['train'];
	$fare = $row[8];
	$seats = $_SESSION['seat'];
	echo "Number of seats booked : ".$seats;
	echo "<br>Fare of one Person : ".$fare;
}
else
{
	header("location:login.php");
}
?>

<br><br>

<form method="POST" action="billok.php">
Card Type : <br>
<input list="t" name="card" size="25">
 <datalist id="t">
 <option value="MASTER CARD">
 <option value="VISA">
 <option value="RUPAY">
 </datalist><br><br>

Card Number : <br>
<input type="number" name="a" size="30"><br><br>
Card Holder : <br>
<input type="text" name="b" size="25"><br><br>
Expiry Date : <br>
<input type="month" name="c" min="2018-12"><br><br>
CVV : <br>
<input type="number" name="d" size="25"><br><br>
<input type="submit" value="Submit"><br><br>
</form>
</html>