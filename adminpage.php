<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>admin page</title>
<body style="background-color:#ffcc33">
<?php
session_start();
?>
 <a href="logout.php">Logout</a> </p><br>
 <form method="post">
<div class="row">
<div class="col-md-4">

username<input type="text" name="username"  size="24"  readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-4">
branch<select name="branch" id="branch"  style="width:40%; height:5%;" required>

<option>New Delhi</option>
<option> Mumbai</option>
<option>Ludhiana</option>
<option> Haryana</option>
<option>Uttar Pradesh</option>
</select>
</div>
<div class="col-md-4">
Year<select name="fy" id="fy" style="width:40%; height:5%;" required>
<option>--Select--</option>
<option>19-20</option>
<option> 20-21</option>
</select>
</div>
</div><br><br>

<button type="submit" class="btn-primary" name="system"formaction="system.php"  style="margin-left:20; width:120;">System</button>
<button type="submit" name="masters" class="btn-primary" formaction="masters.php" style="margin-left:40;width:120;">Master</button>
<button type="submit" name="operation" class="btn-primary"formaction="operations.php"style="margin-left:60;">Operation</button>
<button type="submit" name="edi" class="btn-primary" formaction="edi.php" style="margin-left:80;width:120;">edi</button>
<button type="submit" name="Accounts"class="btn-primary"  formaction="accounts.php"style="margin-left:100;width:120;">accounts</button>
<button type="submit" name="reports"class="btn-primary"  formaction="reportsprofile.php"style="margin-left:100;width:120;">report</button>



</form>

</body>
</html>
