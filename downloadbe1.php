<?php
session_start();
$fn=$_POST["jobno"];
$handle = fopen($fn.'.be', "w");
fwrite($handle,"HRECZZ");
fwrite($handle,$_POST['icegateuser']);
fwrite($handle,"ZZ");
fwrite($handle,$_POST['locationcode']);
fwrite($handle,"ICES1_5CACHI01");
date_default_timezone_set("Asia/Kolkata");
$timeinhm=explode("-",date("H-i-s",time()));
	fwrite($handle,$timeinhm[0].$timeinhm[1].$timeinhm[2]);
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "importsea";
$db="master";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Database connection error");}
$sql="Select * from isedidet where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	$jobdate=explode("-",$rows['jobdate']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	$timeinhm=explode("-",date("H-i-s",time()));
	fwrite($handle,$timeinhm[0].$timeinhm[1]);
	fwrite($handle,"\r\n");
	fwrite($handle,"<TABLE>"."BE");
	fwrite($handle,"\r\n");
	fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$rows['jobno']);
	$jobdate=explode("-",$rows['jobdate']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	fwrite($handle,$rows['betype']);
	fwrite($handle,$rows['iec']);
	fwrite($handle,$rows['importername']);
	fwrite($handle,$rows['importeraddress1']);
	fwrite($handle,$rows['importeraddress2']);
	fwrite($handle,$rows['city']);
	fwrite($handle,$rows['state']);
	fwrite($handle,$rows['pin']);
	fwrite($handle,$rows['importertype']);
	fwrite($handle,$rows['transportmode']);
	fwrite($handle,$rows['kachabe']);
	fwrite($handle,$rows['highseasale']);
	fwrite($handle,$rows['originportcode']);
	fwrite($handle,$rows['chanumber']);
	fwrite($handle,$rows['origincountrycode']);
	fwrite($handle,$rows['consigneecountrycode']);
	fwrite($handle,$rows['originportcode']);
	fwrite($handle,$rows['greenchannel']);
	fwrite($handle,$rows['section48']);
	fwrite($handle,$rows['priorbe']);
	fwrite($handle,$rows['adcode']);
	fwrite($handle,$rows['firstcheck']);
	fwrite($handle,$rows['paymode']);	
}
fwrite($handle,"\r\n");
	fwrite($handle,"<TABLE>EXCHANGE");
	fwrite($handle,"\r\n");	

$sql1="Select * from isediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result1=mysqli_query($conn,$sql1);
while($rows1=mysqli_fetch_array($result1)){
	

	fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$rows['jobno']);
$sql="Select * from isedidet where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	$jobdate=explode("-",$rows['jobdate']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
}
fwrite($handle,$rows1['currencyname']);
fwrite($handle,'Y');
fwrite($handle,'1.00');
fwrite($handle,$rows1['exchangerate'].'00');
fwrite($handle,'20191004');

}
fwrite($handle,"\r\n");
	fwrite($handle,"<TABLE>INVOICE");
	fwrite($handle,"\r\n");	

$sql1="Select * from isediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result1=mysqli_query($conn,$sql1);
while($rows1=mysqli_fetch_array($result1)){
	

	fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$rows1['jobno']);
$sql="Select * from isedidet where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	$jobdate=explode("-",$rows['jobdate']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
}

	fwrite($handle,$rows1['invoicesrno']);
	$invoicedate=explode("-",$rows1['invoicedate']);
	fwrite($handle,$invoicedate[0].$invoicedate[1].$invoicedate[2]);
	fwrite($handle,$rows1['suppliername']);
	fwrite($handle,$rows1['supplieraddress1']);
	fwrite($handle,$rows1['city']);
	fwrite($handle,$rows1['country']);
	fwrite($handle,$rows1['invoicevalue']);
	fwrite($handle,$rows1['termsofinvoice']);
	fwrite($handle,$rows1['currencyname']);
	fwrite($handle,$rows1['termsofpayment']);
	fwrite($handle,$rows1['valuationmethod']);
	fwrite($handle,$rows1['invoiceno']);
	fwrite($handle,$rows1['bsrelated']);
	
}
fwrite($handle,"\r\n");
	fwrite($handle,"<TABLE>ITEMS");
	fwrite($handle,"\r\n");	
	
	$sql2="Select * from isediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result2=mysqli_query($conn,$sql2);
while($rows2=mysqli_fetch_array($result2)){
	

	fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$rows2['jobno']);
$sql="Select * from isedidet where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	$jobdate=explode("-",$rows['jobdate']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
}
fwrite($handle,$rows2['invoicesrno']);
fwrite($handle,$rows2['itemno']);
fwrite($handle,$rows2['quantity']);
fwrite($handle,$rows2['unit']);
fwrite($handle,$rows2['ritc']);
fwrite($handle,$rows2['goodsdescription']);
fwrite($handle,$rows2['manufacturer']);
fwrite($handle,$rows2['endusecode']);
fwrite($handle,$rows2['sourcecountrycode']);
fwrite($handle,$rows2['ritc']);
if($rows2['stdpref']=='Std')
{
	fwrite($handle,'S');
}
else
{
	fwrite($handle,'P');
}
fwrite($handle,'NOEXCISE');
fwrite($handle,$rows2['bcdnotn']);
fwrite($handle,$rows2['bcdsrno']);
fwrite($handle,$rows2['productrate']);
}
    fwrite($handle,"\r\n");
	fwrite($handle,"<ENDBE>");
	fwrite($handle,"\r\n");
	fwrite($handle,"TREC");
	$timeinhm=explode("-",date("H-i-s",time()));
	fwrite($handle,$timeinhm[0].$timeinhm[1].$timeinhm[2]);
	


fclose($handle);
header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($fn.'.be'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fn.'.be'));
    readfile($fn.'.be');
    exit;


?>