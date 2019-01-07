<?php
session_start();

$n = $_POST['a'];

if($n=="")
{
	echo "<center>Enter a valid pnr number<br>";
	echo "Click &nbsp;&nbsp <a href='cancel.php'> here to go back";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("irctc");
	$name = $_SESSION['name'];

	$query1="SELECT * FROM $name WHERE pnr=$n";
	$res = mysql_query($query1);
	$con = mysql_num_rows($res);

	if($con==0){
		echo "<center>Enter a valid pnr number<br>";
		echo "Click &nbsp;&nbsp <a href='cancel.php'> here to go back";
	}

	else
	{
		$r = mysql_fetch_array($res);
		$tn = $r[1];

		$result = mysql_query("SELECT * FROM $name WHERE pnr =$n");
		$row = mysql_fetch_array($result);
		$bookedseats = $row[2];

		$query = "DELETE FROM $name WHERE pnr=$n";
		mysql_query($query);

		mysql_query("UPDATE trains SET seats = seats+$bookedseats WHERE trainnum =$tn");
		echo "<center>Cancellation successfull";
		echo "<center><a href='Mainpage.php'>Home</a>";
	}
}
?>