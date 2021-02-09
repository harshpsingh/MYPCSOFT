<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'master');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(!empty($_POST["currencyname"])) 
{
$query =mysqli_query($con,"SELECT exportexchange FROM currencymaster WHERE currencyname = '" . $_POST["currencyname"] . "'");
?>
<option value="">Select exchange rate</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["exportexchange"]; ?>"><?php echo $row["exportexchange"]; ?></option>

<?php
}
}
?>