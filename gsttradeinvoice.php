<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>GST Trade Invoice</title>
<button><a href="logout.php">Logout</a></button>
<button><a href="accountshome.php">Accounts</a></button>
<body style="background-color:#d4aed6;">
<?php
session_start();


?><a href="Logout.php">logout</a>
<h3 style="color:#ff6505;">GSt Trade Invoice</h3>
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

<button type="submit"formaction="tradeinvoice.php" >Trade Invoice</button>
<button type="submit"formaction="billtradevoucher.php" >Bill Trade Invoice</a></li>

</form>

</body>
</head>
</html>