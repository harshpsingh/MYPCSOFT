<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>
<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
if(isset($_POST['jobno'])){
$_SESSION['jobno']=$_POST['jobno'];}
?>
<?php
		$servername = "localhost";
$username = "root";
$password="";

?>
<a href="edi.php">edi</a>		
<form method="post">
<div class="row">
<div class="col-md-3">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-3">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>


<div class="col-md-3">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
<div class="col-md-3">
Job no<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select * from edijob where branch='$_SESSION[branch]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='jobno' style='max-width:50%; position:relative; left:20; id='jobno' >";

    while ($row = $result->fetch_assoc()) {

                  unset( $jobno);
              
                  $jobno = $row['jobno']; 
                 echo '<option>'.$jobno.'</option>';
                
}

    echo "</select>";?>
</div>
</div>

<button type="submit" name="essb1" formaction="esedidet1.php">esedisb1</button>
<button type="submit" name="esediiovoice" formaction="esediinvoice.php" >es edi invoice</button>

<button type="submit" name="esediitem" formaction="esediitem.php" >es edi item</button>
<button type="submit" name="esedithird" formaction="esedithirdparty.php" >es edi third party</button>
<button type="submit" name="singlewin" formaction="esedisinglewindow.php">Single window</button>
<button type="submit" name="license" formaction="esedilicense.php">License Details</button>
<button type="submit" name="esedisupporting" formaction="essupportingdetails.php" >es edi supporting</button>
<button type="submit" name="checklist" formaction="printchecklist.php">Checklist</button>
<button type="submit" name="submitsb" formaction="submitsb.php">Submit SB</button>
</form>
</body>
</head>
</html>