<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "exportair");


?>
 <body>  
  <div class="container">  
    
   <div class="table-responsive">  
    <h2 align="center">no of shipments</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         
                        
                         
<th>consigneename</th>
<th>noofshipments</th>
		
								 
       
                    </tr>
<?php
$sql = "SELECT  distinct consigneename FROM shipmentregister";  
$result = mysqli_query($connect, $sql);
 while($row=mysqli_fetch_array($result)) 
 {
 $sql1="Select    consigneename,count(*) as noofship from shipmentregister where consigneename='$row[consigneename]' and branch='$_SESSION[branch]' and fy='$_SESSION[fy]' group by consigneename";
 $result1=mysqli_query($connect,$sql1);
 while($rows = mysqli_fetch_array($result1)) {
	  
        echo '  
       <tr>  
           
         
       
         <td>'.$rows["consigneename"].'</td>
		 <td>'.$rows["noofship"].'</td>  
        		 
			 
			 
         
       </tr>  
        ';  
 }}
     ?>
    </table>
	</body>
	</head>
	</html>
 
 
 