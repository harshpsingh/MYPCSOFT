<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_GET["chargename"])) 
{
$query =mysqli_query($conn,"SELECT *FROM gstcharge where chargename='". $_GET["chargename"] . "'");
?>

<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["sac"] ?>"><?php echo $row["sac"] ?></option>

<?php
}
}
?>