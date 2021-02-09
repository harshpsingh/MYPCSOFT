<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>
<?php
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
Jobno<?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

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

<button type="submit" name="easb1" formaction="eaedidet1.php">eaedisb1</button>
<button type="submit" name="eaediiovoice" formaction="eaediinvoice.php" >ea edi invoice</button>

<button type="submit" name="eaediitem" formaction="eaediitem.php" >ea edi item</button>
<button type="submit" name="eaediitem" formaction="eaedithirdparty.php" >ea edi third party</button>
<button type="submit" name="eaedisupporting" formaction="easupportingdetails.php" >ea edi supporting</button>
<button type="submit" name="checklist" formaction="printchecklistair.php">Checklist</button>
<button type="submit" name="submitsb" formaction="submitsb1.php">Submit SB</button>
</form>
</body>
</head>
</html>