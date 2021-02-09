<?php
require_once("config.php");
if(!empty($_POST["city"])) 
{
$query =mysqli_query($con,"SELECT *FROM supplier WHERE city = '" . $_POST["city"] . "'");
?>
<option value="">Select country</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["country"] ?>"><?php echo $row["country"] ?></option>

<?php
}
}
?>     