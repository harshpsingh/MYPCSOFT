<?php
require_once("config.php");
if(!empty($_POST["origincountrycode"])) 
{

$query =mysqli_query($con,"SELECT * FROM portlist WHERE countrycode = '" . $_POST["origincountrycode"] . "'");
?>
<option value="">Select 
 Port</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["portname"]; ?>"><?php echo $row["portname"]; ?></option>
<?php
}
}
?>