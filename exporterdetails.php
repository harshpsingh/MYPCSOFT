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
	$sql = "SELECT * FROM exporter where exportername='$_POST[exportername]'"; 
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table>"; 
		echo "<tr>";
	    
	
		
		echo "<th>exportername</th>";
		echo "<th>address1</th>";
		echo "<th>address2</th>";
		echo "<th>city</th>";
		echo "<th>State</th>";
		echo "<th>Pin</th>";
		echo "<th>Country</th>";
		echo "<th>iec</th>";
		echo"<th>gstintype</th>";
		echo "<th>gstin</th>";
	
		echo "<th>gststatename</th>";
		echo "<th>gststatecode</th>";
		echo "<th>branchcode</th>";
		echo "<th>panno</th>";
		echo "<th>ADCode</th>";

	
		
		
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
		     echo "<td>".$row['exportername']."</td>"; 
			 echo "<td>".$row['address1']."</td>"; 
			 echo "<td>".$row['address2']."</td>"; 
			 echo "<td>".$row['city']."</td>"; 
			 echo "<td>".$row['state']."</td>"; 
			 echo "<td>".$row['pin']."</td>"; 
			 echo "<td>".$row['country']."</td>"; 
			
			 echo "<td>".$row['iec']."</td>"; 
			 echo "<td>".$row['gstintype']."</td>";
			  echo "<td>".$row['gstin']."</td>"; 
			  
			    echo "<td>".$row['gststatename']."</td>"; 
				
				  echo "<td>".$row['gststatecode']."</td>"; 
				  echo "<td>".$row['branchcode']."</td>"; 
				  echo "<td>".$row['panno']."</td>";
				  echo "<td>".$row['adcode']."</td>";
			   
				  
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