<?php 
$t=$_POST['n'];
$u=$_POST['d'];
$v=$_POST['e'];
$w=$_POST['c'];
$x=$_POST['sex'];
$y=$_POST['p'];
$z=$_POST['g'];

if($t=="" || $u=="" || $v=="" || $w=="" || $x=="" || $y=="" || $z=="")
{
	echo "You have to fill all entries Click &nbsp;&nbsp;&nbsp";
	echo "<a href='signup.php'>here</a> &nbsp;&nbsp to go back";
}

else
{
	if($y != $z)
	{
		echo "You have entered different password  Click &nbsp;&nbsp;&nbsp";
		echo "<a href='signup.php'>here</a> &nbsp;&nbsp to go back";
	}
	
	else
	{
		mysql_connect("localhost","root","");
		mysql_select_db("irctc");
		
		$query1 = "SELECT * FROM user WHERE email='$v'";
		$result = mysql_query($query1);
		$con = mysql_num_rows($result);
		
		if($con > 0)
		{
			echo "Email is already registered . Use another email for signup <br> Click  &nbsp;&nbsp;&nbsp";
			echo "<a href='signup.php'>here</a> &nbsp;&nbsp to go back";
		}
		
		else
		{
			$query2 = "SELECT * FROM user WHERE ph='$w'";
			$result1 = mysql_query($query1);
			$con = mysql_num_rows($result1);
			
			if($con > 0)
			{
				echo "Phone number is already registered. Use another phone for signup <br> Click &nbsp;&nbsp;&nbsp";
				echo "<a href='signup.php'>here</a> &nbsp;&nbsp to go back";
			}
			
			else
			{
				$query3 = "INSERT INTO user (name,dob,email,ph,sex,password) VALUES ('$t','$u','$v','$w','$x','$y')";
				mysql_query($query3);
				
				$query4="CREATE TABLE $t (pnr int(8),trainnum int(8),noofseat int(8),fare int(8),date1 varchar(10))";
				mysql_query($query4);
				
				echo " You are successfully registered to irctc <a href='login.php'>click here to login</a>";
				
			}
		}
	}
}