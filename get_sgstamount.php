<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_GET["chargename"])) 
{
$query =mysqli_query($conn,"SELECT sgst FROM tradevoucher WHERE chargename  = '" . $_GET["chargename"]."' and invoiceno='" . $_GET["invoiceno"]."'");
?>
<option value="">Select Sgst Amt</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["sgst"] ?>"><?php echo $row["s
gst"] ?></option>

<?php
}
}
?>