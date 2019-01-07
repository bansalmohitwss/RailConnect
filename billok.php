<?php 
session_start();

$w=$_POST['a'];
$x=$_POST['b'];
$y=$_POST['c'];
$z=$_POST['d'];

if($w=="" || $x=="" || $y=="" || $z=="")
{
	echo "<center>Fill all card details";
	echo "<br> Click &nbsp;&nbsp;&nbsp <a href='bill.php'> here &nbsp to go back";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("irctc");

	$row1 = $_SESSION['train'];
	$tn = $row1[0];
	
	//$seat1 = $row[7];

	$n = $_SESSION['seat'];
	$query = "UPDATE trains SET seats=seats-$n WHERE trainnum=$tn";
	mysql_query($query);

	$con = $_SESSION['train'];
	$row = $_SESSION['result'];
	$name = $row[0];

	$num = $con[0];
	$fare = $con[8]*$n;
	$date = $_SESSION['date'];
	
	$query5 = "SELECT * FROM pnr";
	$r1 = mysql_query($query5);
	$row = mysql_fetch_array($r1);
	$pn = $row[0];

	$query2="INSERT INTO $name (pnr,trainnum,noofseat,fare,date1) VALUES ($pn,$num,$n,$fare,'$date')";
	mysql_query($query2);

	$query5 = "UPDATE pnr SET p=$pn+1";
	mysql_query($query5);

	header("location:success.php");
}
?> 