<?php
$connect = mysqli_connect("localhost", "root", "", "accountmaster");

$sql = "SELECT * FROM gstcharge";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>GST CHarge det</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  
    <table class="table table-bordered">
	<tr>  
                         <th>chargename</th>  
						 <th>chargetype</th>  
                         <th>sac</th>  
                         <th>gstrate</th> 
<th>incomehead</th>
<th>expensehead</th>
		<th>cgsthead</th>
		<th>Cgstincomehead</th>
	<th>sgsthead</th>
	<th>sgstincomehead</th>
	<th>igsthead</th>
	<th>igstincomehead</th>
	</tr>
	<?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["chargename"].'</td> 
		  <td>'.$row["chargetype"].'</td> 
		 <td>'.$row["sac"].'</td> 
		 <td>'.$row["gstrate"].'</td> 
		 <td>'.$row["incomehead"].'</td> 
		 <td>'.$row["expensehead"].'</td> 
		 <td>'.$row["cgsthead"].'</td> 
		 <td>'.$row["cgstincomehead"].'</td> 
		 <td>'.$row["sgsthead"].'</td> 
		 <td>'.$row["sgstincomehead"].'</td>
		 <td>'.$row["igsthead"].'</td> 
		 <td>'.$row["igstincomehead"].'</td>
		  </tr>  
        ';  
		 }
		 ?>
		 </body>
		 </head>
		 </html>