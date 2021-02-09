<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<title> Export Sea Operation</title>
<body style="background-color:#ffff99;">
<header>
<a href="logout.php">Logout</a>
<a href="operations.php">operations</a>
</header>
<h1>Export Sea Operation</h1>
<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
$_SESSION['branch']=$_POST['branch']; 
$_SESSION['fy']=$_POST['fy'];

?>
<form method="post">
<div class ="row">
<div class="col-md-4">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-4">
branch<input type="text" name="branch" readonly value="<?php echo $_POST['branch'];?>">
</div>
<div class="col-md-4">
year<input type="text" name="fy" readonly value="<?php echo $_POST['fy'];?>">
</div>
</div>

<div id="nav" style="width:200; height:1200; background-color:8080ff;">
<ul class="nav flex-column">
<li class="nav-item"><a href="essr.php"style="color:#990000;" >Shipment Registeration</a></li>

<li class="nav-item"> <a href="searchessr.php" style="color:#990000;">Search</a></li>
<li class="nav-item"><a href="bldetails.php"style="color:#990000;">Bill of lading</a></li>
<li class="nav-item"><a href="gsp.php"style="color:#990000;">GSP</a></li>
<li class="nav-item"><a href="generateinvoice.php"style="color:#990000;">invoices </a></li>
</ul>
<button type="submit" name="exportseareport" formaction="reports.php">Export sea report</button>
</div>
</form>
</body>
</head>
</html>