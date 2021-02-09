<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<?php
session_start();
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
$sql = "SELECT * from esedisupporting where jobno='$_POST[jobno]' and branch='$_POST[branch]' and fy='$_POST[fy]' and invoicesrno='$_POST[invoicesrno]'and itemno='$_POST[itemno]' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	$jobno=$_POST["jobno"];
		$branch=$row["branch"];
		$fy=$row["fy"];
		$invoicesrno=$row["invoicesrno"];
		$itemno=$row["itemno"];
		$statementfor=$row["statementfor"];
		$irnno=$row["irnno"];
		$doctype=$row["doctype"];
		$doccode=$row["doccode"];
		$issuedpartyname=$row["issuedpartyname"];
		$issuedpartyaddress=$row["issuedpartyaddress"];
		$drn=$row["drn"];
		$place=$row["place"];
		$issuedate=$row["issuedate"];
		$expirydate=$row["expirydate"];
		$bnfpartyname=$row["bnfpartyname"];
		$bnfpartyaddress=$row["bnfpartyaddress"];
			}
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
<title> Modify edi item Details</title>
<body style="background-color:#ddddbb;">
<button><a href="logout.php">Logout</a><br></button>
<h1>modify edi invoice</h1>
<form method="post">
<div class="row">
<div class="col-md-4">
&nbsp jobno<input type="text" name="jobno" value="<?php echo $jobno?>">
</div>
<div class="col-md-4">
branch<input type="text" name="branch" value="<?php echo $branch?>">
</div>
<div class="col-md-4">
fy<input type="text" name="fy" value="<?php echo $fy?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
&nbsp invoicesrno<input type="text" name="invoicesrno" value="<?php echo $invoicesrno?>">
</div>
<div class="col-md-3">
itemno<input type="text" name="itemno" value="<?php echo $itemno?>">
</div>
<div class="col-md-3">
statementfor<input type="text" name="statementfor" value="<?php echo $statementfor?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
&nbsp irn<input type="text" name="irnno" value="<?php echo $irnno?>">
</div>
<div class="col-md-3">
docctype<input type="text" name="doctype" value="<?php echo $doctype?>">
</div>
<div class="col-md-3">
doccode<input type="text" name="doccode" value="<?php echo $doccode?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
&nbsp issuedpartyname<input type="text" name="issuedpartyname" value="<?php echo $issuedpartyname?>">
</div>
<div class="col-md-3">
issuedpartyaddress<input type="text" name="issuedpartyaddress" value="<?php echo $issuedpartyaddress?>">
</div>
<div class="col-md-3">
drn<input type="text" name="drn" value="<?php echo $drn?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
&nbsp place<input type="text" name="place" value="<?php echo $place?>">
</div>
<div class="col-md-3">
issuedate<input type="text" name="issuedate" value="<?php echo $issuedate?>">
</div>
<div class="col-md-3">
expirydate<input type="text" name="expirydate" value="<?php echo $expirydate?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
&nbsp bnfpartyname<input type="text" name="bnfpartyname" value="<?php echo $bnfpartyname?>">
</div>

<div class="col-md-3">
bnfpartyaddress<input type="text" name="bnfpartyaddress" value="<?php echo $bnfpartyaddress?>">
</div>
</div><br>
<button type="submit" name="updateedisupporting" formaction="updateesedisupporting1a.php">update supporting</button>
</form>
</body>
</head>
</html>