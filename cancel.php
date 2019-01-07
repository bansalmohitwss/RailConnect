<?php
session_start();
?>


<html>
<link rel="stylesheet" href="cancel.css">

<head>
	<div class="head"><section class="ank">Ticket Cancelation</section></div>
</head>


<div class="lo">
<?php
if(!isset($_SESSION['result'])){
	header("location:Mainpage.php");
}

$row = $_SESSION['result'];
$_SESSION['name'] = $row[0];
$n = $row[0];

mysql_connect("localhost","root","");
mysql_select_db("irctc");
$result1 = mysql_query("SELECT * FROM $n");
$con = mysql_num_rows($result1);
if($con == 0){
	header ("location:nocancel.php");
}

else{


echo "<table border = '5'>";
	echo "<tr>";
echo "<td >PNR</td>";
echo "<td >Train no.</td>";
echo "<td >SEATS</td>";
echo "<td >FARE</td>";
echo "<td >DATE</td>";
echo "</tr>";
	while($row1 = mysql_fetch_array($result1)){
	
	echo "<tr>";
	echo "<td>",$row1[0],"</td>";
	echo "<td>",$row1[1],"</td>";
	echo "<td>".$row1[2]."</td>";
	echo "<td>".$row1[3]."</td>";
	echo "<td>".$row1[4]."</td>";

	echo "</tr>";
	

}
echo "</table>";
}
?>
</div>
<br><br><br><br>
<div class="login">
<form method="POST" action="cancelation.php">
	enter pnr no. to be cancelled :<br>
	<input type="number" name="a"><br>
	<input type="submit" value="cancel">

</form>
</div>
</html>

