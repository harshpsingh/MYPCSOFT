<?php
require_once("config.php");
if(!empty($_POST["destinationcountry"])) 
{
$query =mysqli_query($con,"SELECT * FROM airportlist WHERE countryname = '" . $_POST["destinationcountry"] . "'");
?>
<option value="">Select Port</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["portname"]; ?>"><?php echo $row["portname"]; ?></option>
<?php
}
}
?>