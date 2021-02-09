<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "importair");
$sql = "SELECT * FROM shipmentregister where docketdate  between '$_POST[fromdate]' and '$_POST[todate]'and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export MySQL data to Excel in PHP</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         <th>docketno</th>  
                         <th>docketdate</th>  
                         <th>Clearancedate</th> 
<th>importername</th>
<th>importeraddress</th>
<th>importerinvoice</th>
		
		
		<th>suppliername</th>
		
		
		

		
		<th>overseasagentname</th>
		
		<th>hawbblno</th>

		
		<th>mawbblno</th>

		
	 
		
	<th>Grossweight</th>
		 <th>units</th>
		
		<th>Netweight</th>
		<th>Units</th>
         <th>origincountry</th>
		<th>originport</th>
		
		
		<th>Destinationcountry</th>
		<th>Destinationport</th>
		<th>clearanceat</th>
		<th>Booking no</th>
		<th>referenceno</th>
		
		
								 
       
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["docketno"].'</td>  
         <td>'.$row["docketdate"].'</td>  
         <td>'.$row["clearancedate"].'</td>
         <td>'.$row["importername"].'</td>
		 <td>'.$row["importeraddress"].'</td>  
		 <td>'.$row["importerinvoice"].'</td> 
        
		
		 <td>'.$row["suppliername"].'</td>
		
		
          <td>'.$row["overseasagentname"].'</td> 
            <td>'.$row["hawbblno"].'</td>
          <td>'.$row["mawbblno"].'</td> 
           
          <td>'.$row["grossweight"].'</td> 
            <td>'.$row["units1"].'</td>
          <td>'.$row["netweight"].'</td> 
         <td>'.$row["units2"].'</td>
          <td>'.$row["origincountry"].'</td> 
            <td>'.$row["originport"].'</td>
          
          <td>'.$row["destinationcountry"].'</td>
          <td>'.$row["destinationport"].'</td>
		  <td>'.$row["clearanceat"].'</td>
          <td>'.$row["bookingno"].'</td> 
            <td>'.$row["referenceno"].'</td>
            		  
			 
			 
         
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    
   </div>  
  </div>  
 </body>  
</html>
