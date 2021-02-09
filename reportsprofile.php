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

<button type="submit" formaction="shipmentreport.php">shipment report</button> 
<button type="submit" formaction="invoicereport.php">Listofinvoice</button> 
<button type="submit" formaction="hblreport.php">hblreport</button> 
<button type="submit" formaction="mblreport.php">mblreport</button> 

</form>
</body>
</head>
</html>