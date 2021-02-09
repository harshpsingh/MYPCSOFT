<?php
$conn= mysqli_connect('localhost','root','','accountmaster');
if(!empty($_POST["bankaccount"])) 
{
$query =mysqli_query($conn,"SELECT *FROM accountmaster where accountname='". $_POST["bankaccount"] . "'");
?>

<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["balance"] ?>"><?php echo $row["balance"] ?></option>

<?php
}
}
?>