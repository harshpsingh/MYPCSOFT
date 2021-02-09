<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title> Export Sea Edi</title>
<body style="background-color:#d1ffed;">
<a href="edi.php">edi</a>
<a href="logout.php">logout</a>
<h1>Export Sea EDI</h1>
<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
$_SESSION['branch']=$_POST['branch'];
$_SESSION['fy']=$_POST['fy'];


?>

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
</div>
<div id="nav" style="width:200; height:100; background-color:#f5e2ce;">
<ul class="nav flex-column">
<li class="nav-item"><a href="queryedies.php"> create job</a></li>
<li class="nav-item"><a href="modifyedies.php"> modify job</a></li>


</ul>
</div>
</form>
</body>
</head>
</html>