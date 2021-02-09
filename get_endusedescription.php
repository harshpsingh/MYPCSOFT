<?php
require_once("config.php");
if(!empty($_POST["endusecode"])) 
{

$query =mysqli_query($con,"SELECT * FROM enduse WHERE endusecode = '" . $_POST["endusecode"] . "'");
?>
<option value="">Select 
 Description</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["endusedescription"]; ?>"><?php echo $row["endusedescription"]; ?></option>
<?php
}
}
?>