<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Search</title>
<body style="background-color:#ff9966;">
<button><a href="Logout.php">logout</a></button>
<a href="esediprofile.php">edi profile</a>
<?php
session_start();
?>

<form method="post" >
<div class="row">
 <div class="col-md-6">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
 <div class="col-md-6">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div>
<div class="row">
<div class="col-md-4">
fromdate<input type="date" name="fromdate">
</div>
<div class="col-md-4">
Todate<input type="date" name="todate">
<button type="submit" name="view" formaction="viewesedi.php">viewbydate</button>
</div>

</div>
</div>
<div class="row">
<div class="col-md-6">
exportername<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct exportername from edisb1 where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='exportername' class='form-control' id='exportername' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $exportername);
              
                  $exportername = $row['exportername']; 
				
                 echo '<option>'.$exportername.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit" name="view" formaction="viewesedi1.php" style="position: relative; top:20;">viewbyexporter</button>
	</div>
	</div>
</form>
</body>
</html>