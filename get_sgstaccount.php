<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
$pr=$_GET["payreceive"];
$cn=$_GET["chargename"];
if($pr=='Payable')
{
$query =mysqli_query($conn,"SELECT sgsthead FROM gstcharge WHERE chargename  = '" . $_GET["chargename"]."'");
?>
<option value="">Select Acc</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["sgsthead"] ?>"><?php echo $row["sgsthead"] ?></option>

<?php
}
}
else if($pr=='Receivable')
{
$query =mysqli_query($conn,"SELECT sgstincomehead FROM gstcharge WHERE chargename  = '" . $_GET["chargename"]."'");
?>
<option value="">Select Acc</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["sgstincomehead"] ?>"><?php echo $row["sgstincomehead"] ?></option>

<?php
}
}
?>