<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_GET["invoiceno"])) 
{
$query =mysqli_query($conn,"SELECT chargename FROM tradevoucher WHERE invoiceno  = '" . $_GET["invoiceno"]."'");
?>
<option value="">Select Charges</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["chargename"] ?>"><?php echo $row["chargename"] ?></option>

<?php
}
}
?>