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
					dbname=exportair", "root", ""); 
	$pdo->setAttribute(PDO::ATTR_ERRMODE, 
						PDO::ERRMODE_EXCEPTION); 
} 
catch (PDOException $e) { 
	die("ERROR: Could not connect. ".$e->getMessage()); 
} 
try {
	$sql = "SELECT *FROM eaedithirdparty where   jobno='$_SESSION[jobno]' and branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'";
	$res = $pdo->query($sql); 
	if ($res->rowCount() > 0) { 
		echo "<table id='esi'>"; 
	
		echo "<tr>";
	    
	
		
	    
		
		echo "<th>jobno</th>";
		echo "<th>invoicesrno</th>";
		echo "<th>itemno</th>";
		
		echo "<th>ieccode</th>";
		
		echo "<th>branchsrno</th>";
		
		
		echo "<th>manufacturername</th>";
		echo "<th>manufactureraddress1</th>";
		
		echo "<th>manufactureraddress2</th>";
		echo "<th>city</th>";
		
		echo "<th>pin</th>";
		
		echo "<th>gstintype</th>";
		
		echo "<th>gstinno</th>";
		echo "</tr>"; 
		while ($row = $res->fetch()) { 
			echo "<tr>"; 
              echo "<td>".$row['jobno']."</td>"; 
			 echo "<td>".$row['invoicesrno']."</td>"; 
			 echo "<td>".$row['itemno']."</td>"; 
			 
			  echo "<td>".$row['ieccode']."</td>"; 
			 echo "<td>".$row['branchsrno']."</td>"; 
			
			 echo "<td>".$row['manufacturername']."</td>"; 
			 echo "<td>".$row['manufactureraddress1']."</td>";
		 			 
			 echo "<td>".$row['manufactureraddress2']."</td>"; 
			 echo "<td>".$row['city']."</td>";
		 			 
			 echo "<td>".$row['pin']."</td>"; 
			
			 echo "<td>".$row['gstintype']."</td>";
		echo "<td>".$row['gstinno']."</td>";	}
echo "</table>"; 
	}
}	
catch (PDOException $e) { 
	die("ERROR: Could not connect. ".$e->getMessage()); 
}
?>	
</body>
</head>
</html>		 
		