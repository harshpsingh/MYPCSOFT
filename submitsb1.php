
<html>
<head>
<title> Submit SB</title>
<body>
<form method="post">
<?php
session_start();
?>
jobno<input type="text" name="jobno" readonly value="<?php echo $_POST['jobno'];?>">

branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"><br>

 locationcode<?php
$conn = new mysqli('localhost', 'root', '', 'master') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from chalocation");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='locationcode'>";
    while ($row = $result->fetch_assoc()) {

                  unset( $locationcode);
              
                  $locationcode = $row['locationcode']; 
                  echo '<option>'.$locationcode.'</option>';
                 
}

    echo "</select>";?>
<option> </option>
</select>
icegateuser<select name="icegateuser">
<option>AMRITDEL1</option>
<option>AMRITDEL2</option>
<option>AMRITMUM1</option>
<option>AMRITMUM2</option>
<option>AMRITLDH1</option>
<option>AMRITLDH2</option>
<option>AMRITUP1</option>
<option>AMRITUP2</option>
</select>

<button type="submit" name="downloadsb" formaction="downloadsb1.php">download</button>


</form>
</body>
</head>
</html>