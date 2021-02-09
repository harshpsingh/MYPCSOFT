<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
$pr=$_GET["payreceive"];
$cn=$_GET["chargename"];
if($pr=='Payable')
{
$query =mysqli_query($conn,"SELECT igsthead FROM gstcharge WHERE chargename  = '" . $_GET["chargename"]."'");
?>
<option value="">Select Acc</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["igsthead"] ?>"><?php echo $row["igsthead"] ?></option>

<?php
}
}
else if($pr=='Receivable')
{
$query =mysqli_query($conn,"SELECT igstincomehead FROM gstcharge WHERE chargename  = '" . $_GET["chargename"]."'");
?>
<option value="">Select Acc</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["igstincomehead"] ?>"><?php echo $row["igstincomehead"] ?></option>

<?php
}
}
?>