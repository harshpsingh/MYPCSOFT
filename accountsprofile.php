<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>Accounts Profile</title>
<body style="background-color:#d4aed6;">
<?php
session_start();


?><a href="Logout.php">logout</a>
<h3 style="color:#ff6505;">Accounts Profile</h3>
<form method="post">
<div class="row">
<div class="col-md-4">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-4">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="col-md-4">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div><br>
<div id="nav" style="width:200; height:1200; background-color:80f0ff;">
<ul class="nav flex-column">
<li class="nav-item"><a href="accgroup.php" >Account Group</a></li>
<li class="nav-item"><a href="accountmaster.php" >Account master</a></li>
<li class="nav-item"><a href="gstchargemaster.php" >Gst Charge Master</a></li>
<li class="nav-item"><a href="journalentry.php">Journalentry</a></li>
<li class="nav-item"><a href="ledgers.php">Ledgers </a></li>
<li class="nav-item"><a href="balancedet.php">balancedetails</a></li>
<li class="nav-item"><a href="balancesheet.php">balancesheet</a></li>
</ul>
</div>
</form>
</body>
</head>
</html>