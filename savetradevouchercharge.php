
<?php
$servername = "localhost";
$username = "root";
$password = "";

session_start();


try{
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO tradevouchercharges(voucherno,docketno,accountname,creditamount,debitamount) values('$_POST[voucherno]','$_POST[docketno]','$_POST[accountname]','$_POST[creditamount]','$_POST[debitamount]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	$_SESSION['voucherno']=$_POST['voucherno'];
	$_SESSION['docketno']=$_POST['docketno'];
	
	
    header('location:journalvouchers.php');
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	

$conn =null;
?>