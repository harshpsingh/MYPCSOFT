<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
$pr=$_GET["payreceive"];
$cn=$_GET["chargename"];
if($pr=='Payable')
{
$query =mysqli_query($conn,"SELECT cgsthead FROM gstcharge WHERE chargename  = '" . $_GET["chargename"]."'");
?>
<option value="">Select Acc</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["cgsthead"] ?>"><?php echo $row["cgsthead"] ?></option>

<?php
}
}
else if($pr=='Receivable')
{
$query =mysqli_query($conn,"SELECT cgstincomehead FROM gstcharge WHERE chargename  = '" . $_GET["chargename"]."'");
?>
<option value="">Select Acc</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["cgstincomehead"] ?>"><?php echo $row["cgstincomehead"] ?></option>

<?php
}
}
?>