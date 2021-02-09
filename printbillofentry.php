<?php
require('fpdf.php');
session_start();

	$pdf = new FPDF();
	 $pdf->AddPage('P','A4');
	$pdf->SetFont('Arial','B',10);
$pdf->SetXY(80,10);
$pdf->Cell(10,1,'E-annex Checklist');
$pdf->SetXY(10,40);

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
   
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(65,15);
	$pdf->Cell(10,1,$rows['chaname']);
	$pdf->SetXY(70,20);
	$pdf->Cell(10,1,'CHA:');
	$pdf->SetXY(80,20);
	$pdf->Cell(10,1,$rows['chanumber']);
	$pdf->SetXY(68,25);
	$pdf->Cell(10,1,'Bill of Entry For Home Consumption');
	$pdf->SetXY(10,35);
	$pdf->Cell(10,1,'Location:');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,35);
	$pdf->Cell(10,1,$rows['location']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,35);
	$pdf->Cell(10,1,'Jobno/Date');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(140,35);
	$pdf->Cell(10,1,$rows['jobno']);
	$pdf->SetXY(150,35);
	$pdf->Cell(10,1,'Dt '.$rows['jobdate']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,40);
	$pdf->Cell(10,1,'B.E No/Date');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,40);
	$pdf->Cell(10,1,'Dt.');
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,40);
	$pdf->Cell(10,1,'User Job No');
	$pdf->SetXY(10,45);
	$pdf->Cell(10,1,'CHA Details');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,45);
	$pdf->Cell(10,1,$rows['chanumber']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,45);
	$pdf->Cell(10,1,'Importer Details');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(150,45);
	$pdf->Cell(10,1,$rows['iec']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(170,45);
	$pdf->Cell(10,1,'Branch Code');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(195,45);
	$pdf->Cell(10,1,$rows['branchcode']);
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,50);
	$pdf->Cell(10,1,$rows['chaname']);
	$pdf->SetXY(150,50);
	$pdf->Cell(10,1,$rows['importername']);
	
	$pdf->SetXY(150,55);
	$pdf->Cell(10,1,$rows['importeraddress1'].$rows['importeraddress2'].$rows['city']);
	$pdf->SetXY(150,60);
	$pdf->Cell(10,1,$rows['state'].$rows['pin']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,65);
	$pdf->Cell(10,1,'GSTIN No');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(150,65);
	$pdf->Cell(10,1,$rows['gstin']);
	$pdf->SetXY(10,70);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Kacha BE');
	$pdf->SetXY(30,70);
	$pdf->SetFont('Arial','',10);
	if($rows['kachabe']=='Y')
	{
		$kb='YES';
	}
	else
	{
		$kb='NO';
	}
	$pdf->Cell(10,1,$kb);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(40,70);
	$pdf->Cell(10,1,'Green Channel');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(70,70);
	if($rows['greenchannel']=='Y')
	{
		$gc='YES';
	}
	else
	{
		$gc='NO';
	}
	$pdf->Cell(10,1,$gc);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,70);
	$pdf->Cell(10,1,'Importer Type');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(150,70);
	if($rows['importertype']=='G')
	{
		$it='Government Departments';
	}
	else if($rows['importertype']=='U')
	{
		$it='Government Undertakings';
	}
	else if($rows['importertype']=='O')
	{
		$it='Others';
	}
	else if($rows['importertype']=='P')
	{
		
	$it='Private';
	}
		
	$pdf->Cell(10,1,$it);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(165,70);
	$pdf->Cell(10,1,'AD Code');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(180,70);
	$pdf->Cell(10,1,$rows['adcode']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,75);
	$pdf->Cell(10,1,'Section 48');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(30,75);
	if($rows['section48']=='Y')
	{
		$sc='YES';
	}
	else
	{
		$sc='NO';
	}
	$pdf->Cell(10,1,$sc);
	
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(40,75);
	$pdf->Cell(10,1,'First Check');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(70,75);
	if($rows['firstcheck']=='Y')
	{
		$fc='YES';
	}
	else
	{
		$fc='NO';
	}
	$pdf->Cell(10,1,$fc);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,75);
	$pdf->Cell(10,1,'Pay Mode');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(140,75);
	if($rows['paymode']=='T')
	{
		$pm='Transaction';
	}
	else
	{
		$pm='CSH';
	}
	
	$pdf->Cell(10,1,$pm);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,80);
	$pdf->Cell(10,1,'WH B/E No');
	$pdf->SetXY(40,80);
	$pdf->Cell(10,1,'WH B/E Dt.');
	$pdf->SetXY(120,80);
	$pdf->Cell(10,1,'Prior BE');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(140,80);
	if($rows['priorbe']=='Y')
	{
		$pb='YES';
	}
	else
	{
		$pb='NO';
	}
	$pdf->Cell(10,1,$pb);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,85);
	$pdf->Cell(10,1,'IGM Details');
	$pdf->line(5,90,200,90);
	$pdf->SetXY(10,95);
    $pdf->Cell(10,1,'IGM No');	
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,95);
	$pdf->Cell(10,1,$rows['igmno']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(60,95);
	$pdf->Cell(10,1,'Dt');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(70,95);
	$pdf->Cell(10,1,$rows['igmdate']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,95);
	$pdf->Cell(10,1,'Port Of Loading');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(160,95);
	$pdf->Cell(10,1,$rows['originport']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,100);
	$pdf->Cell(10,1,'IGM Inward Date');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,100);
	$pdf->Cell(10,1,$rows['igminwarddate']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,100);
	$pdf->Cell(10,1,'Reporting Port');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(160,100);
	$pdf->Cell(10,1,$rows['reportingport']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,105);
	$pdf->Cell(10,1,'Country/Origin');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,105);
	$pdf->Cell(10,1,$rows['origincountry']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,105);
	$pdf->Cell(10,1,'Country/Consignee');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(160,105);
	$pdf->Cell(10,1,$rows['consigneecountry']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,110);
	$pdf->Cell(10,1,'BL No');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,110);
	$pdf->Cell(10,1,$rows['blno']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(60,110);
	$pdf->Cell(10,1,'Dt');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(70,110);
	$pdf->Cell(10,1,$rows['bldate']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,110);
	$pdf->Cell(10,1,'House BL No');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(145,110);
	$pdf->Cell(10,1,$rows['hblno']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(160,110);
	$pdf->Cell(10,1,'Dt');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(170,110);
	$pdf->Cell(10,1,$rows['hbldate']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,115);
	$pdf->Cell(10,1,'No of Packages');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,115);
	$pdf->Cell(10,1,$rows['noofpackages']);
	$pdf->SetXY(50,115);
	$pdf->Cell(10,1,$rows['unit']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,115);
	$pdf->Cell(10,1,'Gross Weight');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(150,115);
	$pdf->Cell(10,1,$rows['grossweight']);
	$pdf->SetXY(170,115);
	$pdf->Cell(10,1,$rows['wtunit']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,120);
	$pdf->Cell(10,1,'Marks and No');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,120);
	$pdf->Cell(10,1,$rows['marksno']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,125);
	$pdf->Cell(10,1,'Invoice Details');
	$pdf->Line(5,130,200,130);	
}
$sql1="Select * From isediinvoice where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result1=mysqli_query($conn,$sql1);
while($rows1=mysqli_fetch_array($result1)){
    $pdf->SetXY(10,135);
	$y=$pdf->getY();
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Inv. No');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows1['invoiceno']);
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,'Dt.');
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,$rows1['invoicedate']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(160,$y);
	$pdf->Cell(10,1,'Supplier Detail');
	$y=$y+5;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Inv Value');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows1['invoicevalue']);
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,$rows1['currencyname']);
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,'TOI');
	$pdf->SetXY(140,$y);
	$pdf->Cell(10,1,$rows1['termsofinvoice']);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows1['suppliername']);
	$y=$y+5;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Freight');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows1['freight']);
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows1['supplieraddress1']);
	$y=$y+5;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Insurance');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows1['insurance']);
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows1['supplieraddress2']);
	$y=$y+5;
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$rows1['country']);
	$y=$y+5;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Agency Comm');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows1['agencycomm']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,'B/S Related');
	$pdf->SetFont('Arial','',10);
	if($rows['bsrelated']=='Y')
	{
		$br='YES';
	}
	else
	{
		$br='NO';
	}
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,$br);
	$y=$y+5;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Loading charges');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows1['loadingcharges']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(120,$y);
	$pdf->Cell(10,1,'Exchange Rate');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(150,$y);
	$pdf->Cell(10,1,'1'.$rows1['currencyname'].'='.$rows1['exchangerate'].'INR');
	$y=$y+5;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'M charges in Inv');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows1['misccharges']);
	$y=$y+5;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Highseasale');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows1['highseasale']);
	$y=$y+5;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Discount');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows1['discount']);
	$y=$y+5;
	$pdf->SetXY(10,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Nature of Trans.');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows1['natureoftransaction']);
	$pdf->SetXY(120,$y);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Loc No-Date');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(140,$y);
$pdf->Cell(10,1,$rows1['locno'].$rows1['locdate']);}
	$y=$y+5;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Item Details');
	$y=$y+5;
	$pdf->Line(5,$y,200,$y);
	$y=$y+5;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Sr. No');
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,'Ritc');
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,'Description(General-Description-Model)');
	$pdf->SetXY(180,$y);
	$pdf->Cell(10,1,'SVB Loading(A/D)');
	$y=$y+5;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Qty');
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,'Unit Price');
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,'CTH');
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,'STD/Pref');
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,'Cus Notn');
	$pdf->SetXY(160,$y);
	$pdf->Cell(10,1,'Cus Dty.');
	$pdf->SetXY(190,$y);
	$pdf->Cell(10,1,'BCD Amt(Rs)');
	$y=$y+5;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Unit');
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,'Ass Val(Rs)');
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,'CETH');
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,'Exc Notn');
	$pdf->SetXY(160,$y);
	$pdf->Cell(10,1,'Rate/Amt');
	$pdf->SetXY(190,$y);
	$pdf->Cell(10,1,'CVD Amt.');
	$y=$y+5;
	$pdf->SetXY(160,$y);
	$pdf->Cell(10,1,'Exc Duty');
	$y=$y+5;
	$pdf->SetXY(160,$y);
	$pdf->Cell(10,1,'Rate/Amt');
	$y=$y+5;
	$pdf->line(5,$y,200,$y);
	$y=$y+5;
	$sql2="Select * from isediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result2=mysqli_query($conn,$sql2);
while($rows2=mysqli_fetch_array($result2)){
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Inv Sr No');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows2['invoicesrno']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,'Inv  No');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,$rows2['invoiceno']);
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(130,$y);
	$pdf->Cell(10,1,'Inv  Date');
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(160,$y);
	$pdf->Cell(10,1,$rows2['invoicedate']);
	
}
$sql2="Select * from isediitem where jobno='$_POST[jobno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";

$result2=mysqli_query($conn,$sql2);
while($rows2=mysqli_fetch_array($result2)){
	$y=$y+5;
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,$rows2['itemno']);
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(30,$y);
	$pdf->Cell(10,1,$rows2['ritc']);
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,$rows2['goodsdescription']);
	$pdf->SetXY(190,$y);
	$pdf->Cell(10,1,$rows2['svbaccessed'].'/'.$rows2['svbduty']);
	$y=$y+5;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,$rows2['quantity']);
	$pdf->SetXY(40,$y);
	$pdf->Cell(10,1,$rows2['productrate']);
	$pdf->SetXY(70,$y);
	$pdf->Cell(10,1,$rows2['ritc']);
	$pdf->SetXY(100,$y);
	$pdf->Cell(10,1,$rows2['stdpref']);
	$y=$y+5;
	
	
	
	
}
	


$pdf->Output();
?>