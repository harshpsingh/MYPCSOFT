<html>
<head>
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
<button type="submit" class="btn-primary" name="system"formaction="esexporterwise.php" style="position:relative; left:30;">exporterwise</button>
<button type="submit" class="btn-primary" name="system"formaction="esconsigneewise.php" style="position:relative; left:30;">consigneewise</button>
<button type="submit" class="btn-primary" name="system"formaction="esshiplinewise.php" style="position:relative; left:30;">shiplinewise</button>
<button type="submit" class="btn-primary" name="system"formaction="esoverseasagentwise.php" style="position:relative; left:30;">overseasagentwise</button>
<button type="submit" class="btn-primary" name="system"formaction="esdestinationwise.php" style="position:relative; left:30;">destinationwise</button>
</form>
</head>
</html>