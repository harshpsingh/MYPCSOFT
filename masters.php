<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<title>Masters</title>
<body style="background-color:#ffb3ff;">
<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();

if(isset($_POST['username']))
{
$username=$_POST['username'];}
?>
<a href="logout.php">Logout</a> </p><br>
<ul>
<p>username   <?php echo $_SESSION['username'];?></p>
<div id="nav" style="width:200; height:1200; background-color:#ffb3b3;">
<ul class="nav flex-column">

<li class="nav-item"><a href="exporter.php">Exporter</a></li>

<li class="nav-item"><a href="consignee.php">Consignee</a></li>
<li class="nav-item"><a href="shipline.php">Shipline</a></li>
<li class="nav-item"><a href="overseasagent.php">Overseasagent</a></li>
<li class="nav-item"><a href="importer.php">Importer</a></li>
<li class="nav-item"><a href="Supplier.php">Supplier</a></li>
<li class="nav-item"><a href="Country.php">country</a></li>
<li class="nav-item"><a href="portlist.php">SeaPort</a></li>
<li class="nav-item"><a href="airportlist.php">AirPort</a></li>
<li class="nav-item"><a href="currencymaster.php">Currency</a></li>
</ul>
</div>
</body>
</head>
</html>