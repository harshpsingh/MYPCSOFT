<?php
require_once("config.php");
if(!empty($_POST["dischargecountrycode"])) 
{

$query =mysqli_query($con,"SELECT * FROM portlist WHERE countrycode = '" . $_POST["dischargecountrycode"] . "'");
?>
<option value="">Select 
 code</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["portname"]; ?>"><?php echo $row["portname"]; ?></option>
<?php
}
}
?>