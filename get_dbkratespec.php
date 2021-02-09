<?php
require_once("config.php");
if(!empty($_POST["dbksrno"])) 
{
	
$query =mysqli_query($con,"SELECT *FROM dbk where srno ='".$_POST["dbksrno"]."'");
?>
<option>rate</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["dbkratespec"] ?>"><?php echo $row["dbkratespec"] ?></option>


<?php
}
}
?>