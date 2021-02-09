<?php
session_start();
$fn=$_POST["jobno"];
$handle = fopen($fn.'.sb', "w");
fwrite($handle,"HRECZZ");
fwrite($handle,$_POST['icegateuser']);
fwrite($handle,"ZZ");
fwrite($handle,$_POST['locationcode']);
fwrite($handle,"ICES1_5CACHE01");
fwrite($handle,$_POST['jobno']);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exportair";
$db="master";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Database connection error");}
$sql="Select * from edisb1 where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	date_default_timezone_set("Asia/Kolkata");
	$jobdate=explode("-",$rows['jobdate']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	$timeinhm=explode("-",date("H-i-s",time()));
	fwrite($handle,$timeinhm[0].$timeinhm[1]);
	fwrite($handle,"\r\n");
	fwrite($handle,"<TABLE>SB");
	fwrite($handle,"\r\n");
	fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$_POST['jobno']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	fwrite($handle,$rows['chanumber']);
	fwrite($handle,$rows['iec']);
	fwrite($handle,$rows['exportername']);
	fwrite($handle,$rows['exporteraddress1']);
	fwrite($handle,$rows['exporteraddress2']);
	fwrite($handle,$rows['state']);
	fwrite($handle,$rows['city']);
	fwrite($handle,$rows['pin']);
	if($rows['exportertype']=='Merchant')
	{
	fwrite($handle,"R");
    }
else if($rows['exportertype']=='Manufacturer')
{
	fwrite($handle,"F");
	
}
fwrite($handle,$rows['exporterclass']);
fwrite($handle,$rows['adcode']);
fwrite($handle,$rows['consigneename']);
fwrite($handle,$rows['consigneeaddress']);
fwrite($handle,$rows['consigneecountryname'].$rows['consigneecountrycode']);
fwrite($handle,$_POST['locationcode']);
fwrite($handle,$rows['destinationportcode']);
fwrite($handle,$rows['destinationcountrycode']);
fwrite($handle,$rows['dischargecountrycode']);
fwrite($handle,$rows['dischargeportcode']);
fwrite($handle,$rows['seal']);
fwrite($handle,$rows['natureofcargo']);
fwrite($handle,$rows['grossweight']);
fwrite($handle,$rows['netweight']);
fwrite($handle,$rows['wtunit']);
fwrite($handle,$rows['gstintype']);
fwrite($handle,$rows['gstin']);}
fwrite($handle,"\r\n");
	fwrite($handle,"<TABLE>INVOICE");
	fwrite($handle,"\r\n");
	
	
	$sql1="Select * from eaediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result1=mysqli_query($conn,$sql1);
while($rows1=mysqli_fetch_array($result1)){
	fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$_POST['jobno']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	fwrite($handle,$rows1['invoicesrno']);
	fwrite($handle,$rows1['invoiceno']);
	$invoicedate=explode("-",$rows1["invoicedate"]);
	fwrite($handle,$invoicedate[0].$invoicedate[1].$invoicedate[2]);
	fwrite($handle,$rows1['currencyname']);
	fwrite($handle,$rows1['natureofcontract']);
	if($rows1['buyerconsignee']!="YES"){
	fwrite($handle,$rows1['buyername']);
	fwrite($handle,$rows1['buyeraddress']);}
	else{
		$sql="Select * from edisb1 where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	fwrite($handle,$rows['consigneename']);
	fwrite($handle,$rows['consigneeaddress']);
}
	}
	
	fwrite($handle,$rows1['paymentnature']);
	if($rows1['whetherthirdparty']=="YES")
	{
		fwrite($handle,$rows1['thirdpartyname']);
		fwrite($handle,$rows1['thirdpartyaddress1']);
		fwrite($handle,$rows1['thirdpartyaddress2']);
		fwrite($handle,$rows1['thirdpartycity']);
		fwrite($handle,$rows1['thirdpartypin']);
		$conn1=mysqli_connect($servername,$username,$password,$db);
		$sql4="Select * from countrylist where countryname='$rows1[thirdpartycountrysubdivision]'";
		$result14=mysqli_query($conn1,$sql4);
		while($rows14=mysqli_fetch_array($result14))
		{
			fwrite($handle,$rows14['countrycode']);
		}
		$sql5="Select * from countrylist where countryname='$rows1[thirdpartycountry]'";
		$result15=mysqli_query($conn1,$sql5);
		while($rows15=mysqli_fetch_array($result15))
		{
			fwrite($handle,$rows15['countrycode']);
		}

	}	
}
fwrite($handle,"\r\n");
	fwrite($handle,"<TABLE>EXCHANGE");
	fwrite($handle,"\r\n");
	
	$sql1="Select * from eaediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result1=mysqli_query($conn,$sql1);
while($rows1=mysqli_fetch_array($result1)){
	fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$_POST['jobno']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	fwrite($handle,$rows1['currencyname']);
	if($rows1['currencyname']=='USD')
	{
		fwrite($handle,"US Dollar");
	}
	else if($rows1['currencyname']=="EUR")
	{
		fwrite($handle,"EURO");
	}
	else if($rows1['currencyname']=="AED")
	{
		fwrite($handle,"UAE Dirham");
	}
	else if($rows1['currencyname']=="AUD")
	{
		fwrite($handle,"Australian Dollar");
	}
	else if($rows1['currencyname']=="CNY")
	{
		fwrite($handle,"Chinese Yuan");
	}
	else if($rows1['currencyname']=="GBP")
	{
		fwrite($handle,"Pound Sterling");
	}
	else if($rows1['currencyname']=="CAD")
	{
		fwrite($handle,"Canadian Dollar");
	}
	fwrite($handle,"1.00");
	fwrite($handle,$rows1['exchangerate']."00");
	fwrite($handle,"20191122Y");
}
fwrite($handle,"\r\n");
	fwrite($handle,"<TABLE>ITEM");
	fwrite($handle,"\r\n");
	
	$sql2="Select * from eaediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result2=mysqli_query($conn,$sql2);
while($rows2=mysqli_fetch_array($result2)){
	
	fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$_POST['jobno']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	
	
fwrite($handle,$rows2['invoicesrno']);
	fwrite($handle,$rows2['itemno']);
	fwrite($handle,$rows2['schemecode']);
	fwrite($handle,$rows2['ritc']);
	fwrite($handle,$rows2['goodsdescription']);
	fwrite($handle,$rows2['unit']);
	fwrite($handle,$rows2['quantity']);
	fwrite($handle,$rows2['productrate']);
	fwrite($handle,"000");
	fwrite($handle,$rows2['unit']."1");
	fwrite($handle,$rows2['pmv']);
	fwrite($handle,$rows2['accessory']);
	fwrite($handle,$rows2['reward']);
	fwrite($handle,$rows2['endusecode']);
	fwrite($handle,$rows2['igstpaymentstatus']);
	
	fwrite($handle,"\r\n");
}
$sql16="Select * from eaedithirdparty where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy] '";
	$result16=mysqli_query($conn,$sql16);
	if(mysqli_num_rows($result16)>0)
	{   
		fwrite($handle,"<TABLE>THIRDPARTY");
		fwrite($handle,"\r\n");
	}
	$sql17="Select * from eaedithirdparty where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy] '";
	$result17=mysqli_query($conn,$sql17);
	while($rows17=mysqli_fetch_array($result17))
	{
		fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$_POST['jobno']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	fwrite($handle,$rows17['invoicesrno']);
	fwrite($handle,$rows17['itemno']);
	fwrite($handle, $rows17['ieccode']);
	fwrite($handle,$rows17['branchsrno']);
	fwrite($handle,$rows17['manufacturername']);
	fwrite($handle,$rows17['manufactureraddress1']);
	fwrite($handle,$rows17['manufactureraddress2']);
	fwrite($handle,$rows17['city']);
	fwrite($handle,$rows17['pin']);
	fwrite($handle,$rows17['gstintype']);
	fwrite($handle,$rows17['gstinno']);
	fwrite($handle,"\r\n");

	}
fwrite($handle,"<TABLE>DBK");
	fwrite($handle,"\r\n");
	$sql2="Select * from eaediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result2=mysqli_query($conn,$sql2);
while($rows2=mysqli_fetch_array($result2)){
	
	fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$_POST['jobno']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	fwrite($handle,$rows2['invoicesrno']);
	fwrite($handle,$rows2['itemno']);
	fwrite($handle,$rows2['dbksrno']);
	fwrite($handle,$rows2['quantity']);
	
	fwrite($handle,"\r\n");
	
}
fwrite($handle,"<TABLE>Supportingdocs");
	fwrite($handle,"\r\n");
	$sql3="Select * from eaedisupporting where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result3=mysqli_query($conn,$sql3);
while($rows3=mysqli_fetch_array($result3)){
	
	fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$_POST['jobno']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	fwrite($handle,$rows3['invoicesrno']);
	fwrite($handle,$rows3['itemno']);
	fwrite($handle,$rows3['irnno']);
	fwrite($handle,$rows3['doccode']);
	fwrite($handle,$rows3['issuedpartyaddress']);
	fwrite($handle,$rows3['drn']);
	fwrite($handle,$rows3['bnfpartyaddress']);
	fwrite($handle,$rows3['issuedpartyname']);
	fwrite($handle,$_POST['icegateuser']);
	fwrite($handle,"\r\n");
}
	fwrite($handle,"<ENDSB>");
	fwrite($handle,"\r\n");
	fwrite($handle,"TREC");
	fwrite($handle,$_POST['jobno']);

fclose($handle);
header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($fn.'.sb'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . $fn.'.sb');
    readfile($fn.'.sb');
    exit;


?>