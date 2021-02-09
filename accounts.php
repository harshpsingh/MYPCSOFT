<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>Accounts master</title>
<body style="background-color:#d4aed6;">
<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
$_SESSION['branch']=$_POST['branch']; 
$_SESSION['fy']=$_POST['fy'];

?>
<button><a href="Logout.php">logout</a></button>
<h3 style="color:#ff6505;">Accounts Profile</h3>
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
<li class="nav-item"><a href="accountsprofile.php" >Accountsprofile</a></li>
<li class="nav-item"><a href="bankvouchers.php" >Bankvouchers</a></li>
<li class="nav-item"><a href="cashvouchers.php" >Cashvouchers</a></li>
<li class="nav-item"><a href="gsttradeinvoice.php" > GST Trade Invoice</a></li>
<li class="nav-item"><a href="journalvouchers.php" >Journal  vouchers</a></li>

<li class="nav-item"><a href="chequebookmanangement.php" >Chequebookmanagement</a></li>
<li class="nav-item"><a href="Salepurchase.php" >Sale/Purchase</a></li>
<li class="nav-item"><a href="outstanding.php" >outstanding bill</a></li>

</ul>
</div>
</form>
</body>
</head>
</html>