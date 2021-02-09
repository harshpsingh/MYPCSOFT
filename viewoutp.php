<?php
$connect = mysqli_connect("localhost", "root", "", "accountmaster");

$sql = "SELECT * FROM outstandingpayment where status='$_POST[status]'";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>outstanding payment</title>  
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
    <h2 align="center">Outstanding payment</h2><br /> 
    <table class="table table-bordered">
	<tr>  
                         <th>partyname</th>  
                         <th>billno</th>  
                         <th>billdate</th> 
<th>docketno</th>
<th>blawbno</th>
		<th>clientinvoiceno</th>
		<th>dueamount</th>
	<th>status</th>
	</tr>
	<?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["partyname"].'</td> 
		 <td>'.$row["billno"].'</td> 
		 <td>'.$row["billdate"].'</td> 
		 <td>'.$row["docketno"].'</td> 
		 <td>'.$row["blawbno"].'</td> 
		 <td>'.$row["clientinvoice"].'</td> 
		 <td>'.$row["dueamount"].'</td> 
		 <td>'.$row["status"].'</td>
		  </tr>  
        ';  
		 }
		 ?>
		  </table>
		  </div>
		  </div>
		
		</body>
		 
		 </html>
		 
    