<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "exportsea");
$sql = "SELECT * FROM shipmentregister where docketdate  between '$_POST[fromdate]' and '$_POST[todate]'and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export sea report</title>  
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
<th>exportername</th>
<th>exporteraddress</th>
<th>exporterinvoice</th>
		
		
		<th>consigneename</th>
		
		
		 <th>shipline</th>

		
		<th>overseasagentname</th>
		
		<th>hblno</th>

		
		<th>mblno</th>

		
	 
		
		<th>containersize</th>
		
		<th>containerno</th>
	<th>Grossweight</th>
		 <th>units</th>
		
		<th>Netweight</th>
		<th>Units</th>
         <th>origincountry</th>
		<th>originport</th>
		<th>loadcountry</th>
		
		<th>loadport</th>
		<th>dischargecountry</th>
		<th>Dischargeport</th>
		
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
         <td>'.$row["exportername"].'</td>
		 <td>'.$row["exporteraddress"].'</td>  
		 <td>'.$row["exporterinvoice"].'</td> 
        
		
		 <td>'.$row["consigneename"].'</td>
		
		 <td>'.$row["shiplinename"].'</td>
          <td>'.$row["overseasagentname"].'</td> 
            <td>'.$row["hblno"].'</td>
          <td>'.$row["mblno"].'</td> 
           <td>'.$row["containersize"].'</td>
		   <td>'.$row["containerno"].'</td>
          <td>'.$row["grossweight"].'</td> 
            <td>'.$row["units1"].'</td>
          <td>'.$row["netweight"].'</td> 
         <td>'.$row["units2"].'</td>
          <td>'.$row["origincountry"].'</td> 
            <td>'.$row["originport"].'</td>
          <td>'.$row["loadcountry"].'</td> 
          <td>'.$row["loadport"].'</td>
          <td>'.$row["dischargecountry"].'</td> 
            <td>'.$row["dischargeport"].'</td>
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