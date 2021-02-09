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
session_start();
try { 
	$pdo = new PDO("mysql:host = localhost; 
					dbname=IMportsea", "root", ""); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, 
						PDO::ERRMODE_EXCEPTION); 
} 
catch (PDOException $e) { 
	die("ERROR: Could not connect. ".$e->getMessage()); 
} 
try { 
	$sql = "SELECT * FROM isinvoicecharge where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and docketno='$_SESSION[docketno]'"; 
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table>"; 
		echo "<tr>";
	    
		echo "<th>docketno</th>";
		
		echo "<th>branch</th>";
		echo "<th>fy</th>";
		
		echo "<th>chargename</th>";
	
		echo "<th>hsncode</th>";
		echo "<th>currencyname</th>";
		echo "<th>exchangerate</th>";
		echo "<th>quantity</th>";
		echo "<th>rate</th>";
		echo "<th>amount</th>";
		echo "<th>discount</th>";
		echo "<th>cgstrate</th>";
		echo "<th>sgstrate</th>";
		echo "<th>igstrate</th>";
		
		
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
		     echo "<td>".$row['docketno']."</td>"; 
			
			 echo "<td>".$row['branch']."</td>"; 
			  echo "<td>".$row['fy']."</td>"; 
			  
			    echo "<td>".$row['chargename']."</td>"; 
				
				  echo "<td>".$row['hsncode']."</td>"; 
				  echo "<td>".$row['currencyname']."</td>"; 
			   echo "<td>".$row['exchangerate']."</td>"; 
			    echo "<td>".$row['quantity']."</td>"; 
				 echo "<td>".$row['rate']."</td>"; 
				  echo "<td>".$row['amount']."</td>"; 
				 echo "<td>".$row['discount']."</td>";
				 echo "<td>".$row['cgstrate']."</td>"; 
				 echo "<td>".$row['sgstrate']."</td>";
				 echo "<td>".$row['igstrate']."</td>"; 
				 
				  
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