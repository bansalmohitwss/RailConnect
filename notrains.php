<?php
session_start();

if($_SESSION['date'] != ""){
	echo "<center>Sorry no trains are available for this route ..<br><br>";
	echo "<center><a href = 'fromto.php'>BOOK FOR ANOTHER ROUTE</a>";
}
else{
	echo "<center>Fill all entries !!!";
}
?>