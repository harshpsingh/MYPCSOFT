<?php
require_once("config.php");
if(!empty($_POST["locationname"])) 
{
$query =mysqli_query($con,"SELECT *FROM chalocation WHERE locationname = '" . $_POST["locationname"] . "'");
?>
<option value="">Select chanumber</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["chanumber"]; ?>"><?php echo $row["chanumber"]; ?></option>

<?php
}
}
?>