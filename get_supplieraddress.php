<?php
require_once("config.php");
if(!empty($_POST["suppliername"])) 
{
$query =mysqli_query($con,"SELECT *FROM supplier WHERE suppliername = '" . $_POST["suppliername"] . "'");
?>
<option value="">Select address</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["address1"]. $row["address2"].$row["city"].$row["country"]; ?>"><?php echo $row["address1"].$row["address2"].$row["city"].$row["country"]; ?></option>

<?php
}
}
?>