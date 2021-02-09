
<?php  
 session_start();
$connect = mysqli_connect("localhost", "root", "", "exportair");
$output = '';


 $query = "SELECT * FROM shipmentregister where docketdate  between '$_POST[fromdate]' and '$_POST[todate]'and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Docketno</th>  
                         <th>docketdate</th>  
                         <th>Clearancedate</th>  
                          <th>exportername</th>
                    <th>exporteraddress</th>
		              <th>exporterinvoice</th>
		     
                  
		              <th>consigneename</th>
		       
				   <th>overseasagentname</th>
				   <th>hawbblno</th>
				   <th>mawbblno</th>
				   
				   <th>origincountry</th>
				   <th>originport</th>
				   
				   <th>destinationcountry</th>
				   <th>destinationport</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["docketno"].'</td>  
                         <td>'.$row["docketdate"].'</td>  
                         <td>'.$row["clearancedate"].'</td>  
                         
         <td>'.$row["exportername"].'</td>
		 <td>'.$row["exporteraddress"].'</td>  
         <td>'.$row["exporterinvoice"].'</td>  
     
         
		 
         <td>'.$row["consigneename"].'</td>  
       
     
		 <td>'.$row["overseasagentname"].'</td>
		 <td>'.$row["hawbblno"].'</td>  
       
         <td>'.$row["mawbblno"].'</td>
		 
       
         <td>'.$row["origincountry"].'</td>
		 <td>'.$row["originport"].'</td>
		
		 <td>'.$row["destinationcountry"].'</td>
		 <td>'.$row["destinationport"].'</td>
		 
		 
			 
			 
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=downloada.xls');
  echo $output;
 }

?>