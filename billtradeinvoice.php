<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
if($_POST["payreceive"]=="Payable")
{

try{
$conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="Insert into billtradevoucher(voucherno,invoiceno,branch,fy,division,docketno,debitaccount,debit,creditaccount,credit,cgstaccount,cgstamount,sgstaccount,sgstamount,igstaccount,igstamount,narration)values('$_POST[voucherno]','$_POST[invoiceno]','$_POST[branch]','$_POST[fy]','$_POST[division]','$_POST[docketno]','$_POST[tradeaccount]','$_POST[amount]','$_POST[partyname]','$_POST[amount]','$_POST[cgstaccount]','$_POST[cgstamount]','$_POST[sgstaccount]','$_POST[sgstamount]','$_POST[igstaccount]','$_POST[igstamount]','$_POST[narration]')";
$conn->exec($sql);
}

catch (PDOException $e) { 
	die("ERROR: Could not able to execute $sql. " 
								.$e->getMessage()); 
}
try { 
	$sql1 = "SELECT * FROM accountmaster where accountname='$_POST[tradeaccount]'"; 
	$res1 = $conn->query($sql1); 
while ($row = $res1->fetch()) { 
	$bal=$row["balance"];
	$bal=$bal+$_POST["amount"];
    
	$sql2="Update  accountmaster Set balance='$bal' where accountname='$_POST[tradeaccount]'";
	$conn->query($sql2);
	
}

}
	
catch (PDOException $e) { 
	die("ERROR: Could not able to execute $sql. " 
								.$e->getMessage()); 
}  
$nar=$_POST["narration"].";".$_POST["voucherno"].";".$_POST["invoiceno"];
$conn1= mysqli_connect('localhost','root','','accountmaster');
$sql3="Insert into daybook(entrydate,debitaccount,creditaccount,amount,narration)values('$_POST[voucherdate]','$_POST[tradeaccount]','$_POST[partyname]','$_POST[amount]','$nar')";
$result3=mysqli_query($conn1,$sql3);


try{
	$sqla="SELECT * FROM accountmaster where accountname='$_POST[partyname]'"; 
	$res = $conn->query($sqla); 
		while ($row1 = $res->fetch()) { 
	$bal=$row1["balance"];
	$bal=$bal-$_POST["amount"];
	
	 $conn->query($sqla);
	$sql4="Update  accountmaster Set balance='$bal' where accountname='$_POST[partyname]'";
	$conn->query($sql4);
	}
}
	
catch (PDOException $e) { 
	die("ERROR: Could not able to execute $sql. " 
								.$e->getMessage()); 
}
header("Location:gsttradeinvoice.php"); 
}
else if($_POST["payreceive"]=="Receivable")
{
	
try{
$conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="Insert into billtradevoucher(voucherno,invoiceno,branch,fy,division,docketno,debitaccount,debit,creditaccount,credit,cgstaccount,cgstamount,sgstaccount,sgstamount,igstaccount,igstamount,narration)values('$_POST[voucherno]','$_POST[invoiceno]','$_POST[branch]','$_POST[fy]','$_POST[division]','$_POST[docketno]','$_POST[partyname]','$_POST[amount]','$_POST[tradeaccount]','$_POST[amount]','$_POST[cgstaccount]','$_POST[cgstamount]','$_POST[sgstaccount]','$_POST[sgstamount]','$_POST[igstaccount]','$_POST[igstamount]','$_POST[narration]')";
$conn->exec($sql);
}

catch (PDOException $e) { 
	die("ERROR: Could not able to execute $sql. " 
								.$e->getMessage()); 
}

try { 
	$sql1 = "SELECT * FROM accountmaster where accountname='$_POST[partyname]'"; 
	$res1 = $conn->query($sql1); 
while ($row = $res1->fetch()) { 
	$bal=$row["balance"];
	$bal=$bal+$_POST["amount"];
    
	$sql2="Update  accountmaster Set balance='$bal' where accountname='$_POST[partyname]'";
	$conn->query($sql2);
	
}

}
	
catch (PDOException $e) { 
	die("ERROR: Could not able to execute $sql. " 
								.$e->getMessage()); 
}  
$nar=$_POST["narration"].";".$_POST["voucherno"].";".$_POST["invoiceno"];
$conn1= mysqli_connect('localhost','root','','accountmaster');
$sql3="Insert into daybook(entrydate,debitaccount,creditaccount,amount,narration)values('$_POST[voucherdate]','$_POST[partyname]','$_POST[tradeaccount]','$_POST[amount]','$nar')";
$result3=mysqli_query($conn1,$sql3);


try{
	$sqla="SELECT * FROM accountmaster where accountname='$_POST[tradeaccount]'"; 
	$res = $conn->query($sqla); 
		while ($row1 = $res->fetch()) { 
	$bal=$row1["balance"];
	$bal=$bal-$_POST["amount"];
	
	 $conn->query($sqla);
	$sql4="Update  accountmaster Set balance='$bal' where accountname='$_POST[tradeaccount]'";
	$conn->query($sql4);
	}
}
	
catch (PDOException $e) { 
	die("ERROR: Could not able to execute $sql. " 
								.$e->getMessage()); 
}
header("Location:gsttradeinvoice.php"); 
}
?>
