<?php
require_once("config.php");
if(!empty($_POST["consigneeaddress1"])) 
{
$query =mysqli_query($con,"SELECT *FROM consignee WHERE address1 = '" . $_POST["consigneeaddress1"]."'");
?>
<option value="">Select consignee address2</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["address2"] ?>"><?php echo $row["address2"] ?></option>

<?php
}
}
?>