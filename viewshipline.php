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
	$sql = "SELECT * FROM shipline"; 
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table>"; 
		echo "<tr>";
	    
		echo "<th>shiplinename</th>";
		
		echo "<th>Address1</th>";
		echo "<th>Address2</th>";
		echo "<th>State</th>";
		
		
		echo "<th>City</th>";
		echo "<th>PIN</th>";
	
		echo "<th>Country</th>";
		echo "<th>Phone</th>";
		echo "<th>Fax</th>";
		echo "<th>Email</th>";
		echo "<th>Mobile</th>";
		echo "<th>gststate</th>";
		echo "<th>gstcode</th>";
		echo "<th>gstin</th>";
		
		
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
		     echo "<td>".$row['shiplinename']."</td>"; 
			
			 echo "<td>".$row['address1']."</td>"; 
			  echo "<td>".$row['address2']."</td>"; 
			   echo "<td>".$row['state']."</td>";
			  
			    echo "<td>".$row['city']."</td>"; 
				  echo "<td>".$row['pin']."</td>"; 
				
				  echo "<td>".$row['country']."</td>"; 
				  echo "<td>".$row['phone']."</td>"; 
			   echo "<td>".$row['fax']."</td>"; 
			    echo "<td>".$row['email']."</td>"; 
				 echo "<td>".$row['mobile']."</td>"; 
				  echo "<td>".$row['gststate']."</td>"; 
				  echo "<td>".$row['gstcode']."</td>"; 
				  echo "<td>".$row['gstin']."</td>"; 
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