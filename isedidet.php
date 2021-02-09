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
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
<button type="submit" name="isedidet" formaction="isedidet1.php" >is edi det</button>
<button type="submit" name="isediiovoice" formaction="isediinvoice.php" >is edi invoice</button>
<button type="submit" name="isediitem" formaction="isediitem.php" >is edi item</button>
<button type="submit" name="isedisupporting" formaction="isedisupporting.php" >is edi supporting</button>
<button type="submit" name="billofentry" formaction="printbillofentry.php">billof entry</button>
<button type="submit" name="submitbe" formaction="submitbe.php">Submit be</button>
</body>
</head>
</html>