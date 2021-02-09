<?php
session_start();
$_SESSION['username']=$_POST['username'];
$conn=mysqli_connect("localhost","root","","master");
$sql="Select * from login where username='".$_SESSION['username']."' and password='".$_POST['password']."'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count==0)
{
echo "invalid username";
}
else
{
$sql1="Select * from loginroles where username='".$_SESSION['username']."'";
$result1=mysqli_query($conn,$sql1);
   while($row = mysqli_fetch_assoc($result1)) {
	   $div=$row['division'];
	   if($div=='admin')
	   {
		   header("location:adminpage.php");
	   }
	   else if($div=='operation')
	   {
		   header("location:operations.php");
	   }
	   else if($div=='edi')
	   {
		   header("location:edi.php");
	   }
	    else if($div=='accounts')
	   {
		   header("location:accountshome.php");
	   }
		   
   }
 
}
?>
<html>
<head>
<body>
<a href="logout.php">Logout</a>
<form method="post">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username']?>">


</form>
</head>
</body>
</html>