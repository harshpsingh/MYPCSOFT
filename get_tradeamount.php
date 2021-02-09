<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_GET["chargename"])) 
{
$query =mysqli_query($conn,"SELECT amount FROM tradevoucher WHERE chargename  = '" . $_GET["chargename"]."' and invoiceno='" . $_GET["invoiceno"]."'");
?>
<option value="">Select Amt</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["amount"] ?>"><?php echo $row["amount"] ?></option>

<?php
}
}
?>