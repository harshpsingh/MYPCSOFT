<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<title> Export Air Operation</title>
<body style="background-color:#ffff99;" >
<h1>Export Air Operation</h1>
<?php
session_start();
$_SESSION['branch']=$_POST['branch']; 
$_SESSION['fy']=$_POST['fy'];

?>
 <button><a href="logout.php"> logout</a></button>
<form method="post">

username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>"><br>
branch<input type="text" name="branch" readonly value="<?php echo $_POST['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_POST['fy'];?>"><br>
<div id="nav" style="width:200; height:1200; background-color:80f0ff;">
<ul class="nav flex-column">
<li class="nav-item"><a href="easr.php" >Shipment Registeration</a></li>
<li class="nav-item"><a href="searcheasr.php" >Search</a></li>
<li class="nav-item"><a href="generateinvoiceair.php">invoices </a></li>
<li class="nav-item"><a href="bldetailsair.php">Bill of lading</a></li>
<button type="submit" name="exportairreport" formaction="reports1.php">Export air report</button>
</ul>
</form>
</body>
</head>
</html>