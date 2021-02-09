<html>
<head>
</head>
<title>dashboard</title>
<body>
<?php
session_start();
if(isset($_POST['username']))
{
$username=$_POST['username'];}
?>
<form method="post">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>"><br>
branch<select name="branch" id="branch">
<option>--Select--</option>
<option>New Delhi</option>
<option> Mumbai</option>
<option>Ludhiana</option>
<option> Haryana</option>
<option>Uttar Pradesh</option>
</select><br>
Year<select name="fy" id="fy">
<option>--Select--</option>
<option>1920</option>
<option> 2021</option>
</select><br>
<button type="submit" name="operation"formaction="operations.php">Operation</button>
</form>



</body>
</html>
