<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>Reports</title>
<body style="background-color:#d4aed6;">
<?php
session_start();
$_SESSION['branch']=$_POST['branch']; 
$_SESSION['fy']=$_POST['fy'];

?>
<button><a href="Logout.php">logout</a></button>
<h3 style="color:#ff6505;">Reports</h3>
<form method="post">
<div class="row">
<div class="col-md-4">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-4">
branch<input type="text" name="branch" readonly value="<?php echo $_POST['branch'];?>">
</div>
<div class="col-md-4">
year<input type="text" name="fy" readonly value="<?php echo $_POST['fy'];?>">
</div>
</div><br>
<div id="nav" style="width:200; height:1200; background-color:80f0ff;">
<ul class="nav flex-column">
<li class="nav-item"><a href="exportseashipments.php" >exportsea report</a></li>
<li class="nav-item"><a href="exportseadetails.php" >exportsea details</a></li>
<li class="nav-item"><a href="importseashipments.php" >Import sea report</a></li>
<li class="nav-item"><a href="importseadetails.php" >Import sea details</a></li>
<li class="nav-item"><a href="exportairshipments.php" >export air report</a></li>
<li class="nav-item"><a href="exportairdetails.php" >export air details</a></li>
<li class="nav-item"><a href="importairshipments.php" >import air report</a></li>
<li class="nav-item"><a href="importairdetails.php"> import air details</a></li>

</ul>
</div>
</form>
</body>
</head>
</html>