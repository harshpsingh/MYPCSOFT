<html>
<head>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

<body>

<div class="container">  
    
   <div class="table-responsive">  
    
    <table class=" table-bordered table-striped" id="tblData">
     <tr>  
                         
                        
                         
<th bgcolor="yellow">docketno</th>
<th bgcolor="yellow">branch</th>
<th bgcolor="yellow">fy</th>
<th bgcolor="yellow">exportername</th>
<th bgcolor="yellow">hawblno</th>
<th bgcolor="yellow">hawbldate</th>
<th bgcolor="yellow">mawblno</th>
<th bgcolor="yellow">mawbldate</th>
<th bgcolor="yellow">origincountry</th>
<th bgcolor="yellow">originport</th>


<th bgcolor="yellow">destinationcountry</th>
<th bgcolor="yellow">destinationport</th>


	
								 
       
                    </tr>
<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "exportair");
$sql="select * from shipmentregister   where mawbblno !='' and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'";

$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result))
{
echo '
	   <td>'.$row["docketno"].'</td>
		 <td>'.$row["branch"].'</td>
		 <td>'.$row["fy"].'</td>  
		  <td>'.$row["exportername"].'</td>  
		 <td>'.$row["hawbblno"].'</td>
		
		 <td>'.$row["hawbbldate"].'</td>
		 
		 <td>'.$row["mawbblno"].'</td>
		 <td>'.$row["mawbbldate"].'</td>  
		  <td>'.$row["origincountry"].'</td>  
		  <td>'.$row["originport"].'</td>  
		 
		  
			<td>'.$row["destinationcountry"].'</td>  
		  <td>'.$row["destinationport"].'</td> 
			 
         
       </tr>  
        ';  
	
}
?>
</table>
</div>
</div>
<button onclick="exportTableToExcel('tblData','expairmblreport')">Export Table Data To Excel File</button>
</body>
</head>
</html>

