<html>
<head>

<style>
table, th, td {
  border: 1px solid black;
}
</style>
<script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
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
	$sql = "SELECT *FROM esediitem where  jobno='$_SESSION[jobno]' and branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'";
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table id='esi'>"; 
	
		echo "<tr>";
	    
	
		
	    
		
		echo "<th>jobno</th>";
		echo "<th>invoicesrno</th>";
		echo "<th>itemno</th>";
		
		echo "<th>ritc</th>";
		
		echo "<th>goodsdescription</th>";
		
		
		echo "<th>quantity</th>";
		echo "<th>unit</th>";
		
		echo "<th>productrate</th>";
			echo "<th>currencyname</th>";
		
		echo "<th>exchangerate</th>";
		
		echo "<th>totalvaluefc</th>";
		
		echo "<th>schemecode</th>";
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
             echo "<td>".$row['jobno']."</td>"; 
			 echo "<td>".$row['invoicesrno']."</td>"; 
			 echo "<td>".$row['itemno']."</td>"; 
			 
			  echo "<td>".$row['ritc']."</td>"; 
			 echo "<td>".$row['goodsdescription']."</td>"; 
			
			 echo "<td>".$row['quantity']."</td>"; 
			 echo "<td>".$row['unit']."</td>";
		 			 
			 echo "<td>".$row['productrate']."</td>"; 
			 
			  echo "<td>".$row['currencyname']."</td>";
		 			 
			 echo "<td>".$row['exchangerate']."</td>"; 
			echo "<td>".$row['totalvaluefc']."</td>";
			
			 
             echo "<td>".$row['schemecode']."</td>";
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
<button onclick="exportTableToExcel('esi','esediitemdet')">Export Table Data To Excel File</button> 
	</body>
</head>
</html>	