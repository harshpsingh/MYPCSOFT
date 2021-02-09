<?php
$con= mysqli_connect('localhost','root','','master');
if(!empty($_POST["type"])) 
{
$query =mysqli_query($con,"SELECT * FROM singlewindowinfo where type='" . $_POST["type"]."'");
?>
<option value="">Select qualifiercode</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["qualifier"] ?>"><?php echo $row["qualifier"] ?></option>

<?php
}
}
?>