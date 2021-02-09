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
					dbname=exportsea", "root", ""); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, 
						PDO::ERRMODE_EXCEPTION); 
} 
catch (PDOException $e) { 
	die("ERROR: Could not connect. ".$e->getMessage()); 
} 
try { 
	$sql = "SELECT * FROM esserviceinvoice where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and docketno='$_SESSION[docketno]'"; 
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table>"; 
		echo "<tr>";
	    
		echo "<th>docketno</th>";
		
		echo "<th>branch</th>";
		echo "<th>fy</th>";
		
		echo "<th>Billno</th>";
	
		echo "<th>Billdate</th>";
		echo "<th>Invoiceno</th>";
		echo "<th>Invoicedate</th>";
		echo "<th>category</th>";
		echo "<th>Narration</th>";
		
		
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
		     echo "<td>".$row['docketno']."</td>"; 
			
			 echo "<td>".$row['branch']."</td>"; 
			  echo "<td>".$row['fy']."</td>"; 
			  
			    echo "<td>".$row['billno']."</td>"; 
				
				  echo "<td>".$row['billdate']."</td>"; 
				  echo "<td>".$row['invoiceno']."</td>"; 
			   echo "<td>".$row['invoicedate']."</td>"; 
			    echo "<td>".$row['category']."</td>"; 
				 echo "<td>".$row['narration']."</td>"; 
				  
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