<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
<div class="container">  
  <div class="table-responsive"> 
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
	$sql = "SELECT * FROM chequebookdetails where bankaccount='$_POST[bankaccount]' and issuedate between '$_POST[fromdate]' and '$_POST[todate]'"; 
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table>"; 
		echo "<tr>";
	    
	
		echo "<th>Bank Account</th>";
		echo "<th>Partyname</th>";
		echo "<th>Pay to</th>";
		echo "<th>issuedate</th>";
		
		echo "<th>Chequeno</th>";
		echo "<th>Amount</th>";
		echo "<th>Status</th>";
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
		    
			
			 echo "<td>".$row['bankaccount']."</td>"; 
			 echo "<td>".$row['partyname']."</td>"; 
			 echo "<td>".$row['payto']."</td>"; 
			 echo "<td>".$row['issuedate']."</td>"; 
			
			 echo "<td>".$row['chequeno']."</td>"; 
			 echo "<td>".$row['amount']."</td>"; 
			 echo "<td>".$row['status']."</td>"; 
			 	 
			 
			 		  
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
</div>
</div>
</body>
</head> 
  </html>
		