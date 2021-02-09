<?php
$conn=mysqli_connect("localhost" ,"root","","accountmaster");
$sql="Update accountmaster set balance='$_POST[balance]' where accountname='$_POST[accountname]'";
if(mysqli_query($conn,$sql)=="TRUE"){
echo "record modified";
}
$conn =null;
?>