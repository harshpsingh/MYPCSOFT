<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
</body>
<?php
$conn=mysqli_connect("localhost" ,"root" ,"","accountmaster");
if(($_POST["accountgroup"]=="") and  ($_POST["accountname"]==""))
{
	$sql="Select * from accountmaster";
}
else if($_POST["accountgroup"]!="")
{
	$sql="Select * from accountmaster where accountgroup='$_POST[accountgroup]'";
}
else 
{

  $sql="Select * from accountmaster where accountname='$_POST[accountname]'";
}	
echo '
<table>
<tr>
<th>accountname</th>
<th>accountgroup</th>
<th>balance</th>
</tr>
';
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){

	echo"<tr>";
	echo"<td>".$row["accountname"]."</td>";
	echo"<td>".$row["accountgroup"]."</td>";
	echo"<td>".$row["balance"]."</td>";
echo"</tr>";}
echo "</table>";



?>
</body>
</html>