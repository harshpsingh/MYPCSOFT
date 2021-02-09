<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_GET["chargename"])) 
{
$query =mysqli_query($conn,"SELECT cgst FROM tradevoucher WHERE chargename  = '" . $_GET["chargename"]."' and invoiceno='" . $_GET["invoiceno"]."'");
?>
<option value="">Select cgst Amt</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["cgst"] ?>"><?php echo $row["cgst"] ?></option>

<?php
}
}
?>