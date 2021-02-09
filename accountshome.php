<html>
<head>
<title>ACC</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<body style="background-color:#d4aed6;">
 <button><a href="logout.php"> logout</a></button>
<?php
session_start();


?>


<form method="post">
<div class="row">
<div class="col-md-4">
username<input type="text" name="username"  value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-4">
branch<select name="branch" id="branch" required>

<option>New Delhi</option>
<option> Mumbai</option>
<option>Ludhiana</option>
<option> Haryana</option>
<option>Uttar Pradesh</option>
</select>
</div>
<div class="col-md-4">
Year<select name="fy" id="fy" required>
<option>--Select--</option>
<option>19-20</option>
<option> 20-21</option>
</select>


</div>
</div><br>
<button type="submit" name="exportsea" style="position:relative; left:80;top:50;" formaction="accounts.php">accounts</button><br>
</form>


</body>
</head>
</html>