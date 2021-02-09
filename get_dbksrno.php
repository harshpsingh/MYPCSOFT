<?php
require_once("config.php");
if(!empty($_POST["ritc"])) 
{
	$ri=substr($_POST["ritc"],0,2);
$query =mysqli_query($con,"SELECT *FROM dbk where header =$ri");
?>
<option>dbksr</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["srno"] ?>"><?php echo $row["srno"] ?></option>


<?php
}
}
?>