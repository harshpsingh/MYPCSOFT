<?php
require_once("config.php");
if(!empty($_POST["dischargecountryname"])) 
{

$query =mysqli_query($con,"SELECT * FROM countrylist WHERE countryname = '" . $_POST["dischargecountryname"] . "'");
?>
<option value="">Select 
 code</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["countrycode"]; ?>"><?php echo $row["countrycode"]; ?></option>
<?php
}
}
?>