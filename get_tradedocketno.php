<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_GET["invoiceno"])) 
{
$query =mysqli_query($conn,"SELECT distinct docketno FROM tradevoucher WHERE invoiceno  = '" . $_GET["invoiceno"]."'");
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