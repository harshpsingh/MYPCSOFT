<?php
require_once("config.php");
if(!empty($_POST["importername"])) 
{
$query =mysqli_query($con,"SELECT *FROM importer WHERE importername = '" . $_POST["importername"] . "'");
?>
<option value="">Select address</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["address1"]. $row["address2"].$row["city"].$row["state"].$row["pin"].$row["country"]; ?>"><?php echo $row["address1"].$row["address2"].$row["city"].$row["state"].$row["pin"].$row["country"]; ?></option>

<?php
}
}
?>