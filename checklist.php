<html>
<head>
<body>
<?php
session_start();
?>
<form method="post">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"><br>
Jobno<input type="text" name="jobno">

<button type="submit" name="checklist" formaction="printchecklist.php">Checklist</button>
</form>
</body>
</head>
</html>