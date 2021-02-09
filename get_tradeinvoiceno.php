<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_GET["voucherno"])) 
{
$query =mysqli_query($conn,"SELECT distinct invoiceno FROM tradevoucher WHERE voucherno  = '" . $_GET["voucherno"]."'");
?>
<option value="">Select Inv</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["invoiceno"] ?>"><?php echo $row["invoiceno"] ?></option>

<?php
}
}
?>