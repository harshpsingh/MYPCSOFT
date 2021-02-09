<?php
$servername = "localhost";
$username = "root";
$password = "";

session_start();


try{
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception,
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO journalvoucher(entrydate,voucherno,creditaccount,creditamount,debitaccount,debitamount,chequeno,narration,division) values('$_POST[entrydate]','$_POST[voucherno]','$_POST[creditaccount]','$_POST[creditamount]','$_POST[debitaccount]','$_POST[debitamount]','$_POST[chequeno]','$_POST[narration]','$_POST[division]')";

    
    // use exec() because no results are returned
    $conn->exec($sql);
	$sqlf="Insert into daybook(entrydate,debitaccount,creditaccount,amount,narration)values('$_POST[entrydate]','$_POST[debitaccount]','$_POST[creditaccount]','$_POST[debitamount]','$_POST[narration]')";
	$conn->exec($sqlf);
	$vn=$_POST["vn"];
	$vn=$vn+1;
	$sql1="Update journalvoucherno set voucherno=$vn where branch='$_SESSION[branch]' and division='$_POST[division]'";
	$conn->exec($sql1);
   
}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn1=mysqli_connect($servername,$username,$password,"accountmaster");
$sqla="Select * from accountmaster where accountname='$_POST[debitaccount]'";
$resulta=mysqli_query($conn1,$sqla);
$rowa=mysqli_fetch_array($resulta);
$bal=$rowa["balance"];
$bal=$bal+$_POST['debitamount'];

$da=$bal;


$sqld="Update accountmaster set balance='$da' where accountname='$_POST[debitaccount]'";
$resultd=mysqli_query($conn1,$sqld);
$sqlb="Select * from accountmaster where accountname='$_POST[creditaccount]'";
$resultb=mysqli_query($conn1,$sqlb);
$rowb=mysqli_fetch_array($resultb);
$bal=$rowb["balance"];
$balc=$bal-$_POST['creditamount'];
echo $balc;
$sqlc="Update accountmaster set balance='$balc' where accountname='$_POST[creditaccount]'";
$resultc=mysqli_query($conn1,$sqlc);
header("Location:journalvouchers.php");
$conn =null;
?>