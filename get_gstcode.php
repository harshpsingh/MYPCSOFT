<?php
require_once("config.php");
if(!empty($_POST["gststate"])) 
{
$query =mysqli_query($con,"SELECT *FROM gst WHERE gststate = '" . $_POST["gststate"]."'");
?>

<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["gstcode"] ?>"><?php echo $row["gstcode"] ?></option>

<?php
}
}
?>