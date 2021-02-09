<?php
$connect = mysqli_connect("localhost", "root", "", "accountmaster");

$sql = "SELECT * FROM journalvoucher where entrydate  between '$_POST[fromdate]' and '$_POST[todate]' and division='$_POST[division]'";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>journal voucher</title>  
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
    <h2 align="center">Journal voucher</h2><br /> 
    <table class="table table-bordered">
	<tr>  
                         <th>entrydate</th>  
                         <th>voucherno</th>  
                         <th>CreditAccount</th> 
<th>creditamount</th>
<th>DebitAccount</th>
		<th>Debitamount</th>
		<th>Chequeno</th>
	<th>narration</th>
	</tr>
	<?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["entrydate"].'</td> 
		 <td>'.$row["voucherno"].'</td> 
		 <td>'.$row["creditaccount"].'</td> 
		 <td>'.$row["creditamount"].'</td> 
		 <td>'.$row["debitaccount"].'</td> 
		 <td>'.$row["debitamount"].'</td> 
		 <td>'.$row["chequeno"].'</td> 
		 <td>'.$row["narration"].'</td>
		  </tr>  
        ';  
		 }
		 ?>
		  </table>
		  </div>
		  </div>
		  <form method="post">
		  voucherno<?php
$conn = new mysqli('localhost', 'root', '', 'accountmaster') ;
 $result = $conn->query("SELECT * FROM journalvoucher where entrydate  between '$_POST[fromdate]' and '$_POST[todate]' and division='$_POST[division]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='voucherno' class='form-control' id='voucherno' >";

    while ($row = $result->fetch_assoc()) {

                  unset( $voucherno);
              
                  $voucherno = $row['voucherno']; 
                 echo '<option>'.$voucherno.'</option>';
                
}

    echo "</select>";
?> 
		  <button type="submit" name="printbankreceipt" formaction="printjournalvoucher.php">Print journal voucher</button>
		</form>
		</body>
		 
		 </html>
		 
    