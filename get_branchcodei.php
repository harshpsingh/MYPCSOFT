<?php
require_once("config.php");
if(!empty($_POST["importername"])) 
{
$query =mysqli_query($con,"SELECT *FROM importer WHERE importername  = '" . $_POST["importername"]."'");
?>
<option value="">Select branch code</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["branchcode"] ?>"><?php echo $row["branchcode"] ?></option>

<?php
}
}
?>