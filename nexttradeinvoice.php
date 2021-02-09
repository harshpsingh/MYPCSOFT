<?php
session_start();

$voucherno=$_POST["voucherno"];
$num=explode("/",$voucherno);
$n=$num[3];
$n=$n+1;
$conn=mysqli_connect("localhost" ,"root","","accountmaster");
$sql="update tradevoucherno set voucherno=$n where branch='$_SESSION[branch]' and division='$_SESSION[division]'";
$result=mysqli_query($conn,$sql);
header("Location:tradeinvoice.php");

  

$conn =null;

?>