<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>
<?php
session_start();
?>

		
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
Jobno<?php
$conn = new mysqli('localhost', 'root', '', 'importair') ;

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
<button type="submit" name="iaedidet" formaction="iaedidet1.php" >ia edi det</button>
<button type="submit" name="isediiovoice" formaction="iaediinvoice.php" >ia edi invoice</button>
<button type="submit" name="isediitem" formaction="iaediitem.php" >ia edi item</button>
<button type="submit" name="isedisupporting" formaction="iaedisupporting.php" >ia edi supporting</button>
<button type="submit" name="billofentry" formaction="printbillofentry1.php">billof entry</button>
<button type="submit" name="submitbe" formaction="submitbe1.php">Submit be</button>
</body>
</head>
</html>