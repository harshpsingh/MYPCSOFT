<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title> Export air Edi</title>
<body>
<h1>Export air EDI</h1>
<?php
session_start();
$_SESSION['branch']=$_POST['branch']; 
$_SESSION['fy']=$_POST['fy'];

?>


<form method="post">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>"><br>
branch<input type="text" name="branch" readonly value="<?php echo $_POST['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_POST['fy'];?>"><br>
<div id="nav" style="width:200; height:1200; background-color:f58dff;">
<ul class="nav flex-column">
<li class="nav-item"><a href="queryediea.php">CreateJob</a></li>
<li class="nav-item"><a href="modifyediea.php"> Modify</a></li>


</ul>
</div>
</form>
</body>
</head>
</html>