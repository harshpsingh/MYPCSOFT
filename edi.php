<html>
<head> 
<script>
function myes()
{

	document.getElementById("ea").style.visibility="hidden";
	document.getElementById("is").style.visibility="hidden";
	document.getElementById("ia").style.visibility="hidden";
}
function myis()
{

	document.getElementById("ea").style.visibility="hidden";
	document.getElementById("es").style.visibility="hidden";
	document.getElementById("ia").style.visibility="hidden";
}
function myea()
{

	document.getElementById("ia").style.visibility="hidden";
	document.getElementById("es").style.visibility="hidden";
	document.getElementById("is").style.visibility="hidden";
}
function myia()
{

	document.getElementById("ea").style.visibility="hidden";
	document.getElementById("es").style.visibility="hidden";
	document.getElementById("is").style.visibility="hidden";
}
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<title>edi</title>
<body style="background-color:#ffcc33"><button><a href="logout.php"> logout</a></button>
<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start(); 

$conn=mysqli_connect("localhost","root","","master");
$sql="Select * from loginroles where username='".$_SESSION['username']."'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	if($row['br']=='exportsea')
	{
		 echo "<body onLoad='myes();'>";
	}
	else if($row['br']=='importsea')
	{
		echo "<body onLoad='myis();'>";
	}
	else if($row['br']=='exportair')
	{
		echo "<body onLoad='myea();'>";
	}
	else if($row['br']=='importair')
	{
		echo "<body onLoad='myia();'>";
	}
	
}
?>
   

<form method="post">
<div class="row">
<div class="col-md-4">
username<input type="text" name="username"  value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-4">
branch<select name="branch" id="branch" required>

<option>New Delhi</option>
<option> Mumbai</option>
<option>Ludhiana</option>
<option> Haryana</option>
<option>Uttar Pradesh</option>
</select>
</div>
<div class="col-md-4">
Year<select name="fy" id="fy" required>
<option>--Select--</option>
<option>19-20</option>
<option> 20-21</option>
</select>
</div>
</div><br><br><br><br>

<button type="submit" id="es"name="exportsea" formaction="esediprofile.php">export sea</button><br>
<br><br>
<button type="submit"  id="ea" name="exportair" formaction="eaediprofile.php">export air</button><br><br><br>
<button type="submit"  id="is" name="importsea"formaction="isediprofile.php">import sea</button><br><br><br>
<button type="submit"   id="ia"name="importair" formaction="iaediprofile.php">import air</button><br><br><br>


</form>


</body>
</head>
</html>
