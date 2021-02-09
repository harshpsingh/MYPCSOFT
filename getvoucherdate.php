<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_POST["voucherno"])) 
{
$query =mysqli_query($conn,"SELECT *FROM journalvoucher where voucherno='". $_POST["voucherno"] . "'");
?>
<option value="">Select date</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["entrydate"] ?>"><?php echo $row["entrydate"] ?></option>

<?php
}
}
?>