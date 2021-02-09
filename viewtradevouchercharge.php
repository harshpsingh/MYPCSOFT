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
					dbname=accountmaster", "root", ""); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, 
						PDO::ERRMODE_EXCEPTION); 
} 
catch (PDOException $e) { 
	die("ERROR: Could not connect. ".$e->getMessage()); 
} 
try { 
	$sql = "SELECT * FROM tradevouchercharges where voucherno='$_SESSION[voucherno]'  and docketno='$_SESSION[docketno]'"; 
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table>"; 
		echo "<tr>";
	    
		echo "<th>docketno</th>";
		
		
		
		echo "<th>accountname</th>";
	
		echo "<th>creditamount</th>";
		echo "<th>debitamount</th>";
		;
		
		
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
		     echo "<td>".$row['docketno']."</td>"; 
			
			 echo "<td>".$row['accountname']."</td>"; 
			  echo "<td>".$row['creditamount']."</td>"; 
			  
			    echo "<td>".$row['debitamount']."</td>"; 
				
				 
				   
				 
				  
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