<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<title> Modify edi invoice Details</title>
<body style="background-color:#ddddbb;">
<button><a href="logout.php">Logout</a><br></button>
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
$sql = "SELECT * from esediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]' and fy='$_POST[fy]'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$jobno=$_POST["jobno"];
		$branch=$row["branch"];
		$fy=$row["fy"];
			}
} else {
    echo "0 results";
}
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<h1> update</h1>
<form method="post">
<div class="row">
<div class="col-md-3">	
jobno<input type="text" name="jobno" readonly size="30" value="<?php echo $_POST["jobno"]?>">
</div>



<div class="col-md-3">
Branch<input type="text" name="branch"readonly value="<?php echo $branch?>">
</div>
<div class="col-md-3">
fy<input type="text" name="fy"  readonly value="<?php echo $fy?>">
</div>

<div class="col-md-3">
Invoicesrno<?php

$conn = new mysqli('localhost', 'root', '', 'exportsea') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from esediinvoice where jobno='$_POST[jobno]' and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='invoicesrno' id='invoicesrno'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $invoicesrno);
              
                  $invoicesrno = $row['invoicesrno']; 
                  echo '<option>'.$invoicesrno.'</option>';
                 
}

    echo "</select>";?>
	
	</div>
	</div>
	<button type="submit" name="update"  formaction="updateesediinvoice1.php">updateinvoice</button>
</form>
</body>
</head>
</html>