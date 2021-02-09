<?php
session_start();

$conn=mysqli_connect("localhost","root","","accountmaster");
$sql="INSERT INTO bankpayment(entrydate,voucherno,creditaccount,creditamount,debitaccount,debitamount,chequeno,narration,division) values('$_POST[entrydate]','$_POST[voucherno]','$_POST[bankaccount]','$_POST[creditamount]','$_POST[debitaccount]','$_POST[debitamount]','$_POST[chequeno]','$_POST[narration]','$_POST[division]')";
$result=mysqli_query($conn,$sql);
$vn=$_POST["vn"];
$vn=$vn+1;
$sql1="Update bankpaymentno set voucherno=$vn where branch='$_SESSION[branch]' and division='$_POST[division]'";
$result1=mysqli_query($conn,$sql1);
$sqla="Select * from accountmaster where accountname='$_POST[bankaccount]'";
$resulta=mysqli_query($conn,$sqla);
$rowa=mysqli_fetch_array($resulta);
$bal=$rowa['balance'];
$bal=$bal-$_POST['creditamount'];
$sqlb="Update accountmaster set balance='".$bal."' where accountname='$_POST[bankaccount]'";
$resultb=mysqli_query($conn,$sqlb);

$sqlc="Select * from accountmaster where accountname='$_POST[debitaccount]'";
$resultc=mysqli_query($conn,$sqlb);
$rowc=mysqli_fetch_array($resultc);
$bal=$rowc['balance'];
$bal=$bal+$_POST['debitamount'];
$sqld="Update accountmaster set balance='".$bal."' where accountname='$_POST[debitaccount]'";
$resultd=mysqli_query($conn,$sqld);
$sqle="Insert into chequebookdetails(bankaccount,partyname,issuedate,chequeno,amount,status)values('$_POST[bankaccount]','$_POST[debitaccount]','$_POST[entrydate]','$_POST[chequeno]','$_POST[creditamount]','Issued')";
$resulte=mysqli_query($conn,$sqle);
$sqlf="Insert into daybook(entrydate,debitaccount,creditaccount,amount,narration)values('$_POST[entrydate]','$_POST[debitaccount]','$_POST[bankaccount]','$_POST[amount]','$_POST[narration]')";
$resultf=mysqli_query($conn,$sqlf);
header('Location:bankvouchers.php');



$conn =null;
?>