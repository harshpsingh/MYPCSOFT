<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>
<button><a href="Logout.php">logout</a></button>
<a href="esediprofile.php">edi profile</a>
<?php
session_start();
$conn1=mysqli_connect('localhost','root','','exportsea');
$sql2="Select jobno from edijob where branch='$_SESSION[branch]'";
$result=mysqli_query($conn1,$sql2);
while($row=mysqli_fetch_array($result)){
    $jobno=$row['jobno'];
	$jobno=$jobno+1;
	$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn2 = new PDO("mysql:host=$servername;dbname=exportsea", $username, $password);
	$sql1="Update edijob set jobno=$jobno where branch='$_SESSION[branch]'";
	$conn2->exec($sql1);
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn2 =null;}
?>
<?php
		$servername = "localhost";
$username = "root";
$password="";

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
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select * from edijob where branch='$_SESSION[branch]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='jobno' class='form-control' id='jobno' >";

    while ($row = $result->fetch_assoc()) {

                  unset( $jobno);
              
                  $jobno = $row['jobno']; 
                 echo '<option>'.$jobno.'</option>';
                
}

    echo "</select>";?>
</div>
</div>
<button type="submit" name="create" formaction="esedidet.php">esedidet</button>

</body>
</head>
</html>