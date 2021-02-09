<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<?php
session_start();

try { 
	$pdo = new PDO("mysql:host = localhost; 
					dbname=exportsea", "root", ""); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, 
						PDO::ERRMODE_EXCEPTION); 
} 
catch (PDOException $e) { 
	die("ERROR: Could not connect. ".$e->getMessage()); 
} 
try {
	$sql = "SELECT *FROM edisb1 where  jobdate between '$_POST[fromdate]' and '$_POST[todate]' and branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'";
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table id='sr'>"; 
		echo "<tr>";
		echo "<th>jobno</th>";
		echo "<th>jobdate</th>";
		
		echo "<th>Branch</th>";
		
		echo "<th>exportername</th>";
		echo "<th>consigneename</th>";
		echo "<th>destinationname</th>";
		echo "<th>destinationportname</th>";
		
		
		echo"</tr>";
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
 
			 echo "<td>".$row['jobno']."</td>"; 
			 echo "<td>".$row['jobdate']."</td>"; 
			 
			  echo "<td>".$row['branch']."</td>"; 
			 echo "<td>".$row['exportername']."</td>";
             echo "<td>".$row['consigneename']."</td>";	
             echo "<td>".$row['destinationcountryname']."</td>";	
             echo "<td>".$row['destinationportname']."</td>";			 
			 	} 
		echo "</table>"; 
		unset($res); 
	} 
	else { 
		echo "No matching records are found."; 
	} 
} 
catch (PDOException $e) { 
	die("ERROR: Could not able to execute $sql. " 
								.$e->getMessage()); 
}
unset($pdo); 
?> 
<form method="post">

jobno <?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;
 $result = $conn->query("SELECT *FROM edisb1 where  jobdate between '$_POST[fromdate]' and '$_POST[todate]' and branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='jobno'  id='jobno' >";

    while ($row = $result->fetch_assoc()) {

                  unset( $job);
              
                  $jobno = $row['jobno']; 
                 echo '<option>'.$jobno.'</option>';
                
}

    echo "</select>";
?> 
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"><br>

<button type="submit" name="delete" formaction="deleteesedi.php">Delete</button>
<button type="submit" name="update" formaction="updateesedi.php">Update</button>
<button type="submit" name="delete" formaction="printchecklist.php">checklist</button>
<button type="submit" name="delete" formaction="submitsb.php">sb</button>
</form>
  </html>
