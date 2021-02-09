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
	$sql = "SELECT * FROM importer"; 
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table>"; 
		echo "<tr>";
	    
		echo "<th>importername</th>";
		
		echo "<th>Address1</th>";
		echo "<th>Address2</th>";
		echo "<th>PIN</th>";
		echo "<th>City</th>";
		echo "<th>State</th>";
		echo "<th>Country</th>";
		echo "<th>Phone</th>";
		echo "<th>Fax</th>";
		echo "<th>Email</th>";
		echo "<th>Mobile</th>";
		echo "<th>panno</th>";
		echo "<th>TANNO</th>";
	
		
		echo "<th>GSTstate</th>";
		echo "<th>Gststatecode</th>";
		echo"<th>gstintype</th>";
		echo "<th>Gstin</th>";
		echo "<th>IEC</th>";
		echo "<th>SEZ</th>";
		echo "<th>ADcode</th>";
		echo "<th>Forexcode</th>";
		echo "<th>Branchcode</th>";
		echo "<th>Bankaccount</th>";
		echo "<th>IFSCCode</th>";
		
		
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
		     echo "<td>".$row['importername']."</td>"; 
			
			 echo "<td>".$row['address1']."</td>"; 
			  echo "<td>".$row['address2']."</td>"; 
			   echo "<td>".$row['pin']."</td>"; 
			    echo "<td>".$row['city']."</td>"; 
				 echo "<td>".$row['state']."</td>"; 
				  echo "<td>".$row['country']."</td>"; 
				  echo "<td>".$row['phone']."</td>"; 
			   echo "<td>".$row['fax']."</td>"; 
			    echo "<td>".$row['email']."</td>"; 
				 echo "<td>".$row['mobile']."</td>"; 
				  echo "<td>".$row['panno']."</td>"; 
				   echo "<td>".$row['tanno']."</td>"; 
				 
				 
			   echo "<td>".$row['gststatename']."</td>"; 
			    echo "<td>".$row['gststatecode']."</td>"; 
				 echo "<td>".$row['gstintype']."</td>"; 
				 echo "<td>".$row['gstin']."</td>"; 
				  echo "<td>".$row['iec']."</td>"; 
				  echo "<td>".$row['sez']."</td>"; 
				   echo "<td>".$row['adcode']."</td>"; 
				    echo "<td>".$row['forexcode']."</td>"; 
					 echo "<td>".$row['branchcode']."</td>"; 
					  echo "<td>".$row['bankaccount']."</td>"; 
					   echo "<td>".$row['ifsccode']."</td>"; 
			echo "</tr>"; 
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
  