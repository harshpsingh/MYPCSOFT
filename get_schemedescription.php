<?php
require_once("config.php");
if(!empty($_POST["schemecode"])) 
{

$query =mysqli_query($con,"SELECT * FROM schemecode WHERE schemecode = '" . $_POST["schemecode"] . "'");
?>
<option value="">Select 
 Description</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["schemedescription"]; ?>"><?php echo $row["schemedescription"]; ?></option>
<?php
}
}
?>