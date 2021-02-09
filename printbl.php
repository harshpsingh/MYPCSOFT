<?php
require('fpdf.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exportsea";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Database connection error");}
$sql="Select * from shipmentregister where docketno='$_POST[docketno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$sql1="Select * from hbldetails where docketno='$_POST[docketno]' and branch='$_POST[branch]' and fy='$_POST[fy]'";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
while($rows=mysqli_fetch_array($result)){
	$pdf = new FPDF();
    $pdf->AddPage();
	$pdf->SetFont('Arial','B',8);
	$pdf->SetXY(12,32);
	$pdf->Cell(10,2,$rows['exportername']);
	$pdf->SetXY(12,36);
	$address=explode(',',$rows['exporteraddress']);
	$pdf->Cell(10,2,$address[0]);
	$pdf->SetXY(12,40);
	$pdf->Cell(10,2,$address[1]);
	$pdf->SetXY(12,44);
	$pdf->Cell(10,2,$address[2]);
	$pdf->SetXY(44,44);
	$pdf->Cell(10,2,$address[3]);
	$pdf->SetXY(64,44);
	$pdf->Cell(10,2,$address[4]);
	$pdf->SetXY(12,48);
	$pdf->Cell(10,2,$address[5]);
	$pdf->SetXY(12,63);
	$pdf->Cell(10,2,$rows['consigneename']);
	$pdf->SetXY(12,66);
	$pdf->Cell(10,2,$rows['consigneeaddress']);
	$pdf->SetXY(12,88);
	$pdf->Cell(10,2,$rows['notify']);
	$pdf->SetXY(12,94);
	$pdf->Cell(10,2,$rows['notifyaddress']);
	$pdf->SetXY(12,113);
	$pdf->Cell(10,2,$rows['originport']);
	$pdf->SetXY(42,113);
	$pdf->Cell(10,2,$rows['origincountry']);
	$pdf->SetXY(56,113);
	$pdf->Cell(10,2,$rows['loadport']);
	$pdf->SetXY(82,113);
	$pdf->Cell(10,2,$rows['loadcountry']);
	$pdf->SetXY(12,133);
	$pdf->Cell(10,2,$rows['dischargeport']);
	$pdf->SetXY(30,133);
	$pdf->Cell(10,2,$rows['dischargecountry']);
	$pdf->SetXY(66,133);
	$pdf->Cell(10,2,$rows['destinationport']);
	$pdf->SetXY(85,133);
	$pdf->Cell(10,2,$rows['destinationcountry']);
	$pdf->SetXY(12,148);
	$pdf->Cell(10,2,$rows['vessel']);
	$pdf->SetXY(66,148);
	$pdf->Cell(10,2,$rows['voyage']);
	$pdf->SetXY(146,22);
	$pdf->Cell(10,2,$rows['hblno']);
	$pdf->SetXY(146,26);
	$pdf->Cell(10,2,$rows['bookingno']);
	$pdf->SetXY(12,160);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,2,'CONT NO:');
	$cn=explode(',',$rows['containerno']);
	$pdf->SetXY(12,163);
	$pdf->Cell(10,2,$cn[0]);
	if(!empty($cn[1]) )
	{
	$pdf->SetXY(12,166);
	$pdf->Cell(10,2,$cn[1]);}
	$pdf->SetXY(12,169);
	$pdf->Cell(10,2,'CONT. SIZE:');
	$pdf->SetXY(12,172);
	$pdf->Cell(10,2,$rows['containersize']);
	$pdf->SetXY(12,174);
	$pdf->Cell(10,2,$rows['containertype']);
	$pdf->SetXY(12,178);
	$pdf->Cell(10,2,'C. Seal');
	$pdf->SetXY(12,180);
	$pdf->Cell(10,2,$rows['customseal']);
	$pdf->SetXY(12,182);
	$pdf->Cell(10,2,'L. Seal');
	$pdf->SetXY(12,184);
	$pdf->Cell(10,2,$rows['carrierseal']);
    $pdf->SetXY(15,232);
	if($rows['overseasagentname']!=NULL){
	$pdf->Cell(10,2,$rows['overseasagentname']);
	$conn1=mysqli_connect($servername,$username,$password,"master");
	$sql2="Select * from overseasagent where overseasagentname='$rows[overseasagentname]'";
	$result2=mysqli_query($conn1,$sql2);
	
	while($rows2=mysqli_fetch_array($result2)){
		$pdf->SetXY(15,234);
		$pdf->Cell(10,2,$rows2['address1']);
		$pdf->SetXY(15,236);
		$pdf->Cell(10,2,$rows2['address2']);
		$pdf->SetXY(15,238);
		$pdf->Cell(10,2,$rows2['city'].$rows2['country']);
		
	}
	
		
	
	$pdf->SetXY(40,160);
	$pdf->Cell(10,2,$rows['marksandnos']);
	
	
	$pdf->SetXY(80,162);
	$pdf->Cell(10,2,'Shipper Load Stow and Count said to contain:');
	$pdf->SetXY(80,164);
	$pdf->Cell(10,2,$rows['noofpackages']);
	$pdf->SetXY(80,167);
	$pdf->Cell(10,2,$rows['units1']);
	$pdf->SetXY(80,170);
	$pdf->Cell(10,2,$rows['goodsdescription']);
	$pdf->SetXY(154,160);
	$pdf->Cell(10,2,'GR. WT.');
	}
while($rows1=mysqli_fetch_array($result1)){
	$pdf->SetXY(114,134);
	$pdf->Cell(10,2,$rows1['modeoftransport']);
	$pdf->SetXY(150,134);
	$pdf->Cell(10,2,$rows1['transhipment']);
	$pdf->SetXY(65,172);
	$pdf->Cell(10,2,'Inv No');
	$pdf->SetXY(80,172);
	$pdf->Cell(10,2,$rows1['invoiceno']);
	$pdf->SetXY(102,170);
	$pdf->Cell(10,2,'Inv Dt.');
	$pdf->SetXY(114,170);
	$pdf->Cell(10,2,$rows1['invoicedate']);
	$pdf->SetXY(65,174);
	$pdf->Cell(10,2,'S .BillNo');
	$pdf->SetXY(80,174);
	$pdf->Cell(10,2,$rows1['sbno']);
	$pdf->SetXY(95,174);
	$pdf->Cell(10,2,'Dt');
	$pdf->SetXY(110,174);
	$pdf->Cell(10,2,$rows1['sbdate']);
	$pdf->SetXY(70,178);
	$pdf->Cell(10,2,'HSCode');
	$pdf->SetXY(85,178);
	$pdf->Cell(10,2,$rows1['hscode']);
	
	$pdf->SetXY(70,182);
	$pdf->Cell(10,2,'IEC NO');	
    $pdf->SetXY(85,182);
	$pdf->Cell(10,2,$rows1['ieccode']);	
	
	$pdf->SetXY(166,160);
	$pdf->Cell(10,2,$rows['grossweight']);
	$pdf->SetXY(166,163);
	$pdf->Cell(10,2,$rows['units2']);
	$pdf->SetXY(154,166);
	$pdf->Cell(10,2,'Net WT.');
	$pdf->SetXY(166,166);
	$pdf->Cell(10,2,$rows['netweight']);
	$pdf->SetXY(166,169);
	$pdf->Cell(10,2,$rows['units3']);
	$pdf->SetXY(185,190);
	$pdf->Cell(10,2,$rows1['shipmenttype']);
	$pdf->SetXY(12,213);
	$pdf->Cell(10,2,$rows1['freightamt']);
	$pdf->SetXY(62,213);
	$pdf->Cell(10,2,$rows1['freightpayableat']);
	$pdf->SetXY(112,213);
	$pdf->Cell(10,2,$rows1['noofbl']);
	$pdf->SetXY(166,213);
	
	$pdf->Cell(10,2,$rows1['placeofissue']);
	$pdf->SetXY(162,216);
	$pdf->Cell(10,2,$rows1['dateofissue']);
	if($rows1['oceanthc']!="None")
	{
		$pdf->SetXY(80,190);
		$pdf->Cell(10,1,'ocean thc '.$rows1['oceanthc']);
	}
	if($rows1['oceanfreight']!="None")
	{
		$pdf->SetXY(80,192);
		$pdf->Cell(10,1,'ocean Freight '.$rows1['oceanfreight']);
	}
	if($rows1['destinationthc']!="None")
	{
		$pdf->SetXY(80,194);
		$pdf->Cell(10,1,'destination thc '.$rows1['destinationthc']);
	}
	if($rows1['inlandhaulage']!="None")
	{
		$pdf->SetXY(80,196);
		$pdf->Cell(10,1,'inland haulage '.$rows1['inlandhaulage']);
	}
	if($rows1['destinationinlandhaulage']!="None")
	{
		$pdf->SetXY(80,198);
		$pdf->Cell(10,1,'destination inland haulage '.$rows1['destinationinlandhaulage']);
	}
}
}
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(10,15);
$pdf->Cell(100,10,'MULTIMODAL TRANSPORT  DOCUMENT',1,0,'C');
$pdf->SetXY(10,25);
$pdf->Cell(100,30,'',1);
$pdf->SetXY(12,20);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,20,'Consignor');
$pdf->SetXY(10,55);
$pdf->Cell(100,25,'',1);
$pdf->SetXY(12,57);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,'Consignee(or order)');
$pdf->SetXY(10,80);
$pdf->Cell(100, 25,'',1);
$pdf->SetXY(12,82);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,'Notify Address');
$pdf->SetXY(10,105);
$pdf->Cell(100,20,'',1);
$pdf->SetXY(12,107);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,'Place of acceptance');
$pdf->SetXY(75,107);
$pdf->Cell(10,4,'Port of Loading');
$pdf->SetXY(10,125);
$pdf->Cell(100,15,'',1);
$pdf->SetXY(12,127);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,'Port of Discharge');
$pdf->SetXY(75,127);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,'Place of Delivery');
$pdf->SetXY(10,140);
$pdf->Cell(100,15,'',1);
$pdf->SetXY(12,142);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,'Vessel & Voyage No');
$pdf->SetXY(110,15);
$pdf->Cell(95,110,'',1);
$pdf->SetXY(130,20);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,'MTD No.');
$pdf->SetXY(130,25);
$pdf->Cell(10,4,'Booking/');
$pdf->SetXY(130,28);
$pdf->Cell(10,4,'Shipment Reference No');
$pdf->Image('logo.png',112,32,90,30);
$pdf->SetXY(125,50);
$pdf->Cell(10,4,'MTO REGD. No. MTO/DG8/162/APR/2022');
$pdf->SetFont('Arial','B',6);
$pdf->SetXY(140,55);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(10,4,'Head & Regd. Office');
$pdf->SetXY(118,60);
$pdf->Cell(10,4,'224,Sant Nagar,East of Kailash,New Delhi-110065,INDIA');
$pdf->SetXY(140,65);
$pdf->Cell(10,4,'Tel.:91-11-46111777');
$pdf->SetXY(118,70);
$pdf->Cell(10,4,'Email: info@amritind.com,Website: www.amritind.com');
$pdf->SetXY(135,75);
$pdf->Cell(10,4,'...............................................');
$pdf->SetXY(137,80);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(10,4,'FMC. Regd. No. : 024942');
$pdf->SetXY(110,95);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(6,2,'Taken in chargein apparently good condition herein at the place of receipt for transport and');
$pdf->SetXY(110,98);
$pdf->Cell(6,2,'delivery as mentioned above, unless otherwise stated. The MTO in accordance with the');
$pdf->SetXY(110,101);
$pdf->Cell(6,2,'provisions contained in the MTD undertakes to perform or to procure the performance of the');
$pdf->SetXY(110,104);
$pdf->Cell(6,2,'multimodal transport from the placd of which goods are taken   in  charge , to  the   place');

$pdf->SetXY(110,107);
$pdf->Cell(6,2,'designated   for   delivery   and   assumes   responsibility  for   such    transport');
$pdf->SetXY(110,113);
$pdf->Cell(6,2,'One of the MTD s must be surrendered, duly endorsed in exchange for the goods .In witness');
$pdf->SetXY(110,116);
$pdf->Cell(6,2,'where of the original MTD all of this tenor and date have been signed in the number indicated');
$pdf->SetXY(110,119);
$pdf->Cell(6,2,'below of which being accompalished  the other(s) to be void Terms and Conditions overleaf');
$pdf->SetXY(110,125);
$pdf->Cell(95,30,'',1);
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(110,125);
$pdf->Cell(8,4,'Modes/Means of Transport');
$pdf->SetXY(150,125);
$pdf->Cell(8,4,'Route/Place of Transhipment(if any)');
$pdf->SetXY(10,155);
$pdf->Cell(195,50,'',1);
$pdf->SetXY(12,157);
$pdf->Cell(4,2,'Container No(s)');
$pdf->SetXY(40,157);
$pdf->Cell(8,2,'Marks and Numbers');
$pdf->SetXY(80,157);
$pdf->Cell(8,2,'Number of packages,Kinds of Packages,general');
$pdf->SetXY(100,159);
$pdf->Cell(8,2,'description of goods');
$pdf->SetXY(160,157);
$pdf->Cell(8,2,'Gross weight');
$pdf->SetXY(185,157);
$pdf->Cell(8,2,'Measurement');
$pdf->SetXY(12,195);
$pdf->Cell(6,2,'Shipper declared value');
$pdf->SetXY(12,200);
$pdf->Cell(6,2,'Subject to Extra Freight as per Tarrif');
$pdf->SetXY(80,200);

$pdf->Cell(12,8,'Particular above furnished by consignor/consignee');
$pdf->SetXY(150,202);

$pdf->SetXY(10,205);
$pdf->Cell(50,20,'',1);
$pdf->SetXY(12,207);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(6,2,'Freight Amount');
$pdf->SetXY(60,205);
$pdf->Cell(50,20,'',1);
$pdf->SetXY(62,207);
$pdf->Cell(6,2,'Freight Payable at');
$pdf->SetXY(110,205);
$pdf->Cell(50,20,'',1);
$pdf->SetXY(112,207);
$pdf->Cell(6,2,'Number of Orignal MTD(S)');
$pdf->SetXY(160,205);
$pdf->Cell(45,20,'',1);
$pdf->SetXY(162,207);
$pdf->Cell(6,2,'Place and date of issue');
$pdf->SetXY(10,225);
$pdf->Cell(100,30,'',1);
$pdf->SetXY(12,228);
$pdf->Cell(10,4,'Other Particular(if any)/Delivery Agent');
$pdf->SetXY(25,248);
$pdf->Cell(20,4,'Weight and Measurement of container not to be included');
$pdf->SetXY(30,252);
$pdf->Cell(25,4,'(TERMS CONTINUED ON BACK HEREOF)');
$pdf->SetXY(110,225);
$pdf->Cell(95,30,'',1);
$pdf->SetXY(130,228);
$pdf->Cell(10,4,'For AMRIT SEAIR EXPRESS PVT.LTD.');
$pdf->SetXY(140,250);
$pdf->Cell(10,4,'AUTHORISED SIGNATORY');
$bl=$_POST['docketno'].'billoflading';
$pdf->Output('D',$bl.'.pdf');

?>