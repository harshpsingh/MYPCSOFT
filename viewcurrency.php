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
					dbname=master", "root", ""); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, 
						PDO::ERRMODE_EXCEPTION); 
} 
catch (PDOException $e) { 
	die("ERROR: Could not connect. ".$e->getMessage()); 
} 
try { 
	$sql = "SELECT * FROM currencymaster"; 
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table>"; 
		echo "<tr>";
	    
		echo "<th>Currencyname</th>";
		
		echo "<th>export Exchange</th>";
		echo "<th>Import Exchange</th>";
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
		     echo "<td>".$row['currencyname']."</td>"; 
			
			 echo "<td>".$row['exportexchange']."</td>"; 
			 	 echo "<td>".$row['importexchange']."</td>"; 
			 
			 		  
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
		