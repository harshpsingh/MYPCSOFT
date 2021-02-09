<?php
require_once("config.php");
if(!empty($_POST["supplieraddress1"])) 
{
$query =mysqli_query($con,"SELECT *FROM supplier WHERE address1 = '" . $_POST["supplieraddress1"] . "'");
?>
<option value="">Select address</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["address2"] ?>"><?php echo $row["address2"] ?></option>

<?php
}
}
?>     