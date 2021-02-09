<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<?php
try { 
	$pdo = new PDO("mysql:host = localhost; 
					dbname=accountmaster", "root", ""); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, 
						PDO::ERRMODE_EXCEPTION); 
} 
catch (PDOException $e) { 
	die("ERROR: Could not connect. ".$e->getMessage()); 
} 
try { 
	$sql = "SELECT * FROM accgroup"; 
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table>"; 
		echo "<tr>";
	    
		echo "<th>AccountGroup</th>";
		
		echo "<th>Accounttype</th>";
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
		     echo "<td>".$row['accountgroup']."</td>"; 
			
			 echo "<td>".$row['accounttype']."</td>"; 
			 	 
			 
			 		  
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
  </html>
		