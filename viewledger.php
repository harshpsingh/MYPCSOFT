<?php
$connect = mysqli_connect("localhost", "root", "", "accountmaster");

$sql = "SELECT * FROM daybook where entrydate  between '$_POST[fromdate]' and '$_POST[todate]' and debitaccount='$_POST[accountname]'or creditaccount='$_POST[accountname]' order by entrydate";  
$result = mysqli_query($connect, $sql);
$sqld="SELECT sum(amount) as sumdebit from daybook where entrydate  between '$_POST[fromdate]' and '$_POST[todate]' and debitaccount='$_POST[accountname]'";
$resultd = mysqli_query($connect, $sqld);
$rowd=mysqli_fetch_array($resultd);
$sqlc="SELECT sum(amount) as sumcredit from daybook where entrydate  between '$_POST[fromdate]' and '$_POST[todate]' and creditaccount='$_POST[accountname]'";
$resultc = mysqli_query($connect, $sqlc);
$rowc=mysqli_fetch_array($resultc);
$eff=$rowd['sumdebit']-$rowc['sumcredit'];


?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
    
   <div class="table-responsive">  
    <h2 align="center">Ledgers</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         
                         <th>entrydate</th> 						 
                         
<th>debit</th>
<th>credit</th>
<th>Narration</th>
		
								 
       
                    </tr>
     <?php
	 echo $_POST['accountname'];
	 $an=$_POST["accountname"];
	 while($row=mysqli_fetch_array($result))
	 {
		 if($row['debitaccount']==$an)
		 {
			 echo '
           <tr>  
         <td>'.$row["entrydate"].'</td> 
		  <td>'.$row["amount"].'</td> 
		 <td>'.'0.00'.'</td> 
		 	 <td>'.$row["narration"].'</td> 
		 </tr>
		 '; }
		 else if($row['creditaccount']==$an)
		 {
			  echo '
			  <tr>  
         <td>'.$row["entrydate"].'</td>  
		 <td>'.'0.00'.'</td> 
		 <td>'.$row["amount"].'</td> 
		 <td>'.$row["narration"].'</td> 
		 </tr>';
		 }
	 }
     ?>
    </table>
    <br />
   
	Balance<input type="text" name="balance" value="<?php echo $eff?>">
     
   </div>  
  </div>  
 </body>  
</html>