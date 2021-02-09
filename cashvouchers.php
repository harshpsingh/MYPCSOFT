<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>Bank Vouchers</title>
<button><a href="Logout.php">logout</a></button>
<button><a href="accountshome.php">Account</a></button>
<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">Cash Vouchers</h3>

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
Division<select name="division">
<option></option>
<option>Export Sea</option>
<option>Import Sea</option>
<option>Export Air</option>
<option>Import Air</option>
</select>
</div>
</div><br>
<button type="submit" name="cashreceipt" formaction="cashreceipts.php">Cash Receipt</button>
<button type="submit" name="cashpayment" formaction="cashpayments.php">Cash Payment</button>
</form>
</body>
</head>
</html>