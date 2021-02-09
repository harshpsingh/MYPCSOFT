<?php
session_start();
if(isset($_POST['username']))
{
$username=$_POST['username'];
$branch=$_POST['branch']; 
$division=$_POST['division'];
$fy=$_POST['fy'];
$_SESSION['username']=$username;
$_SESSION['branch']=$branch;
}
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>welcome</title>
</head>
<body bgcolor="#d6c2c2">    
<form>
<p>Welcome :  | <a href="logout.php">Logout</a> </p><br>
username<input type="text" name="username" value="<?php echo $_SESSION['username'];?>">
Branch<select name="branch">
<option>Select Branch</option>
<option> New Delhi</option>
<option> Mumbai</option>
<option> Ludhiana</option>
<option> Haryana</option>
<option> Uttar Pradesh</option>

</select>
Financialyear<select name="financialyear" id="fy" value="financialyear">
     <option></option>
     <option value="2019-20">2019-20</option>
    <option value="2018-19">2018-19</option> <br>
    </select><br>

	Division<input type="submit" name="division"value="importair"  method="post" formaction="profile4.php"> <br>
    <input type="submit" name="division" value=" exportair" method="post" formaction="profile3.php"> <br>
	<input type="submit" name="division"  value="importsea" method="post"formaction="profile2.php">i<br>
	<input type="submit" name="division" value="exportsea" method="post" formaction="profile1.php"> <br>
</form>

 
 </body>
</html>

