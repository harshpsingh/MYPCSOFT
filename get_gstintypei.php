<?php
require_once("config.php");
if(!empty($_POST["importername"])) 
{
$query =mysqli_query($con,"SELECT *FROM importer WHERE importername  = '" . $_POST["importername"]."'");
?>
<option value="">Select gstintype </option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["gstintype"] ?>"><?php echo $row["gstintype"] ?></option>

<?php
}
}
?>