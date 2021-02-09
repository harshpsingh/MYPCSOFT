<?php  
 
$connect = mysqli_connect("localhost", "root", "", "accountmaster");
$output = "";


 $query = "SELECT * FROM chequebookdetails  where branch='$_POST[branch]' and bankaccount='$_POST[bankaccount]' and issuedate between '$_POST[fromdate]' and '$_POST[todate]'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Branch</th>  
                         <th>Bankaccount</th>  
                         <th>Partyname</th>  
                          <th>Payto</th>
                    <th>issuedate</th>
		              <th>receiveddate</th>
		           <th>chequeno</th>
	               <th>amount</th>
				    <th>status</th>
                    
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["branch"].'</td>  
                         <td>'.$row["bankaccount"].'</td>  
                         <td>'.$row["partyname"].'</td>  
                         
         <td>'.$row["payto"].'</td>
		 <td>'.$row["issuedate"].'</td>  
         <td>'.$row["receiveddate"].'</td>  
         <td>'.$row["chequeno"].'</td>
         <td>'.$row["amount"].'</td>
		 <td>'.$row["status"].'</td>
		 
			 
			 
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }

?>