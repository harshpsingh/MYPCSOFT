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
	$sql = "SELECT * FROM tradevoucher where  invoiceno ='$_POST[invoiceno]' "; 
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table>"; 
		echo "<tr>";
		echo "<th>voucherno</th>";
		
		
		
		echo "<th>voucherdate</th>";
	
		echo "<th>Invoiceno</th>";
		echo "<th>docketno</th>";
		echo "<th>Partyname</th>";
		echo "<th>Payable/Receivable</th>";
		echo "<th>Chargename</th>";
		
		
		
		echo "<th>Sac</th>";
	
		echo "<th>Quantity</th>";
		echo "<th>Rate</th>";
		echo "<th>Amount</th>";
		echo "<th>Cgst</th>";
		echo "<th>Sgst</th>";
		echo "<th>Igst</th>";
		echo "<th>Narration</th>";
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
		    echo "<td>".$row['voucherno']."</td>"; 
			echo "<td>".$row['voucherdate']."</td>"; 
			echo "<td>".$row['invoiceno']."</td>"; 
			echo "<td>".$row['docketno']."</td>";
			echo "<td>".$row['partyname']."</td>"; 
			echo "<td>".$row['payreceive']."</td>"; 
			echo "<td>".$row['chargename']."</td>"; 
			echo "<td>".$row['sac']."</td>"; 
			echo "<td>".$row['quantity']."</td>";
			echo "<td>".$row['rate']."</td>";
			echo "<td>".$row['amount']."</td>"; 
			echo "<td>".$row['cgst']."</td>"; 
			echo "<td>".$row['sgst']."</td>"; 
			echo "<td>".$row['igst']."</td>";
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
</body>
</head>
  </html>