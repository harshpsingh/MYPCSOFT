<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<title>Reports</title>
<body style="background-color:#c3f25e;">
<?php
session_start();


if(isset($_POST['branch'])){
$_SESSION['branch']=$_POST['branch'];
}

if(isset($_POST['fy'])){
$_SESSION['fy']=$_POST['fy'];
}
?>


<form method="post">
<div class="row">
<div class="four columns">
<label>username</label><input type="text" style="background-color:#9fd1c0; color:red;" name="username"  value="<?php echo $_SESSION['username'];?>">
</div>
<div class="four columns">
<label>branch</label><input type="text" name="branch" style="background-color:#9fd1c0; color:red;" value="<?php echo $_POST['branch'];?>">
</div>
<div class="four columns">
<label>year</label><input type="text" name="fy"style="background-color:#9fd1c0; color:red;" readonly value="<?php echo $_POST['fy'];?>">
</div>
</div>
<div class="row">
<div class="four columns">
<label> From Date</label><input type="date" name="fromdate" style="background-color:#9fd1c0; text-color:red;">
</div>
<div class="four columns">
 <label>To Date</label><input type="date" name="todate"style="background-color:#9fd1c0; ">
</div>
</div><br><br>
<button type="submit" class=" button button-primary" style="width: 200px; position:relative; left:360;"  name="importsea" formaction="isshiprep.php">import sea report</button><br>
<br><br>





     <input type="submit" name="export" class="button button-primary"style="width: 200px; position:relative; left:360;" value="Export to excel" formaction="exportexcel2.php" />
    </form>
</body>
</head>
</html>
