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
<th bgcolor="yellow">billno</th>
<th bgcolor="yellow">billdate</th>

<th bgcolor="yellow">invoiceno</th>
<th bgcolor="yellow">invoicedate</th>
<th bgcolor="yellow">total</th>


	
								 
       
                    </tr>
<?php
session_start();


$connect = mysqli_connect("localhost", "root", "", "exportair");
$sql="select * from serviceinvoice  where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'";

$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result))
{
	$sql1="select docketno,branch,fy,exportername,exporterinvoice from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and docketno='$row[docketno]'";
	$result1=mysqli_query($connect,$sql1);
	while($rowa=mysqli_fetch_array($result1)){
$sql2="select sum(amount) as sumamount from eainvoicecharge where  docketno='$row[docketno]'";
$result2=mysqli_query($connect,$sql2);
while($rows=mysqli_fetch_array($result2))
{
	echo '
	   <td>'.$row["docketno"].'</td>
		 <td>'.$row["branch"].'</td>
		 <td>'.$row["fy"].'</td>  
		  <td>'.$rowa["exportername"].'</td>  
		 <td>'.$row["billno"].'</td>
		
		 <td>'.$row["billdate"].'</td>
		 
		 <td>'.$rowa["exporterinvoice"].'</td>
		 <td>'.$row["invoicedate"].'</td>  
		  <td>'.$rows["sumamount"].'</td>  
		
		 
        		 
			 
			 
         
       </tr>  
        ';  
	
}
}
}
?>
</table>
</div>
</div>
<button onclick="exportTableToExcel('tblData','expairinvoicereport')">Export Table Data To Excel File</button>
</body>
</head>
</html>

