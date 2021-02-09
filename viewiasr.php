<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
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
					dbname=importair", "root", ""); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, 
						PDO::ERRMODE_EXCEPTION); 
} 
catch (PDOException $e) { 
	die("ERROR: Could not connect. ".$e->getMessage()); 
} 
try {
	$sql = "SELECT *FROM shipmentregister where  docketdate between '$_POST[fromdate]' and '$_POST[todate]' and branch ='$_SESSION[branch]'";
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table id='sr'>"; 
		echo "<tr>";
	    
	
		
	    
		
		
		echo "<th>docketno</th>";
		echo "<th>docketdate</th>";
		echo "<th>clearancedate</th>";
		echo "<th>Branch</th>";
		
		echo "<th>importername</th>";
		echo "<th>importeraddress</th>";
		echo "<th>importerinvoice</th>";
		
		echo "<th>gststatename</th>";
		echo "<th>gststatecode</th>";
		
		echo "<th>suppliername</th>";
		
		echo "<th>supplieraddress</th>";
		
		
		echo "<th>overseasagentname</th>";
		echo "<th>forwarder</th>";
		echo "<th>notify</th>";
		
		echo "<th>notifyaddress</th>";
		echo "<th>sagent</th>";
		echo "<th>seller</th>";
		
		
		echo "<th>shipmenttype</th>";
		
		echo "<th>hawbblno</th>";
		echo "<th>hawbbldate</th>";
		
		echo "<th>mawbblno</th>";
		echo "<th>mawbbldate</th>";
		echo "<th>grnno</th>";
		
		echo "<th>pono</th>";
		
		
		echo "<th>shipmentterms</th>";
		echo "<th>cargotype</th>";
		echo "<th>noofpackages</th>";
		
		echo "<th>units</th>";
		echo "<th>Grossweight</th>";
		echo "<th>units</th>";
		
		echo "<th>Netweight</th>";
		echo"<th>Units</th>";
		echo "<th>GoodsDescription</th>";
		echo "<th>marksandnod</th>";
		
		
         echo "<th>origincountry</th>";
		echo "<th>originport</th>";
		;
		
		echo "<th>Destinationcountry</th>";
		echo "<th>Destinationport</th>";
		echo "<th>Length</th>";
		
		
		echo "<th>bookingno</th>";
		echo "<th>referenceno</th>";
		echo "<th>clearanceat</th>";
		echo "<th>placeofsupply</th>";
		
		echo "<th>remarks</th>";
		
		
		
		
		
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
 
			 echo "<td>".$row['docketno']."</td>"; 
			 echo "<td>".$row['docketdate']."</td>"; 
			 echo "<td>".$row['clearancedate']."</td>"; 
			  echo "<td>".$row['branch']."</td>"; 
			 echo "<td>".$row['importername']."</td>"; 
			 echo "<td>".$row['importeraddress']."</td>";
              echo "<td>".$row['importerinvoice']."</td>";			 
			
			 echo "<td>".$row['gststatename']."</td>"; 
			 echo "<td>".$row['gststatecode']."</td>";
		 			 
			 echo "<td>".$row['suppliername']."</td>"; 
			 echo "<td>".$row['supplieraddress']."</td>"; 
			
			 echo "<td>".$row['overseasagentname']."</td>"; 
			 echo "<td>".$row['forwarder']."</td>"; 
			 echo "<td>".$row['notify']."</td>"; 
			 echo "<td>".$row['notifyaddress']."</td>"; 
			 echo "<td>".$row['sagent']."</td>"; 
			 echo "<td>".$row['seller']."</td>"; 
			 
			 echo "<td>".$row['shipmenttype']."</td>";
			 
			 echo "<td>".$row['hawbblno']."</td>"; 
			 echo "<td>".$row['hawbbldate']."</td>"; 
			 echo "<td>".$row['mawbblno']."</td>"; 
			 echo "<td>".$row['mawbbldate']."</td>";
              echo "<td>".$row['grnno']."</td>"; 
			 echo "<td>".$row['pono']."</td>"; 
			  
			 echo "<td>".$row['shipmentterms']."</td>"; 
			 echo "<td>".$row['cargotype']."</td>"; 
			 echo "<td>".$row['placeofsupply']."</td>"; 
			 echo "<td>".$row['noofpackages']."</td>"; 
			 echo "<td>".$row['units1']."</td>"; 
			 echo "<td>".$row['grossweight']."</td>"; 
			 echo "<td>".$row['units2']."</td>"; 
			 echo "<td>".$row['netweight']."</td>"; 
			 echo "<td>".$row['units3']."</td>"; 
			 echo "<td>".$row['goodsdescription']."</td>"; 
			 echo "<td>".$row['marksandnos']."</td>"; 
			 
               echo "<td>".$row['origincountry']."</td>";
              echo "<td>".$row['originport']."</td>"; 
			 
			 echo "<td>".$row['destinationcountry']."</td>"; 
			 echo "<td>".$row['destinationport']."</td>"; 
						 
			 echo "<td>".$row['bookingno']."</td>"; 
			 echo "<td>".$row['referenceno']."</td>";
			 echo "<td>".$row['clearanceat']."</td>"; 
			 echo "<td>".$row['placeofsupply']."</td>";
              
			 echo "<td>".$row['remarks']."</td>"; 
			 
			 
			 
		 
		 
				  
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
<form method="post">

docketno <?php
$conn = new mysqli('localhost', 'root', '', 'importair') ;
 $result = $conn->query("SELECT *FROM shipmentregister where   docketdate between '$_POST[fromdate]' and '$_POST[todate]' and branch ='$_SESSION[branch]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='docketno' class='form-control' id='docketno' >";

    while ($row = $result->fetch_assoc()) {

                  unset( $docketno);
              
                  $docketno = $row['docketno']; 
                 echo '<option>'.$docketno.'</option>';
                
}

    echo "</select>";
?> 
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"><br>

<button type="submit" name="delete" formaction="deleteiasr.php">Delete</button>
<button type="submit" name="update" formaction="updateiasr.php">Update</button>
</form>

  </html>