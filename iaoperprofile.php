<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<title> Import Air Operation</title>
<body>
<h1>Import Air Operation</h1>
<?php
session_start();
$_SESSION['branch']=$_POST['branch']; 
$_SESSION['fy']=$_POST['fy'];

?>
<form method="post">

username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>"><br>
branch<input type="text" name="branch" readonly value="<?php echo $_POST['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_POST['fy'];?>"><br>
<div id="nav" style="width:200; height:1200; background-color:  #a6ff4d;">
<ul class="nav flex-column">
<li class="nav-item"><a href="iasr.php" >Shipment Registeration</a></li>
<li class="nav-item"><a href="searchiasr.php" >Search</a></li>
<li class="nav-item"><a href="generateinvoiceairi.php">invoices </a></li>
<button type="submit" name="importairreport" formaction="reports3.php">import air report</button>
</ul>
</div>
</form>
</body>
</head>
</html>