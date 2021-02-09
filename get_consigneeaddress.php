<?php
require_once("config.php");
if(!empty($_POST["consigneename"])) 
{
$query =mysqli_query($con,"SELECT *FROM consignee WHERE consigneename = '" . $_POST["consigneename"]."'");
?>
<option value="">Select consignee address</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["address1"].$row["address2"].$row["city"] ?>"><?php echo $row["address1"].$row["address2"].$row["city"] ?></option>

<?php
}
}
?>