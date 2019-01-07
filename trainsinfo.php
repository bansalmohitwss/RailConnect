 <html>
 <head>
 	<link rel="stylesheet" href="trainsinfo.css">
 </head>
 <body>
 	<div class="head"> <section class="ank"> TRAIN INFORMATION</section></div>
 	<div class="lo">
 		<?php
 	session_start();
$w=$_POST['a'];
$x=$_POST['b'];
$y=$_POST['c'];

$_SESSION['date'] = $y;
$_SESSION['from1'] = $w;
$_SESSION['to1'] = $x;
if($y == ""){
	header ("location:notrains.php");
}

if($w=="" || $x==""){
header ("location:notrains.php");
}
else{
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$qu="SELECT * FROM trains WHERE from1='$w' AND to1='$x'";
$result=mysql_query($qu);
$con=mysql_num_rows($result);
if($con==0){
header ("location:notrains.php");
}
else
{

echo "<table border='5'>";


echo "<tr>";
echo "<td >Train no.</td>";
echo "<td >Train name</td>";
echo "<td >FROM</td>";
echo "<td >To</td>";
echo "<td >DPT</td>";
echo "<td >ARR</td>";
echo "<td >DUR</td>";
echo "<td >SEATS</td>";
echo "<td >FARE</td>";
echo "</tr>";
while($row=mysql_fetch_array($result)){
echo "<tr>";
echo "<td >".$row[0]."</td>";
echo "<td >".$row[1]."</td>";
echo "<td >".$row[2]."</td>";
echo "<td >".$row[3]."</td>";
echo "<td >".$row[4]."</td>";
echo "<td >".$row[5]."</td>";
echo "<td >".$row[6]."</td>";
echo "<td >".$row[7]."</td>";
echo "<td >".$row[8]."</td>";
echo "<td >".$row[9]."</td>";
echo "</tr>";

}
echo "</table>";
}
}



?></div>
<br><br><br>
<div class="login">
<form method = "POST" action = "inter.php">
enter train no. which you want to book :<br>
<input type="number" name="n"><br>
enter no. of seats :<br>
<input type="number" name="seats"><br>
<input type="submit" type="submit">
</form>
<div>
</body>
</html>

