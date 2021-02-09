<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_GET["voucherno"])) 
{
$query =mysqli_query($conn,"SELECT distinct voucherdate FROM tradevoucher WHERE voucherno  = '" . $_GET["voucherno"]."'");
?>
<option value="">Select Date</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["voucherdate"] ?>"><?php echo $row["voucherdate"] ?></option>

<?php
}
}
?>