<html>
<head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exportsea";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE esediitem SET  jobno='$_POST[jobno]',branch='$_POST[branch]',fy='$_POST[fy]',invoicesrno='$_POST[invoicesrno]',invoiceno='$_POST[invoiceno]',itemno='$_POST[itemno]',ritc='$_POST[ritc]',goodsdescription='$_POST[goodsdescription]'quantity='$_POST[quantity]',unit='$_POST[unit]',productrate='$_POST[productrate]',currencyname='$_POST[currencyname]',exchangerate='$_POST[exchangerate]',totalvaluefc='$_POST[totalvaluefc]',fobinr='$_POST[fobinr]',dbksrno='$_POST[dbksrno]',dbkrate='$_POST[dbkrate]',dbksrno='$_POST[dbksrno]',dbkamount='$_POST[dbkamount]',schemecode='$_POST[schemecode]',schemedescription='$_POST[schemedescription]',pmvpercentage='$_POST[pmvpercentage]',pmv='$_POST[pmv]',totalpmv='$_POST[totalpmv]',endusecode='$_POST[endusecode]',endusedescription='$_POST[endusedescription]',igstpaymentstatus='$_POST[igstpaymentstatus]',taxablevalue='$_POST[taxablevalue]',igstrate='$_POST[igstrate]',igstamount='$_POST[igstamount]',reward='$_POST[reward]',str='$_POST[str]',accessory='$_POST[accessory]',cess='$_POST[cess]' where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'and invoicesrno='$_POST[invoicesrno]' and itemno ='$_POST[itemno]'";

$conn->query($sql);



	


mysqli_close($conn);
?>
<form method="post">
jobno<input type="text" name="jobno" value="<?php echo $_POST['jobno']?>">
<button type="submit" formaction="updateesedi.php">submit</button>
</form>

</body>
</head>
</html>
   
