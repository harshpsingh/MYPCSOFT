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
	$sql = "SELECT *FROM shipmentregister where  destinationport= '$_POST[destinationport]'  and branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'";
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table id='sr'>"; 
		echo "<tr>";
	    
	
		
	    
		
		
		echo "<th>docketno</th>";
		echo "<th>docketdate</th>";
		
		echo "<th>Branch</th>";
		
		echo "<th>exportername</th>";
		echo "<th>exporterinvoice</th>";
		
		echo "<th>gststatename</th>";
		echo "<th>gststatecode</th>";
		
		echo "<th>consigneename</th>";
		
		
		echo "<th>shipline</th>";
		
		echo "<th>overseasagentname</th>";
		
		echo "<th>hblno</th>";
		
		echo "<th>noofpackages</th>";
		
		echo "<th>units</th>";
		echo "<th>Grossweight</th>";
		echo "<th>units</th>";
		
		echo "<th>Netweight</th>";
		echo"<th>Units</th>";
		
		
		echo "<th>containertype</th>";
		
		echo "<th>containersize</th>";
		
		echo "<th>containerno</th>";
		
		
         echo "<th>origincountry</th>";
		echo "<th>originport</th>";
		echo "<th>loadcountry</th>";
		
		echo "<th>loadport</th>";
		echo "<th>dischargecountry</th>";
		echo "<th>Dischargeport</th>";
		
		echo "<th>Destinationcountry</th>";
		echo "<th>Destinationport</th>";
		echo "<th>clearanceat</th>";
		
		echo "<th>terminal</th>";
		echo"<th>vessel</th>";
		echo "<th>Voyage</th>";
		echo "<th>eta</th>";
		
		echo "<th>etd</th>";
		echo "<th>stuffingdate</th>";
		echo "<th>cartingdate</th>";
		
		
		echo "<th>shed</th>";
		echo "<th>trainno</th>";
		
		echo "<th>wagonno</th>";
		echo "<th>etarail</th>";
		echo "<th>etdrail</th>";
		
		echo "<th>bookingno</th>";
		echo "<th>referenceno</th>";
		echo "<th>chaname</th>";
		echo "<th>sb</th>";
		echo "<th>remarks</th>";
		
		
		
		
		
		
		
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
 
			 echo "<td>".$row['docketno']."</td>"; 
			 echo "<td>".$row['docketdate']."</td>"; 
			 
			  echo "<td>".$row['branch']."</td>"; 
			 echo "<td>".$row['exportername']."</td>"; 
			echo "<td>".$row['exporterinvoice']."</td>"; 
			 echo "<td>".$row['gststatename']."</td>"; 
			 echo "<td>".$row['gststatecode']."</td>";
		 			 
			 echo "<td>".$row['consigneename']."</td>"; 
			
			 echo "<td>".$row['shiplinename']."</td>"; 
			
			 echo "<td>".$row['overseasagentname']."</td>"; 
			 
			 echo "<td>".$row['hblno']."</td>"; 
			
			 echo "<td>".$row['noofpackages']."</td>"; 
			 echo "<td>".$row['units1']."</td>"; 
			 echo "<td>".$row['grossweight']."</td>"; 
			 echo "<td>".$row['units2']."</td>"; 
			 echo "<td>".$row['netweight']."</td>"; 
			 echo "<td>".$row['units3']."</td>"; 
			 
			 echo "<td>".$row['containertype']."</td>"; 
		
			  echo "<td>".$row['containersize']."</td>"; 
			 echo "<td>".$row['containerno']."</td>";
			 	
             	
               echo "<td>".$row['origincountry']."</td>";
              echo "<td>".$row['originport']."</td>"; 
			 echo "<td>".$row['loadcountry']."</td>"; 
			 echo "<td>".$row['loadport']."</td>"; 
			 echo "<td>".$row['dischargecountry']."</td>"; 
			 echo "<td>".$row['dischargeport']."</td>"; 
			 echo "<td>".$row['destinationcountry']."</td>"; 
			 echo "<td>".$row['destinationport']."</td>"; 
			 echo "<td>".$row['clearanceat']."</td>"; 
			 echo "<td>".$row['terminal']."</td>"; 
			 echo "<td>".$row['vessel']."</td>"; 
			 echo "<td>".$row['eta']."</td>"; 
			 echo "<td>".$row['etd']."</td>"; 
			 echo "<td>".$row['voyage']."</td>"; 
			 echo "<td>".$row['stuffingdate']."</td>"; 
			 echo "<td>".$row['cartingdate']."</td>"; 
			
			 echo "<td>".$row['shed']."</td>"; 
			 echo "<td>".$row['trainno']."</td>"; 
			  echo "<td>".$row['wagonno']."</td>"; 
			 echo "<td>".$row['etarail']."</td>";
			 echo "<td>".$row['etdrail']."</td>"; 
			 echo "<td>".$row['bookingno']."</td>"; 
			 echo "<td>".$row['referenceno']."</td>";
              echo "<td>".$row['chaname']."</td>";			 
			 echo "<td>".$row['sb']."</td>"; 
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
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;
 $result = $conn->query("SELECT *FROM shipmentregister where  destinationport ='$_POST[destinationport]' and branch ='$_SESSION[branch]'");
    
   
    echo "<html>";
    echo "<body>";
	echo"<input list='docketno' name='docketno'>";
    echo "<datalist name='docketno' id='docketno' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $docketno);
              
                  $docketno = $row['docketno']; 
				  
                 echo '<option>'.$docketno.'</option>';
                
}

    echo "</datalist>";
?> 
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"><br>

<button type="submit" name="delete" formaction="deleteessr.php">Delete</button>
<button type="submit" name="update" formaction="updateessr.php">Update</button>
</form>
  </html>