<html>
<head>
<?php
session_start();

$_SESSION['jobno']=$_POST['jobno'];

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>
<button><a href="Logout.php">logout</a></button>
<a href="esediprofile.php">edi profile</a>
<form method="post">
jobno<input type="text" name="jobno" readonly value="<?php echo $_POST['jobno'] ?>">
Branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"><br><br>
<button type="submit" name="updateedisb1" formaction="updateedisb1.php">updatesb1</button>
<button type="submit" name="updateesediinvoice" formaction="updateesediinvoice.php">updatesediinvoice</button>
<button type="submit" name="updateesediitem" formaction="updateesediitem.php">updatesediitem</button>

<button type="submit" name="updateesedisupporting" formaction="updateesedisupporting.php">updatesedisupporting</button>
<button type="submit" name="printchecklist" formaction="printchecklist.php">printchecklist</button>
<button type="submit" name="submitsb" formaction="submitsb.php">submitsb</button>
</form>
</head>
</html>