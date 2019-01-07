<?php

session_start();

$y = $_POST['a'];
$z = $_POST['b'];

if($y == "" || $z == ""){
	echo "Enter all the fields. <a href='login.php'> Click to go back </a> ";
}

else{
	
	mysql_connect("localhost" , "root" , "");
	mysql_select_db("irctc");

	
	$query = "SELECT * FROM user WHERE name='$y' && password='$z'";
	$result = mysql_query($query);
	$r = mysql_fetch_array($result);
	$_SESSION['result'] = $r;
	$con = mysql_num_rows($result);
	
	if($con == 0){
		echo "Wrong username or password. <a href='login.php'> Click here to go back </a>";
	}
	
	else{
		echo "<b><center>Login Successfull</center></b>";
		$_SESSION['rem'] = $y;		
		header ("location:Mainpage.php");
	}
	
}


?>