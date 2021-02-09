<?php
$servername = "localhost";
$username = "root";
$password = "";


try{
$conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO daybook(entrydate,debitaccount,creditaccount,amount,narration) values('$_POST[entrydate]','$_POST[debitaccount]','$_POST[creditaccount]','$_POST[amount]','$_POST[narration]')";
    
	 
    
    // use exec() because no results are returned
$conn->exec($sql);

	
$conn1=mysqli_connect($servername,$username,$password,"accountmaster");
$da=$_POST["debitaccount"];
$sql1="select * from accountmaster where accountname='".$da."'";
$result1=mysqli_query($conn1,$sql1);
$row1=mysqli_fetch_array($result1);
$da=$row1['accountname'];
$bal=$row1['balance'];
$bal=$bal+$_POST["amount"];
	
$sql1a="Update accountmaster set balance='".$bal."' where accountname='".$da."'";
	
	 
		 
	
	 
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn =null;
?>