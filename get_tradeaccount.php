<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
$pr=$_GET["payreceive"];
$cn=$_GET["chargename"];
if($pr=='Payable')
{
$query =mysqli_query($conn,"SELECT expensehead FROM gstcharge WHERE chargename  = '" . $_GET["chargename"]."'");
?>
<option value="">Select Acc</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["expensehead"] ?>"><?php echo $row["expensehead"] ?></option>

<?php
}
}
else if($pr=='Receivable')
{
$query =mysqli_query($conn,"SELECT incomehead FROM gstcharge WHERE chargename  = '" . $_GET["chargename"]."'");
?>
<option value="">Select Acc</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["incomehead"] ?>"><?php echo $row["incomehead"] ?></option>

<?php
}
}
?>