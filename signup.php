<html>
<head>
        <title>SignUP
        </title>
        <link rel="stylesheet" href="signup.css">
    </head>

<b><ins>
<div class="head"> <section class="ank"> Register </section></div>
</ins></b>
<br>
<form method="POST" action="connect.php">
<div class="login box">
<br><br><br><br>
<p>Enter Name  :</p>
<input type="text" name="n" size="25"><br><br>
<p>Enter DOB :</p><br>
<input type="date" name="d" size="25"><br><br>
 <p>Enter E-mail :</p><br>
<input type="email" name="e" size="25"><br><br>
<p>Enter Phone :</p><br>
<input type="number" name="c" size="25"><br><br>
<p>Enter Sex :</p><br>
<input list="s" name="sex">
  <datalist id="s">
    <option type="text" value="Male"></option>
    <option type="text" value="Female"></option>
    <option type="text" value="Others"></option>
  </datalist><br><br>
<p>Enter Password :</p><br>
<input type="password" name="p" size="25"><br><br>
<p>Enter Confirm-Password :</p><br>
<input type="password" name="g" size="25"><br><br>
<input type="submit" value="Submit"><br>
</div>
</form>
</html>