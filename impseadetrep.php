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
<style>
table, th, td {
  border: 1px solid black;
}

</style>

<body>

  <div class="container">  
    
   <div class="table-responsive" id="tblData">  
    
    <table class="table table-bordered table-striped">
     <tr>  
                         
                        
                         
<th bgcolor="yellow">docketno</th>
<th  bgcolor="yellow">docketdate</th>
<th  bgcolor="yellow">importername</th>
<th  bgcolor="yellow">importerinvoice</th>
<th  bgcolor="yellow">suppliername</th>
<th  bgcolor="yellow">shiplinename</th>
<th  bgcolor="yellow">overseasagentname</th>
<th  bgcolor="yellow">origincountry</th>
<th  bgcolor="yellow">originport</th>
<th  bgcolor="yellow"> origincountry</th>
<th  bgcolor="yellow">originport</th>
<th  bgcolor="yellow">hblno</th>
<th  bgcolor="yellow"> mblno</th>
<th  bgcolor="yellow">grossweight</th>
<th  bgcolor="yellow">netweight</th>
<th  bgcolor="yellow">noofpackages</th>
<th  bgcolor="yellow"> containerno</th>
<th  bgcolor="yellow">containersize</th>

	
								 
       
                    </tr>
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "importsea");
if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'";	
}
else if((isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]'";	
}
else if((!isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and suppliername='$_POST[suppliername]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and shiplinename='$_POST[shiplinename]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and overseasagentname='$_POST[overseasagentname]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and origincountry='$_POST[origincountry]'";	
}
else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and suppliername='$_POST[suppliername]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and shiplinename='$_POST[shiplinename]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and overseasagentname='$_POST[overseasagentname]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and origincountry='$_POST[origincountry]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((!isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]' and suppliername='$_POST[suppliername]'";	
}
else if((!isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]' and shiplinename='$_POST[shiplinename]'";	
}
else if((!isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]' and overseasagentname='$_POST[overseasagentname]'";	
}
else if((!isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]' and origincountry='$_POST[origincountry]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and suppliername='$_POST[suppliername]' and shiplinename='$_POST[shiplinename]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and suppliername='$_POST[suppliername]' and overseasagentname= '$_POST[overseasagentname]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and suppliername='$_POST[suppliername]' and origincountry= '$_POST[origincountry]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(isset($_POST['slcheck'])) and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and shiplinename='$_POST[shiplinename]' and overseasagentname='$_POST[overseasagentname]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and shiplinename='$_POST[shiplinename]' and origincountry='$_POST[origincountry]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and overseasagentname='$_POST[overseasagentname]' and origincountry='$_POST[origincountry]'";	
}
else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]' and suppliername='$_POST[suppliername]'and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]' and shiplinename='$_POST[shiplinename]'and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]' and overseasagentname='$_POST[overseasagentname]'and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['slcheck'])) and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]' and origincountry='$_POST[origincountry]'and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(isset($_POST['slcheck'])) and(isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and importername='$_POST[importername]' and suppliername='$_POST[suppliername]'and shiplinename='$_POST[shiplinename]' and overseasagentname='$_POST[overseasagentname]' and origincountry='$_POST[origincountry]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
$result=mysqli_query($connect,$sql);
 while($rows=mysqli_fetch_array($result)) 
 {
	 echo '  
       <tr>  
           
         
       
         <td>'.$rows["docketno"].'</td>
		 <td>'.$rows["docketdate"].'</td>
		 <td>'.$rows["importername"].'</td>  
		 <td>'.$rows["importerinvoice"].'</td>
		
		 <td>'.$rows["suppliername"].'</td>
		 <td>'.$rows["shiplinename"].'</td>  
		 <td>'.$rows["overseasagentname"].'</td>
		 <td>'.$rows["origincountry"].'</td>  
		 <td>'.$rows["originport"].'</td>  
		 <td>'.$rows["origincountry"].'</td>
		 <td>'.$rows["originport"].'</td>  
		 <td>'.$rows["hblno"].'</td>
		 <td>'.$rows["mblno"].'</td>  
		 <td>'.$rows["grossweight"].'</td>
		 <td>'.$rows["netweight"].'</td>  
		  <td>'.$rows["noofpackages"].'</td>
		 <td>'.$rows["containerno"].'</td>
		 <td>'.$rows["containersize"].'</td> 
		 
        		 
			 
			 
         
       </tr>  
        ';  
 }


     ?>
	 
    </table>
	</div>
	</div>
	<button onclick="exportTableToExcel('tblData','impsea')">Export Table Data To Excel File</button>
	</body>
	</head>
	</html>
