<html>
<head>
<title>Modify</title>
<body>
<button><a href="Logout.php">logout</a></button>

<?php
session_start();
?>

<form method="post">
docketno<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='docketno' class='form-control' id='docketno' >";

    while ($row = $result->fetch_assoc()) {

                  unset( $docketno);
              
                  $docketno = $row['docketno']; 
                 echo '<option>'.$docketno.'</option>';
                
}

    echo "</select>";?>
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"><br>

<button type="submit" name="delete" formaction="deleteessr.php">Delete</button>
<button type="submit" name="update" formaction="updateessr.php">Update</button>
</form>
</body>
</html>