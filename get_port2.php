<?php
require_once("config.php");
if(!empty($_POST["dischargecountry"])) 
{
$query =mysqli_query($con,"SELECT * FROM portlist WHERE countryname = '" . $_POST["dischargecountry"] . "'");
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