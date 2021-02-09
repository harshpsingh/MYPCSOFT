<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<a href="Logout.php">logout</a><br>
<body style="background-color:#f1f799;">
<form method="post">
<div class="row">
<div class="col-md-4">
username<?php
$conn = new mysqli('localhost', 'root', '', 'master') ;

    $result = $conn->query("select distinct username from login");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='username'length='4' class='form-control' id='username' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $username);
              
                  $username = $row['username']; 
				
                 echo '<option>'.$username.'</option>';
                
}

    echo "</select>";?>
	</div>
<div class="col-md-4">
Division<input type="text" name="division" style="position: relative; top:20;">
</div>
<div class="col-md-4">
Role<input type="text" name="br" style="position: relative; top:20;">
</div>
</div>
<button type="submit" name="add"  value="ADD" formaction="savepermission.php">ADD</button>
<button type="submit" name="add"  value="ADD" formaction="updatepermission.php">update</button>

</form>
<iframe src="viewpermission.php" width ="400" height="600"></iframe>
</body>
</head>
</html>