<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="profile.css">
</head>
<form method="POST">
<div class="head"><section class="ank">User Profile</section></div>
<br><br>
<div class="login">
<?php 

if(isset($_SESSION['result']))
{
	$r = $_SESSION['result'];
	echo "Name      : ".$r[0];
	echo "<br><br>DOB       : ".$r[1];
	echo "<br><br>Sex       : ".$r[4];
	echo "<br><br>Email     : ".$r[2];
	echo "<br><br>Phone     : ".$r[3];
}
else
{
	header("location:Mainpage.php");
}

?>
</div>
</form>
</html>

