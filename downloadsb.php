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
$dbname = "exportsea";
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
fwrite($handle,$rows['packfrom']);
fwrite($handle,'-');
fwrite($handle,$rows['packto']);
fwrite($handle,'-');
fwrite($handle,$rows['marksno']);

fwrite($handle,$rows['gstintype']);
fwrite($handle,$rows['gstin']);}
fwrite($handle,"\r\n");
	fwrite($handle,"<TABLE>INVOICE");
	fwrite($handle,"\r\n");
	
	
	$sql1="Select * from esediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

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
	
	$sql1="Select * from esediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

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
	fwrite($handle,"20200221Y");
}
fwrite($handle,"\r\n");
	fwrite($handle,"<TABLE>ITEM");
	fwrite($handle,"\r\n");
	
	$sql2="Select * from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

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

$sql18="Select * from esedisinglewindowinfo where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy] '";
	$result18=mysqli_query($conn,$sql18);
	if(mysqli_num_rows($result18)>0)
	{   
		fwrite($handle,"<TABLE>SW_INFO_TYPE");
		fwrite($handle,"\r\n");
		$sn=1;
		while($rows18=mysqli_fetch_array($result18)){
			fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$_POST['jobno']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	
	
fwrite($handle,$rows18['invoicesrno']);
fwrite($handle,$rows18['itemno']);

fwrite($handle,$sn);
$sn=$sn+1;
fwrite($handle,$rows18['type']);
fwrite($handle,$rows18['qualifier']);
if($rows18['qualifier']=='STO' or $rows18['qualifier']=='DOO')
{
	$sc=explode('-',$rows18['swcode']);
	fwrite($handle,$sc[0]);
}

			
		
		if($rows18['type']!='DTY' and $rows18['swcode']!='')
		{
			fwrite($handle,$rows18['swtext']);
			fwrite($handle,$rows18['unit']);
	}
	 if($rows18['type']=='DTY' and $rows18['swcode']=='')
	{
		fwrite($handle,$rows18['measurement']);
		fwrite($handle,$rows18['unit']);
	}
	fwrite($handle,"\r\n");	
	}
	}
$sql16="Select * from esedithirdparty where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy] '";
	$result16=mysqli_query($conn,$sql16);
	if(mysqli_num_rows($result16)>0)
	{   
		fwrite($handle,"<TABLE>THIRDPARTY");
		fwrite($handle,"\r\n");
	}
	$sql17="Select * from esedithirdparty where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy] '";
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
	$sqllic="Select * from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
	$resultlic=mysqli_query($conn,$sqllic);
	$rowslic=mysqli_fetch_array($resultlic);
	if($rowslic['schemecode']=='01' or $rowslic['schemecode']=='02' or $rowslic['schemecode']=='03' or $rowslic['schemecode']=='04' or $rowslic['schemecode']=='05' or $rowslic['schemecode']=='08' or $rowslic['schemecode']=='09' or $rowslic['schemecode']=='11' or $rowslic['schemecode']=='12' or $rowslic['schemecode']=='41' or $rowslic['schemecode']=='43' or  $rowslic['schemecode']=='44' or $rowslic['schemecode']=='48' or $rowslic['schemecode']=='50' or $rowslic['schemecode']=='51' or $rowslic['schemecode']=='52' or $rowslic['schemecode']=='53' or $rowslic['schemecode']=='54' or $rowslic['schemecode']=='55' or $rowslic['schemecode']=='71' or $rowslic['schemecode']=='72' or $rowslic['schemecode']=='73' or $rowslic['schemecode']=='74' or $rowslic['schemecode']=='75' )
	{
		fwrite($handle,"<TABLE>LICENSE");
		fwrite($handle,"\r\n");
		$sql19="Select * from esedilicensedet where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
		$result19=mysqli_query($conn,$sql19);
		while($rows19=mysqli_fetch_array($result19))
		{
			fwrite($handle,"F");
	fwrite($handle,$_POST['locationcode']);
	fwrite($handle,$_POST['jobno']);
	fwrite($handle,$jobdate[0].$jobdate[1].$jobdate[2]);
	fwrite($handle,$rows19['invoicesrno']);
	fwrite($handle,$rows19['itemsno']);
	fwrite($handle,$rows19['slnoinc']);
	fwrite($handle,$rows19['registrationno']);
	$regdate=explode("-",$rows19['registrationdate']);
	fwrite($handle,$regdate[0].$regdate[1].$regdate[2]);
	fwrite($handle,$rows19['itemsno']);
	fwrite($handle,$rows19['slnoinc']);
	fwrite($handle,$rows19['quantity']);
	fwrite($handle,$rows19['expquantity']);
	fwrite($handle,$rows19['impind']);
	fwrite($handle,"\r\n");
		}
	
	}
	$sqld="Select * from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
	$resultd=mysqli_query($conn,$sqld);
	$rowsd=mysqli_fetch_array($resultd);
	if($rowsd['schemecode']=='19' or $rowsd['schemecode']=='41' or $rowsd['schemecode']=='42' or $rowsd['schemecode']=='43' or $rowsd['schemecode']=='44' or $rowsd['schemecode']=='49' or $rowsd['schemecode']=='71' or $rowsd['schemecode']=='72'){
fwrite($handle,"<TABLE>DBK");
	fwrite($handle,"\r\n");
	
	$sql2="Select * from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

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
	}
	
	$sqlsu="Select * from esedisupporting where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
	$resultsu=mysqli_query($conn,$sqlsu);
	$nsu=mysqli_num_rows($resultsu);
	if($nsu>0){
fwrite($handle,"<TABLE>Supportingdocs");
	fwrite($handle,"\r\n");
	$sql3="Select * from esedisupporting where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

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