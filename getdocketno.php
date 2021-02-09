<?php
session_start();

$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_POST["voucherno"])) 
{

$query =mysqli_query($conn,"SELECT *FROM tradevoucher where voucherno='". $_SESSION["voucherno"] . "'");


	
?>

<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["docketno"] ?>"><?php echo $row["docketno"] ?></option>

<?php
}
}
?>