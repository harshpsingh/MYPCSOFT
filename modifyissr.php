<html>
<head>
<title>Modify</title>
<body>
<button><a href="Logout.php">logout</a></button>
<?php
session_start();
?>

<form method="post">
docketno<input type="text" name="docketno">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"><br>
<button type="submit" name="delete" formaction="deleteissr.php">Delete</button>
<button type="submit" name="update" formaction="updateissr.php">Update</button>
</form>
</body>
</html>