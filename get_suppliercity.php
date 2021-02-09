<?php
require_once("config.php");
if(!empty($_POST["supplieraddress2"])) 
{
$query =mysqli_query($con,"SELECT *FROM supplier WHERE address2 = '" . $_POST["supplieraddress2"] . "'");
?>
<option value="">Select city</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["city"] ?>"><?php echo $row["city"] ?></option>

<?php
}
}
?>     