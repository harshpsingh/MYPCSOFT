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
$sql = "UPDATE esedisupporting SET  jobno='$_POST[jobno]',branch='$_POST[branch]',fy='$_POST[fy]',invoicesrno='$_POST[invoicesrno]',itemno='$_POST[itemno]',statementfor='$_POST[statementfor]',irnno='$_POST[irnno]',doctype='$_POST[doctype]',doccode='$_POST[doccode]',issuedpartyname='$_POST[issuedpartyname]',issuedpartyaddress='$_POST[issuedpartyaddress]',drn='$_POST[drn]',place='$_POST[place]',issuedate='$_POST[issuedate]',expirydate='$_POST[expirydate]',bnfpartyname='$_POST[bnfpartyname]',bnfpartyaddress='$_POST[bnfpartyaddress]' where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'and invoicesrno='$_POST[invoicesrno]' and itemno ='$_POST[itemno]'";

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