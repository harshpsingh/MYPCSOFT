<?php
require('fpdf.php');
session_start();

	$pdf = new FPDF();
	 $pdf->AddPage('P','A4');
	$pdf->SetFont('Arial','B',10);
$pdf->SetXY(80,10);
$pdf->Cell(10,1,'E-annex Checklist');
$pdf->SetXY(10,40);
$pdf->Cell(10,1,'Jobno:');
$pdf->SetXY(80,40);
$pdf->Cell(10,1,'Job Date:');
$pdf->SetXY(150,40);
$pdf->Cell(10,1,'User Job No:');
$pdf->SetXY(10,50);
$pdf->Cell(10,1,'SB No.');
$pdf->SetXY(80,50);
$pdf->Cell(10,1,'SB Date:');
$pdf->SetXY(10,60);
$pdf->Cell(10,1,'Port of loading');
$pdf->SetXY(100,60);
$pdf->Cell(10,1,'CHA');
$pdf->SetXY(120,80);
$pdf->Cell(10,1,'State(org)');
$pdf->Line(5,85,200,85);
$pdf->SetXY(10,90);
$pdf->Cell(10,1,'Exporter Details');
$pdf->SetXY(120,90);
$pdf->Cell(10,1,'Consignee Details');
$pdf->Line(5,150,200,150);
$pdf->SetXY(10,155);
$pdf->Cell(10,1,'Port of Loading');
$pdf->SetXY(10,160);
$pdf->Cell(10,1,'Country of Destn.:');
$pdf->SetXY(120,160);
$pdf->cell(10,1,'Port of Destn.');
$pdf->SetXY(10,165);
$pdf->Cell(10,1,'Dischargecountry');
$pdf->SetXY(120,165);
$pdf->Cell(10,1,'Discharge Port');
$pdf->SetXY(10,170);
$pdf->Cell(10,1,'Gross Wt.');
$pdf->SetXY(120,170);
$pdf->Cell(10,1,'Net Weight:');
$pdf->SetXY(10,175);
$pdf->Cell(10,1,'Total Pkgs:');
$pdf->SetXY(120,175);
$pdf->Cell(10,1,'Loose Pkts:');
$pdf->SetXY(10,180);
$pdf->Cell(10,1,'Nature cargo');
$pdf->SetXY(120,180);
$pdf->Cell(10,1,'No of containers:');
$pdf->SetXY(10,185);
$pdf->Cell(10,1,'Master AWB No:');
$pdf->SetXY(120,185);
$pdf->Cell(10,1,'House AWB No:');
$pdf->SetXY(10,190);
$pdf->Cell(10,1,'DBK Accountno');
$pdf->SetXY(120,190);
$pdf->Cell(10,1,'Forex Bank A/c no:');
$pdf->SetXY(10,195);
$pdf->Cell(10,1,'Service Tax Refund:');
$pdf->SetXY(120,195);
$pdf->Cell(10,1,'AD Code:');
$pdf->SetXY(10,200);
$pdf->Cell(10,1,'Rbi wvr no/Rbi wvr Dt.');
$pdf->SetXY(120,200);
$pdf->Cell(10,1,'Ifsc Code');
$pdf->SetXY(10,205);
$pdf->Cell(10,1,'Marks and Nos');
$pdf->Line(5,220,200,220);
$pdf->line(5,222,200,222);
$pdf->SetXY(10,225);


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
   
	$pdf->SetFont('Arial','',8);
	$pdf->SetXY(80,15);
	$pdf->Cell(10,1,$rows['chaname']);
	$pdf->SetXY(80,20);
	$pdf->Cell(10,1,$rows['chanumber']);
	$sql3="Select * from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result3=mysqli_query($conn,$sql3);
while($rows3=mysqli_fetch_array($result3)){
	$pdf->SetXY(80,30);
	$pdf->Cell(10,1,'Scheme Desc');
	$pdf->SetXY(100,30);
	$pdf->Cell(10,1,$rows3['schemedescription']);
	
	
}
	
	$pdf->SetXY(50,40);
	$pdf->Cell(10,1,$rows['jobno']);
	$pdf->SetXY(120,40);
	$pdf->Cell(10,1,$rows['jobdate']);
	$pdf->SetXY(190,40);
	$pdf->Cell(10,1,$rows['jobno']);
	$pdf->SetXY(50,60);
	$pdf->Cell(10,1,$rows['locationname']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(110,60);
	$pdf->Cell(10,1,$rows['chaname']);
	$pdf->SetXY(175,60);
	$pdf->Cell(10,1,$rows['chanumber']);
	$pdf->SetXY(175,80);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(10,1,$rows['stateorigin']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(100,230);
	$pdf->Cell(10,1,'Container Details');
	$pdf->Line(5,235,200,235);
	
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(10,240);
	$pdf->Cell(10,1,'Container No');
	$pdf->SetXY(35,240);
	$pdf->Cell(10,1,'Container size');
	$pdf->SetXY(60,240);
	$pdf->Cell(10,1,'Excise Seal No');
	$pdf->SetXY(85,240);
	$pdf->Cell(10,1,'Seal Date');
	$pdf->SetXY(102,240);
	$pdf->Cell(10,1,'No of Packets');
	$pdf->SetXY(125,240);
	$pdf->Cell(10,1,'Seal Type');
	$pdf->SetXY(142,240);
	$pdf->Cell(10,1,'Device Id');
	$pdf->SetXY(158,240);
	$pdf->Cell(10,1,'Movement Doc');
	$pdf->SetXY(186,240);
	$pdf->Cell(10,1,'Movement ');
	$pdf->SetXY(104,244);
	$pdf->Cell(10,1,'Stuffed');
	$pdf->SetXY(162,244);
	$pdf->Cell(10,1,'Type');
	$pdf->SetXY(190,244);
	$pdf->Cell(10,1,'Doc No');
	
}

$sql1="Select * from edisb1 where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result1=mysqli_query($conn,$sql1);
while($rows1=mysqli_fetch_array($result1)){
	
	$pdf->SetFont('Arial','',8);
    $pdf->SetXY(10,100);
	$pdf->Cell(10,1,$rows1['iec']);
	$pdf->SetXY(10,105);
	$pdf->Cell(10,1,'Branch code:');
	$pdf->SetXY(30,105);
	$pdf->Cell(10,1,$rows1['branchcode']);
	$pdf->SetXY(10,110);
	$pdf->Cell(10,1,'GSTIN Type');
	$pdf->SetXY(30,110);
	$pdf->Cell(10,1,$rows1['gstintype']);
	$pdf->SetXY(10,115);
	$pdf->Cell(10,1,'GSTIN id:');
	$pdf->SetXY(30,115);
	$pdf->Cell(10,1,$rows1['gstin']);
	$pdf->SetXY(10,120);
	$pdf->Cell(10,1,'PAN No');
	$pdf->SetXY(30,120);
	$pdf->Cell(10,1,$rows1['panno']);
	$pdf->SetXY(10,125);
	$pdf->Cell(10,1,'Exporter type');
	$pdf->SetXY(30,125);
	$pdf->Cell(10,1,$rows1['exportertype']);
	$pdf->SetXY(10,130);
	$pdf->Cell(10,1,$rows1['exportername']);
	$pdf->SetXY(10,135);
	$pdf->Cell(10,1,$rows1['exporteraddress1']);
	$pdf->SetXY(10,140);
    $pdf->Cell(10,1,$rows1['exporteraddress2']);
    $pdf->SetXY(10,145);
    $pdf->Cell(10,1,$rows1['city']);	
	$pdf->SetXY(30,145);
	$pdf->Cell(10,1,$rows1['state']);
	$pdf->SetXY(50,145);
	$pdf->Cell(10,1,$rows1['pin']);
	$pdf->SetXY(120,100);
	$pdf->Cell(10,1,$rows1['consigneename']);
	$pdf->SetXY(120,105);
	$pdf->Cell(10,1,$rows1['consigneeaddress']);
	$pdf->SetXY(120,115);
	$pdf->Cell(10,1,$rows1['consigneecountrycode']);
	$pdf->SetXY(120,120);
	$pdf->Cell(10,1,$rows1['consigneecountryname']);
	$pdf->SetXY(50,155);
	$pdf->Cell(10,1,$rows1['locationname']);
	$pdf->SetXY(50,160);
    $pdf->Cell(10,1,$rows1['destinationcountryname']);	
	$pdf->SetXY(90,160);
	$pdf->Cell(10,1,$rows1['destinationcountrycode']);
	$pdf->SetXY(160,160);
	$pdf->Cell(10,1,$rows1['destinationportname']);
	$pdf->SetXY(180,160);
	$pdf->Cell(10,1,$rows1['destinationportcode']);
	$pdf->SetXY(50,165);
	$pdf->Cell(10,1,$rows1['dischargecountryname']);
	$pdf->SetXY(90,165);
	$pdf->Cell(10,1,$rows1['dischargecountrycode']);
	$pdf->SetXY(160,165);
	$pdf->Cell(10,1,$rows1['dischargeportname']);
	$pdf->SetXY(180,165);
	$pdf->Cell(10,1,$rows1['dischargeportcode']);
	$pdf->SetXY(50,170);
	$pdf->Cell(10,1,$rows1['grossweight']);
	$pdf->SetXY(160,170);
	$pdf->Cell(10,1,$rows1['netweight']);
	$pdf->SetXY(50,175);
	$pdf->Cell(10,1,$rows1['totalpackages']);
	$pdf->SetXY(160,175);
	$pdf->Cell(10,1,$rows1['loosepackages']);
	$pdf->SetXY(50,180);
	$pdf->Cell(10,1,$rows1['natureofcargo']);
	$pdf->SetXY(160,180);
	$pdf->Cell(10,1,$rows1['noofcontainers']);
	$pdf->SetXY(160,190);
	$pdf->Cell(10,1,$rows1['forexcode']);
	$pdf->SetXY(160,195);
	$pdf->Cell(10,1,$rows1['adcode']);
	$pdf->SetXY(50,200);
	$pdf->Cell(10,1,$rows1['rbiwaiverno']);
	$pdf->SetXY(60,200);
	$pdf->Cell(2,1,'/');
	$pdf->SetXY(70,200);
	$pdf->Cell(10,1,$rows1['rbiwaiverdate']);
	$pdf->SetXY(50,205);
	$pdf->Cell(10,1,$rows1['packfrom']);
	$pdf->SetXY(53,205);
	$pdf->Cell(10,1,'to');
	$pdf->SetXY(55,205);
	$pdf->Cell(10,1,$rows1['packto']);
	$pdf->SetXY(60,205);
	$pdf->Cell(10,1,$rows1['packtype']);
	$pdf->SetFont('Arial','',7);
	$marksno=explode(';',$rows1['marksno']);
	$pdf->SetXY(70,205);
	$pdf->Cell(10,1,$marksno[0]);
	$pdf->SetXY(70,210);
	$pdf->Cell(10,1,$marksno[1]);
	$pdf->SetXY(70,215);
	$pdf->Cell(10,1,$marksno[2]);
	$pdf->SetXY(4,250);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,1,$rows1['containerno']);
	$pdf->SetXY(35,250);
	$pdf->Cell(10,1,$rows1['containersize']);
	$pdf->SetXY(60,250);
	$pdf->Cell(10,1,$rows1['excisesealno']);
	$pdf->SetXY(85,250);
	$pdf->Cell(10,1,$rows1['sealdate']);
	$pdf->SetXY(102,250);
	$pdf->Cell(10,1,$rows1['noofpacketsstuffed']);
	$pdf->SetXY(125,250);
	$pdf->Cell(10,1,$rows1['sealtype']);
	$pdf->SetXY(142,250);
	$pdf->Cell(10,1,$rows1['deviceid']);
	$pdf->SetXY(162,250);
	$pdf->Cell(10,1,$rows1['doctype']);
	$pdf->SetXY(190,250);
	$pdf->Cell(10,1,$rows1['docno']);

	
}
$pdf->line(10,260,200,260);
$pdf->AddPage();
$sql2="Select * from esediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result2=mysqli_query($conn,$sql2);
while($rows2=mysqli_fetch_array($result2)){
	
	$y=$pdf->getY();
	$y=$y+10;
	$pdf->line(5,$y,200,$y);
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Invoice Details');
	$y=$y+4;
	$pdf->line(5,$y,200,$y);
	$y=$y+8;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Inv. Val');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows2['invoicevalue'].$rows2['exchangerate']);
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,'(INR)');
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows2['invoicevalue']);
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,'('.$rows2['currencyname'].')');
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'FOB Val');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows2['fob']);
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,'(INR)');
	$pdf->SetXY(130,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'FOBFC');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows2['fobfc']);
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,'('.$rows2['currencyname'].')');
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Add Freight');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows2['finb']);
	$pdf->SetXY(130,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'DBK Val');
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'ROSL Val');
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,'Inv No');
	$pdf->SetXY(145,$y);
	$pdf->Cell(10,1,$rows2['invoiceno']);
	$pdf->SetXY(172,$y);
	$pdf->Cell(10,1,'Inv Dt.');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(185,$y);
	$pdf->Cell(10,1,$rows2['invoicedate']);
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Inv Curr');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows2['currencyname']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,'Nature of Contract');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(185,$y);
	$pdf->Cell(10,1,$rows2['natureofcontract']);
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Inv Curr');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows2['contractno']);
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Exchange Rate');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows2['exchangerate']);
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,'Rate');
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,'Currencyname');
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,'Amount');
	$y=$y+4;
	$pdf->line(5,$y,200,$y);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Freight');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,$rows2['freightrate']);
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,$rows2['freightcurrency']);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows2['freightamount']);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Insurance');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,$rows2['insurancerate']);
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,$rows2['insurancecurrency']);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows2['insuranceamount']);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Commission');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,$rows2['commissionrate']);
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,$rows2['commissioncurrency']);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows2['commissionamount']);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Discount');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,$rows2['discountrate']);
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,$rows2['discountcurrency']);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows2['discountamount']);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Pack Chgs');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,$rows2['packchgsrate']);
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,$rows2['packchgscurrency']);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows2['packchgsamount']);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Other Deduc.');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,$rows2['otherdeductionrate']);
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,$rows2['otherdeductioncurrency']);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows2['otherdeductionamount']);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Nature of Payment');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,$rows2['paymentnature']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,'PaymentPeriod');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows2['paymentperiod']);
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Buyername and address');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,$rows2['buyername']);
	$y=$y+4;
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,$rows2['buyeraddress']);
	$y=$y+12;
	
	
	if($rows2['whetherthirdparty']=='YES')
	{
		
		$pdf->Line(5,$y,200,$y);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Third Party Name and address');

	$y=$y+4;
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,$rows2['thirdpartyname'].' '.$rows2['thirdpartyaddress1'].' '.$rows2['thirdpartyaddress2'].' '.$rows2['thirdpartycity']);
	$conn1=mysqli_connect($servername,$username,$password,$db);
	$sql17="select * from countrylist where countryname='$rows2[thirdpartycountrysubdivision]'";
	$result17=mysqli_query($conn1,$sql17);
	while($rows17=mysqli_fetch_array($result17))
	{
		$pdf->SetXY(110,$y);
		$pdf->Cell(10,1,$rows17['countrycode']);
	}
	$sql18="select * from countrylist where countryname='$rows2[thirdpartycountry]'";
	$result18=mysqli_query($conn1,$sql18);
	while($rows18=mysqli_fetch_array($result18))
	{
		$pdf->SetXY(120,$y);
		$pdf->Cell(10,1,$rows18['countrycode']);
	}
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,$rows2['thirdpartypin']);
	$y=$y+4;



	$pdf->Line(5,$y,200,$y);
	$y=$y+4;
	}
}
if($y>260)
	{
		$pdf->Addpage();
		$y=$pdf->gety();
		$y=$y+5;
	}
	$pdf->Line(5,$y,200,$y);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Item Details');
	$y=$y+4;
	$pdf->Line(5,$y,200,$y);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Itemno');
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'RITC Code');
	$pdf->SetXY(120,$y);

	$pdf->Cell(10,1,'Description');
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Quantity');
	$pdf->SetXY(35,$y);
	$pdf->Cell(10,1,'Unit');
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'Rate Per Unit');
	$pdf->SetXY(90,$y);
	$pdf->Cell(10,1,'Total Val(FC)');
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,'FOB(INR)');
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,'Scheme');
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,'Reward');
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'DGFT PN Num');
	$pdf->SetXY(35,$y);
	$pdf->Cell(10,1,'Gp. Cd.');
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'Item Cd.');
	$pdf->SetXY(90,$y);
	$pdf->Cell(10,1,'SION Quantity');
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,'SION Unit');
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,'File No');
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,'License No');
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'SION Grp /cd.');
	$pdf->SetXY(35,$y);
	$pdf->Cell(10,1,'SION Sr. No');
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'SION IO Norms');
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,'STR');
	$y=$y+4;
	$pdf->Line(5,$y,200,$y);
	$y=$y+4;
	$sql3="Select * from esediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result3=mysqli_query($conn,$sql3);
while($rows3=mysqli_fetch_array($result3)){
	
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Inv Sr No');
	$pdf->SetXY(27,$y);
	$pdf->Cell(10,1,$rows3['invoicesrno']);
	$pdf->SetXY(30,$y);
	$pdf->Cell(10,1,'Inv. No');
	$pdf->SetXY(46,$y);
	$pdf->Cell(10,1,$rows3['invoiceno']);
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,'Inv Dt.');
	$pdf->SetXY(80,$y);
	$pdf->Cell(10,1,$rows3['invoicedate']);
	
	
}
	$y=$pdf->getY();
	
$sql3="Select * from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result3=mysqli_query($conn,$sql3);
while($rows3=mysqli_fetch_array($result3)){
	if($y>260)
	{
		$pdf->Addpage();
		$y=$pdf->gety();
		$y=$y+5;
	}
	$y=$y+5;
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,$rows3['itemno']);
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,$rows3['ritc']);
	$len=strlen($rows3['goodsdescription']);
	$pdf->SetXY(110,$y);
	$pdf->Cell(10,1,substr($rows3['goodsdescription'],0,41));
	$y=$y+4;
	$pdf->SetXY(110,$y);
	$pdf->Cell(10,1,substr($rows3['goodsdescription'],41,$len));
	$y=$y+4;
	
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,$rows3['quantity']);
    $pdf->SetXY(35,$y);
	$pdf->Cell(10,1,$rows3['unit']);
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,$rows3['productrate'].'Per 1'.$rows3['unit']);
	$pdf->SetXY(90,$y);
	$pdf->Cell(10,1,$rows3['totalvaluefc']);
	$pdf->SetXY(110,$y);
    $pdf->Cell(10,1,$rows3['fobinr']);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows3['schemecode']);
	$pdf->SetXY(160,$y);
	$pdf->Cell(10,1,'REWARD('.$rows3['reward'].')');
	$y=$y+8;
		$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'pmv is Rs');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(35,$y);
		$pdf->Cell(10,1,$rows3['pmv']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(90,$y);
		$pdf->Cell(10,1,'Total Pmv is');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(120,$y);
		$pdf->Cell(10,1,$rows3['totalpmv']);
		$pdf->SetXY(160,$y);
		$pdf->Cell(10,1,'STR('.$rows3['str'].')');
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Scheme Desc');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(35,$y);
	$pdf->Cell(10,1,$rows3['schemedescription']);
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(6,$y);
	$pdf->Cell(10,1,'End use of item');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(35,$y);
	$pdf->Cell(10,1,$rows3['endusecode']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'Igst Pmt status');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(90,$y);
	$pdf->Cell(10,1,$rows3['igstpaymentstatus']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,'Accessory status');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,$rows3['accessory']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(135,$y);
	$pdf->Cell(10,1,'Taxable value');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(160,$y);
	$pdf->Cell(10,1,$rows3['taxablevalue']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(165,$y);
	$pdf->Cell(10,1,'Igst amt.');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(180,$y);
	$pdf->Cell(10,1,$rows3['igstamount']);
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Mnf/Pro code type');
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,'Mnf/Pro Gro code');
	$pdf->SetXY(165,$y);
	$pdf->Cell(10,1,'Total Pkgs');
	$pdf->SetXY(180,$y);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Mnf/Pro address');
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Source State');
	$pdf->SetXY(80,$y);
	$pdf->Cell(10,1,'Transit Country');
	$pdf->SetXY(160,$y);
	$pdf->Cell(10,1,'Hawb No');
	$y=$y+4;
	$pdf->Line(5,$y,200,$y);

}
	 $y=$pdf->getY();
	

$sql21="select * from  esedisinglewindowinfo where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result21=mysqli_query($conn,$sql21);
$num21=mysqli_num_rows($result21);
if($num21>0){
$y=$y+8;
$pdf->SetXY(20,$y);
$pdf->Cell(10,1,'Single Window Info');
$y=$y+5;
$pdf->Line(5,$y,200,$y);
$y=$y+5;
$pdf->SetXY(10,$y);
$pdf->Cell(10,1,'Inv No');
$pdf->SetXY(35,$y);
$pdf->Cell(10,1,'Item No');
$pdf->SetXY(50,$y);
$pdf->Cell(10,1,'Type');
$pdf->SetXY(80,$y);
$pdf->Cell(10,1,'Qualifier');
$pdf->SetXY(100,$y);
$pdf->Cell(10,1,'Code');
$pdf->SetXY(130,$y);
$pdf->Cell(10,1,'Text');
$pdf->SetXY(150,$y);
$pdf->Cell(10,1,'Measurement');
$pdf->SetXY(180,$y);
$pdf->Cell(10,1,'Unit');
$y=$y+4;
$sql22="select * from  esedisinglewindowinfo where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result22=mysqli_query($conn,$sql22);
	
while($rows22=mysqli_fetch_array($result22)){
	$y=$y+5;
	if($y>260)
	{
		$pdf->Addpage();
		$y=$pdf->gety();
		$y=$y+5;
	}

$pdf->SetFont('Arial','',8);
$pdf->SetXY(10,$y);
$pdf->Cell(10,1,$rows22['invoicesrno']);
$pdf->SetXY(35,$y);
$pdf->Cell(10,1,$rows22['itemno']);
$pdf->SetXY(50,$y);	
$pdf->Cell(10,1,$rows22['type']);
$pdf->SetXY(80,$y);
$pdf->Cell(100,1,$rows22['qualifier']);	
$pdf->SetXY(100,$y);
$pdf->Cell(10,1,$rows22['swcode']);	
$pdf->SetXY(130,$y);
$pdf->Cell(10,1,$rows22['swtext']);
$pdf->SetXY(150,$y);
$pdf->Cell(10,1,$rows22['measurement']);
$pdf->SetXY(180,$y);
$pdf->Cell(10,1,$rows22['unit']);	
$y=$y+4;

	


}
$pdf->Line(5,$y,200,$y);
$y=$y+4;
}
$y=$y+5;
$sql20="Select * from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result20=mysqli_query($conn,$sql20);
$rows20=mysqli_fetch_array($result20);
if($rows20['schemecode']=='19' or $rows20['schemecode']=='41' or $rows20['schemecode']=='42' or $rows20['schemecode']=='43' or $rows20['schemecode']=='44' or $rows20['schemecode']=='49' or $rows20['schemecode']=='71' or $rows20['schemecode']=='72'){	
if($y>260)
	{
		$pdf->Addpage();
		$y=$pdf->gety();
		$y=$y+5;
	}
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Drawback Details');
	$y=$y+4;
	$pdf->Line(5,$y,200,$y);
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Inv No');
	$pdf->SetXY(30,$y);
	$pdf->Cell(10,1,'Item No');
	$pdf->SetXY(45,$y);
	$pdf->Cell(10,1,'Main Dbk Sr no');
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,'Total DBK Amt. For Item');
	$pdf->SetXY(165,$y);
	$pdf->Cell(10,1,'Total Rosl Amt. For Item');
	$y=$y+4;
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,'DBK Sr no');
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,'Custom Rate Adv');
	$pdf->SetXY(110,$y);
	$pdf->Cell(10,1,'DBK Adv');
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,'DBK Qty');
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,'DBK unit');
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,'Rosl Adv');
	$y=$y+4;
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,'Custom rate Spec.');
	$pdf->SetXY(110,$y);
	$pdf->Cell(10,1,'DBK Rate Adv');
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,'Rosl Rate Adv');
	$y=$y+4;
	
	$sql3="Select * from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result3=mysqli_query($conn,$sql3);
while($rows3=mysqli_fetch_array($result3)){
	if($y>260)
	{
		$pdf->Addpage();
		$y=$pdf->gety();
		$y=$y+5;
	}
	$pdf->SetFont('Arial','',8);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,$rows3['invoicesrno']);
	$pdf->SetXY(30,$y);
	$pdf->Cell(10,1,$rows3['itemno']);
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,'0');
	$pdf->SetXY(110,$y);
	$pdf->Cell(10,1,$rows3['dbkamount']);
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,'0.00');
	$y=$y+4;
	$pdf->SetXY(50,$y);
	$pdf->Cell(10,1,$rows3['dbksrno']);
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,$rows3['dbkrate']);
	$pdf->SetXY(110,$y);
	$pdf->Cell(10,1,$rows3['dbkrate']);
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,$rows3['quantity']);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows3['unit']);
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,$rows3['dbkratespec']);
	$y=$y+4;
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,$rows3['dbkratespec']);
	$pdf->SetXY(110,$y);
	$pdf->Cell(10,1,$rows3['dbkratespec']);
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,'0.00');
	$y=$y+4;
	
}
	
	$pdf->Line(5,$y,200,$y);
	$y=$y+4;
	$pdf->SetFont('Arial','B',8);
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'Total Drawback Amt');
	$sql4="Select Sum(dbkamount) as sumdbk from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
	$result4=mysqli_query($conn,$sql4);
	while($rows4=mysqli_fetch_array($result4)){
		
		$pdf->SetXY(100,$y);
		$pdf->Cell(10,1,$rows4['sumdbk']);
		$y=$y+4;
		$pdf->Line(5,$y,200,$y);
}}
     $y=$pdf->getY();
	
	$y=$y+4;
    
	$sql19="Select * from esedithirdparty where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy] '";
	$result19=mysqli_query($conn,$sql19);
	if(mysqli_num_rows($result19)>0)
	{
		if($y>260)
	{
		$pdf->Addpage();
		$y=$pdf->gety();
		$y=$y+5;
	}
		$pdf->Line(5,$y,200,$y);
		$y=$y+4;
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(10,$y);
		$pdf->Cell(10,1,'Third Party Details');
		$y=$y+2;
		$pdf->Line(5,$y,200,$y);
		$y=$y+2;
		$pdf->SetXY(10,$y);
		$pdf->Cell(10,1,'Inv S.No');
		$pdf->SetXY(30,$y);
		$pdf->Cell(10,1,'Item  S.No');
		$pdf->SetXY(50,$y);
		$pdf->Cell(10,1,'IEC');
		$pdf->SetXY(60,$y);
		$pdf->Cell(10,1,'Exporter Name');
		$pdf->SetXY(100,$y);
		$pdf->Cell(10,1,'Address');
		$pdf->SetXY(140,$y);
		$pdf->Cell(10,1,'GSTN Type');
		$pdf->SetXY(160,$y);
		$pdf->Cell(10,1,'GSTN Id');
		$y=$y+4;
		$pdf->Line(5,$y,200,$y);


}
	
	$y=$y+4;
	$sql20="Select * from esedithirdparty where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy] '";
	$result20=mysqli_query($conn,$sql20);
	while($rows20=mysqli_fetch_array($result20))
	{
		if($y>260)
	{
		$pdf->Addpage();
		$y=$pdf->gety();
		$y=$y+5;
	}
		$pdf->SetFont('Arial','',8);
		$pdf->SetXY(10,$y);
		$pdf->Cell(10,1,$rows20['invoicesrno']);
		$pdf->SetXY(30,$y);
		$pdf->Cell(10,1,$rows20['itemno']);
		$pdf->SetXY(50,$y);
		$pdf->Cell(10,1,$rows20['ieccode']);
		$pdf->SetXY(60,$y);
		$pdf->Cell(10,1,$rows20['manufacturername']);
		$pdf->SetXY(80,$y);
		$pdf->Cell(10,1,$rows20['manufactureraddress1'].' '.$rows20['manufactureraddress2'].' '.$rows20['city'].' '.$rows20['pin']);
        $pdf->SetXY(140,$y);
		$pdf->Cell(10,1,$rows20['gstintype']);
		$pdf->SetXY(160,$y);
		$pdf->Cell(10,1,$rows20['gstinno']);

	
	}
	
	
	$sql23="Select * from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result23=mysqli_query($conn,$sql23);
$rows23=mysqli_fetch_array($result23);
if($rows23['schemecode']=='01' or $rows23['schemecode']=='02' or $rows23['schemecode']=='03' or $rows23['schemecode']=='04' or $rows23['schemecode']=='05' or $rows23['schemecode']=='08' or $rows23['schemecode']=='09' or $rows23['schemecode']=='11' or $rows23['schemecode']=='12' or $rows23['schemecode']=='41' or $rows23['schemecode']=='43' or $rows23['schemecode']=='44' or $rows23['schemecode']=='48' or $rows23['schemecode']=='50' or $rows23['schemecode']=='51'or $rows23['schemecode']=='52' or $rows23['schemecode']=='53' or $rows23['schemecode']=='54' or $rows23['schemecode']=='55' or $rows23['schemecode']=='71' or  $rows23['schemecode']=='72' or $rows23['schemecode']=='73' or $rows23['schemecode']=='73' or $rows23['schemecode']=='75'){	
if($y>260)
	{
		$pdf->Addpage();
		$y=$pdf->gety();
		$y=$y+5;
	}
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'License Details');
	$y=$y+4;
	$pdf->Line(5,$y,200,$y);
	$y=$y+4;
	$pdf->SetFont('Arial','B','8');
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'LIC Type');
	$pdf->SetXY(25,$y);
	$pdf->Cell(10,1,'Reg No');
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,'Reg Dt');
	$pdf->SetXY(55,$y);
	$pdf->Cell(10,1,'Inv SNo');
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,'Itm SNo');
	$pdf->SetXY(85,$y);
	$pdf->Cell(10,1,'SL No');
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,'SL No');
	
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,'Export Item');
	$pdf->SetXY(140,$y);
	$pdf->Cell(10,1,'Exp. QTY.');
	$pdf->SetXY(160,$y);
	$pdf->Cell(10,1,'Import item ');
	$pdf->SetXY(180,$y);
	$pdf->Cell(10,1,'Quantity');
	$pdf->SetXY(195,$y);
	$pdf->Cell(10,1,'Unit');
	$pdf->SetXY(210,$y);
	$pdf->Cell(10,1,'Imp/Ind');
	$y=$y+4;
	$pdf->SetXY(85,$y);
	$pdf->Cell(10,1,' in C');
	
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,'in E');
	$pdf->SetXY(125,$y);
	$pdf->Cell(10,1,'Details');
	$pdf->SetXY(165,$y);
	$pdf->Cell(10,1,'Details ');
	$y=$y+4;
	$pdf->Line(5,$y,200,$y);
	$sql24="Select * from esedilicensedet where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy] '";
	$result24=mysqli_query($conn,$sql24);
	while($rows24=mysqli_fetch_array($result24))
	{
		$y=$y+4;
		$pdf->SetFont('Arial','','8');
		$pdf->SetXY(10,$y);
		$pdf->Cell(10,1,$rows24['licensetype']);
		$pdf->SetXY(22,$y);
		$pdf->Cell(10,1,$rows24['registrationno']);
		$pdf->SetXY(42,$y);
		$pdf->Cell(10,1,$rows24['registrationdate']);
		$pdf->SetXY(60,$y);
		$pdf->Cell(10,1,$rows24['invoicesrno']);
		$pdf->SetXY(70,$y);
		$pdf->Cell(10,1,$rows24['itemsno']);
		$pdf->SetXY(85,$y);
		$pdf->Cell(10,1,$rows24['slnoinc']);
		$pdf->SetXY(100,$y);
		$pdf->Cell(10,1,$rows24['slnoine']);
		$pdf->SetXY(120,$y);
		$expitemdet1=substr($rows24['expitemdet'],0,9);
		$pdf->Cell(10,1,$expitemdet1);
		$pdf->SetXY(140,$y);
		$pdf->Cell(10,1,$rows24['expquantity']);
		$pdf->SetXY(160,$y);
		$impitemdet1=substr($rows24['impitemdet'],0,9);
		$pdf->Cell(10,1,$impitemdet1);
		$pdf->SetXY(180,$y);
		$pdf->Cell(10,1,$rows24['quantity']);
		$pdf->SetXY(195,$y);
		$pdf->Cell(10,1,$rows24['unit']);
		$pdf->SetXY(210,$y);
		$pdf->Cell(10,1,$rows24['impind']);
		$y=$y+4;
		$pdf->SetXY(120,$y);
		$expitemdet2=substr($rows24['expitemdet'],9,31);
		$pdf->Cell(10,1,$expitemdet2);
		$pdf->SetXY(160,$y);
		$impitemdet2=substr($rows24['impitemdet'],9,31);
		$pdf->Cell(10,1,$impitemdet2);
		$y=$y+4;
	}
	$pdf->Line(5,$y,200,$y);
}	
    
	$y=$y+4;
	$sql5="Select * From esedisupporting where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy] '";
	$result5=mysqli_query($conn,$sql5);
	if(mysqli_num_rows($result5)>0){
	while($i==0){
	
		$y=$pdf->getY();
	$y=$y+6;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Single window Supporting Documents');
	$y=$y+4;
   $pdf->Line(5,$y,200,$y);
	$y=$y+4;
	$pdf->SetXY(6,$y);
	$pdf->Cell(10,1,'Inv No/Item No');
	$pdf->SetXY(32,$y);
	$pdf->Cell(10,1,'Statement For');
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'IRN No');
	$pdf->SetXY(80,$y);
	$pdf->Cell(10,1,'Doc Type');
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,'Issued Party');
	$pdf->SetXY(124,$y);
	$pdf->Cell(10,1,'Ref No');
	$pdf->SetXY(140,$y);
	$pdf->Cell(10,1,'Place');
	$pdf->SetXY(155,$y);
	$pdf->Cell(10,1,'Issue Dt.');
	$pdf->SetXY(170,$y);
	$pdf->Cell(10,1,'Exp. dt.');
	$pdf->SetXY(190,$y);
	$pdf->Cell(10,1,'BNF Party');
	$i=$i+1;}}
	$sql5="Select * From esedisupporting where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy] '";
	$result5=mysqli_query($conn,$sql5);
	while($rows5=mysqli_fetch_array($result5)){
	
		$y=$pdf->getY();
	
	$y=$y+4;
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(10,$y);
		$pdf->Cell(10,1,$rows5['invoicesrno'].'/'.$rows5['itemno']);
		$pdf->SetXY(32,$y);
		$pdf->Cell(10,1,$rows5['statementfor']);
		$irnno1=substr($rows5['irnno'],0,8);
		$pdf->SetXY(60,$y);
		$pdf->Cell(10,1,$irnno1);
		$pdf->SetXY(80,$y);
		$pdf->Cell(10,1,$rows5['doccode']);
		$issuedpartyname=explode(" ",$rows5['issuedpartyname']);
		$pdf->SetXY(100,$y);
		$pdf->Cell(10,1,$issuedpartyname[0]);
		$drn1=substr($rows5['drn'],0,8);
		$pdf->SetXY(124,$y);
		$pdf->Cell(10,1,$drn1);
		$pdf->SetXY(140,$y);
		$pdf->Cell(10,1,$rows5['place']);
		$pdf->SetXY(152,$y);
		$pdf->Cell(10,1,$rows5['issuedate']);
		$pdf->SetXY(170,$y);
		$pdf->Cell(10,1,$rows5['expirydate']);
		$bnfpartyname=explode(" ",$rows5['bnfpartyname']);
		$pdf->SetXY(190,$y);
		$pdf->Cell(10,1,$bnfpartyname[0]);
		$y=$y+4;
		$irnno2=substr($rows5['irnno'],9,16);
		$pdf->SetXY(60,$y);
		$pdf->Cell(10,1,$irnno2);
		$pdf->SetXY(74,$y);
		$dctype=explode(" ",$rows5['doctype']);
		$pdf->Cell(10,1,$dctype[0]);
		$pdf->SetXY(100,$y);
		$pdf->Cell(10,1,$issuedpartyname[1]);
		$drn2=substr($rows5['drn'],9,16);
		$pdf->SetXY(124,$y);
		$pdf->Cell(10,1,$drn2);
		$pdf->SetXY(186,$y);
		$pdf->Cell(10,1,$bnfpartyname[1]);
		$y=$y+4;
		$pdf->SetXY(74,$y);
		$pdf->Cell(10,1,$dctype[1]);
		
		$issuedpartyaddress=explode(" " ,$rows5['issuedpartyaddress']);
		$pdf->SetXY(100,$y);
		$pdf->Cell(10,1,$issuedpartyaddress[0]);
		$bnfpartyaddress=explode(" ",$rows5['bnfpartyaddress']);
		$pdf->SetXY(180,$y);
		$pdf->Cell(10,1,$bnfpartyaddress[0]);
		$y=$y+4;
		$pdf->SetXY(100,$y);
		$pdf->Cell(10,1,$issuedpartyaddress[1]);
		$pdf->SetXY(180,$y);
		$pdf->Cell(10,1,$bnfpartyaddress[1]);
	
		
		$y=$y+4;
		
		
	}
	$y=$pdf->gety();
	if($y>250)
	{
		$pdf->Addpage();
		$y=10;
	}
$y=$y+8;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(60,$y);
	
	$pdf->Cell(10,1,'Factory Stuffed');
$sql="Select * from edisb1 where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,$rows['factorystuffed']);
	
}
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'Total');
	$sql6="Select sum(fobinr) as sumfob from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result6=mysqli_query($conn,$sql6);
while($rows6=mysqli_fetch_array($result6)){
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,$rows6['sumfob']);
	
}
    $pdf->SetFont('Arial','B',10);
	$y=$y+4;
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'Total DBK');
	$sql4="Select Sum(dbkamount) as sumdbk from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
	$result4=mysqli_query($conn,$sql4);
	while($rows4=mysqli_fetch_array($result4)){
		$pdf->SetFont('Arial','',10);
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,$rows4['sumdbk']);
	
	}
	$pdf->SetFont('Arial','B',10);
	$y=$y+4;
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'Total DEPB');
	
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,'0.00');
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'Total PMV');
	$sql6="Select sum(totalpmv) as sumpmv from esediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result6=mysqli_query($conn,$sql6);
while($rows6=mysqli_fetch_array($result6)){
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(120,$y);
$pdf->Cell(10,1,$rows6['sumpmv']);}
	$y=$y+4;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(60,$y);
	$pdf->Cell(10,1,'Total STR');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,'0.00');
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'I/We declare that the particulars given herein are true and are correct.I/We undertake to abide by the provisions of Foreign Exchange Management Act,1999, as');
	$y=$y+4;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'amended from time to time, including realisation/repatriation of foreign exchange to/from India.');
	$y=$y+8;
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,'Signature of Exporter/Cha with Date');
	$f='exportchecklist';
	$jobno=$_POST['jobno'].$_POST['branch'];
	$fn=$f.$jobno;
	    
	


$pdf->Output('D',$fn.'.pdf');
?>