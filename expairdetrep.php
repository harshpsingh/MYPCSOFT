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
    
    <table class="table table-bordered">
     <tr>  
                         
                        
                         
<th bgcolor="yellow">docketno</th>
<th bgcolor="yellow">docketdate</th>
<th bgcolor="yellow">exportername</th>
<th bgcolor="yellow">exporterinvoice</th>
<th bgcolor="yellow">consigneename</th>

<th bgcolor="yellow">overseasagentname</th>
<th bgcolor="yellow">origincountry</th>
<th bgcolor="yellow">originport</th>
<th bgcolor="yellow"> destinationcountry</th>
<th bgcolor="yellow">destinationport</th>
<th bgcolor="yellow">hawbblno</th>
<th bgcolor="yellow"> m awbblno</th>
<th bgcolor="yellow">grossweight</th>
<th bgcolor="yellow">netweight</th>
<th bgcolor="yellow">noofpackages</th>


	
								 
       
                    </tr>
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "exportair");
if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'";	
}
else if((isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]'";	
}
else if((!isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and exportername='$_POST[exportername]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and consigneename='$_POST[consigneename]'";	
}

else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and overseasagentname='$_POST[overseasagentname]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and destinationcountry='$_POST[destinationcountry]'";	
}
else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and exportername='$_POST[exportername]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(isset($_POST['concheck']))  and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and consigneename='$_POST[consigneename]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}

else if((isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and overseasagentname='$_POST[overseasagentname]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and destinationcountry='$_POST[destinationcountry]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((!isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(isset($_POST['concheck']))  and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and exportername='$_POST[exportername]' and consigneename='$_POST[consigneename]'";	
}

else if((!isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and exportername='$_POST[exportername]' and overseasagentname='$_POST[overseasagentname]'";	
}
else if((!isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and exportername='$_POST[exportername]' and destinationcountry='$_POST[destinationcountry]'";	
}

else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and consigneename='$_POST[consigneename]' and overseasagentname= '$_POST[overseasagentname]'";	
}
else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and consigneename='$_POST[consigneename]' and destinationcountry= '$_POST[destinationcountry]'";	
}


else if((!isset($_POST['datecheck'])) and(!isset($_POST['expcheck'])) and(!isset($_POST['concheck'])) and(isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and overseasagentname='$_POST[overseasagentname]' and destinationcountry='$_POST[destinationcountry]'";	
}
else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(!isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and exportername='$_POST[exportername]' and consigneename='$_POST[consigneename]'and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}

else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(isset($_POST['oacheck'])) and(!isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and exportername='$_POST[exportername]' and overseasagentname='$_POST[overseasagentname]'and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(!isset($_POST['concheck']))  and(!isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and exportername='$_POST[exportername]' and destinationcountry='$_POST[destinationcountry]'and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
else if((isset($_POST['datecheck'])) and(isset($_POST['expcheck'])) and(isset($_POST['concheck'])) and(isset($_POST['oacheck'])) and(isset($_POST['destcheck'])))
{
	$sql="select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]' and exportername='$_POST[exportername]' and consigneename='$_POST[consigneename]' and overseasagentname='$_POST[overseasagentname]' and destinationcountry='$_POST[destinationcountry]' and docketdate between '$_POST[fromdate]' and '$_POST[todate]' ";	
}
$result=mysqli_query($connect,$sql);
 while($rows=mysqli_fetch_array($result)) 
 {
	 echo '  
       <tr>  
           
         
       
         <td>'.$rows["docketno"].'</td>
		 <td>'.$rows["docketdate"].'</td>
		 <td>'.$rows["exportername"].'</td>  
		 <td>'.$rows["exporterinvoice"].'</td>
		
		 <td>'.$rows["consigneename"].'</td>
		 
		 <td>'.$rows["overseasagentname"].'</td>
		 <td>'.$rows["origincountry"].'</td>  
		 <td>'.$rows["originport"].'</td>  
		 <td>'.$rows["destinationcountry"].'</td>
		 <td>'.$rows["destinationport"].'</td>  
		 <td>'.$rows["hawbblno"].'</td>
		 <td>'.$rows["mawbblno"].'</td>  
		 <td>'.$rows["grossweight"].'</td>
		 <td>'.$rows["netweight"].'</td>  
		  <td>'.$rows["noofpackages"].'</td>
		
		 
        		 
			 
			 
         
       </tr>  
        ';  
 }


     ?>
	 
    </table>
	</div>
	</div>
	<button onclick="exportTableToExcel('tblData','expair')">Export Table Data To Excel File</button>
	</body>
	</head>
	</html>
