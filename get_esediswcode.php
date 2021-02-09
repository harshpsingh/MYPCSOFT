<?php
$con= mysqli_connect('localhost','root','','master');
if(!empty($_POST["qualifier"])) 
{
$query =mysqli_query($con,"SELECT * FROM singlewindowinfocode where qualifier='" . $_POST["qualifier"]."'");
?>
<option value="">Select swcode</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["code"] ?>"><?php echo $row["code"] ?></option>

<?php
}
}
?>