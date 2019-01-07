<?php

session_start();

$a = $_POST['n'];
$b = $_POST['seats'];

mysql_connect("localhost" , "root" , "");
mysql_select_db("irctc");

$query = "SELECT * FROM trains WHERE trainnum =$a"; 
$result = mysql_query($query);
$con = mysql_num_rows($result);

if($con == 0){
	echo "<center>No such train is available for booking !!";
	echo "<center><a href = 'fromto.php'>Book another train</a>";
}

else{

	$row = mysql_fetch_array($result);
	$num = $row[7];
	if($num < $b){
		echo "<center>Sufficient seats are not available<br><br>";
		echo "<a href = 'fromto.php'> Try again </a>";
	}

	else{
		$_SESSION['train'] = $row;
		$_SESSION['seat'] = $b;
		header("location:bill.php");
	}
}



?>