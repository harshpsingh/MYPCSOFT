<?php
require_once("config.php");
if(!empty($_POST["originportname"])) 
{

$query =mysqli_query($con,"SELECT * FROM airportlist WHERE portname = '" . $_POST["originportname"] . "'");
?>
<option value="">Select 
 code</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["portcode"]; ?>"><?php echo $row["portcode"]; ?></option>
<?php
}
}
?>