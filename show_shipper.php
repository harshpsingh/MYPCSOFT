<?php
$docketno=$_GET["docketno"];
$dock=explode("/",$docketno);
if($dock[1]=="SE"){

$conn= mysqli_connect('localhost','root','','exportsea');
if(!empty($_GET["docketno"])) 
{
$query =mysqli_query($conn,"SELECT *FROM shipmentregister where docketno='". $_GET["docketno"] . "'");
?>

<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["exportername"] ?>"><?php echo $row["exportername"] ?></option>

<?php
}
}
}
else if($dock[1]=="AE"){
	
$conn= mysqli_connect('localhost','root','','exportair');
if(!empty($_GET["docketno"])) 
{
$query =mysqli_query($conn,"SELECT *FROM shipmentregister where docketno='". $_GET["docketno"] . "'");
?>

<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["exportername"] ?>"><?php echo $row["exportername"] ?></option>
<?php
}
}
}
else if($dock[1]=="SI"){
	
$conn= mysqli_connect('localhost','root','','importsea');
if(!empty($_GET["docketno"])) 
{
$query =mysqli_query($conn,"SELECT *FROM shipmentregister where docketno='". $_GET["docketno"] . "'");
?>

<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["importername"] ?>"><?php echo $row["importername"] ?></option>
<?php
}
}
}
else{
	$conn= mysqli_connect('localhost','root','','importair');
if(!empty($_GET["docketno"])) 
{
$query =mysqli_query($conn,"SELECT *FROM shipmentregister where docketno='". $_GET["docketno"] . "'");
?>

<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["importername"] ?>"><?php echo $row["importername"] ?></option>
<?php
}
}
}
?>