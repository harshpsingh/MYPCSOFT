<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'exportsea');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(!empty($_POST["chargename"])) 
{
$query =mysqli_query($con,"SELECT hsncode FROM invoicecharge WHERE chargename = '" . $_POST["chargename"] . "'");
?>
<option value="">Select hsn code</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["hsncode"]; ?>"><?php echo $row["hsncode"]; ?></option>

<?php
}
}
?>