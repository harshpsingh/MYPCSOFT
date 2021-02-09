<?php
require_once("config.php");
if(!empty($_POST["exportername"])) 
{
$query =mysqli_query($con,"SELECT *FROM exporter WHERE exportername = '" . $_POST["exportername"] . "'");
?>
<option value="">Select city</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["city"] ?>"><?php echo $row["city"] ?></option>

<?php
}
}
?>