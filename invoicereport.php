<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>Reports</title>
<body style="background-color:#d4aed6;">
<?php
session_start();


?>
<button><a href="Logout.php">logout</a></button>
<h3 style="color:#ff6505;">Reports</h3>
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
<button type="submit" formaction="exportseainvoicereport.php" name="exportseainvoicereport">export sea invoice report</button>
<button type="submit" formaction="exportairinvoicereport.php" name="exportairinvoicereport">export air invoice report</button>
<button type="submit" formaction="importseainvoicereport.php" name="importseainvoicereport">import sea invoice report</button>
<button type="submit" formaction="importairinvoicereport.php" name="importairinvoicereport">import air invoice report</button>

</ul>

</form>
</body>
</head>
</html>