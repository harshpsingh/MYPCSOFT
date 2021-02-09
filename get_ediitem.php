<?php
session_start();
require_once("configes.php");
if(!empty($_POST["invoicesrno"])) 
{
$query =mysqli_query($con,"SELECT *FROM esediitem WHERE invoicesrno = '" . $_POST["invoicesrno"] . "' and jobno = '" . $_SESSION["jobno"] . "' and branch = '" . $_SESSION["branch"] . "' and fy = '" . $_SESSION["fy"] . "'");
?>

<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["itemno"] ?>"><?php echo $row["itemno"] ?></option>


<?php
}
}
?>