<?php
require_once("config.php");
if(!empty($_POST["exportername"])) 
{
$query =mysqli_query($con,"SELECT *FROM exporter WHERE exportername= '" . $_POST["exportername"] . "'");
?>
<option value="">Select state</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["state"] ?>"><?php echo $row["state"] ?></option>

<?php
}
}
?>