<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_GET["invoiceno"])) 
{
$query =mysqli_query($conn,"SELECT distinct payreceive FROM tradevoucher WHERE invoiceno  = '" . $_GET["invoiceno"]."'");
?>

<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["payreceive"] ?>"><?php echo $row["payreceive"] ?></option>

<?php
}
}
?>