<?php
require('fpdf.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exportsea";
$pdf = new FPDF();
    $pdf->AddPage();
	$pdf->SetFont('Arial','B',8);
	$pdf->SetXY(8,10);
	$pdf->Cell(90,30,'',1,1);
	$pdf->SetFont('Arial','',8);
	$pdf->SetXY(10,14);
	$pdf->Cell(10,1,'1. Goods Consigned from( Exporter business');
	$pdf->SetXY(10,16);
	$pdf->Cell(10,1,'name ,address and Country)');
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Database connection error");}
$sql="Select * from shipmentregister where docketno='$_POST[docketno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){

	
	$pdf->SetXY(12,20);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,2,$rows['exportername']);
	$pdf->SetFont('Arial','',8);
	$pdf->SetXY(12,24);
	$address=explode(',',$rows['exporteraddress']);
	$pdf->Cell(10,2,$address[0]);
	$pdf->SetXY(12,26);
	$pdf->Cell(10,2,$address[1]);
	$pdf->SetXY(12,30);
	$pdf->Cell(10,2,$address[2]);
	$pdf->SetXY(12,34);
	$pdf->Cell(10,2,$address[3]);
	$pdf->SetXY(34,34);
	$pdf->Cell(10,2,$address[4]);
	$pdf->SetXY(52,34);
	$pdf->Cell(10,2,$address[5]);
	
    $pdf->SetXY(8,40);
	$pdf->Cell(90,30,'',1,1);
	$pdf->SetXY(10,48);
	$pdf->Cell(10,1,'2. Goods Consigned to(Consignee name address and country)');
	$pdf->SetXY(12,56);
	$pdf->Cell(10,2,$rows['consigneename']);
	$pdf->SetXY(12,60);
	
	$consigneeaddress=explode(',',$rows['consigneeaddress']);
		
	$pdf->Cell(10,2,$consigneeaddress[0]);
	
	$pdf->SetXY(12,64);
	$pdf->Cell(10,2,$consigneeaddress[1]);
	$pdf->SetXY(22,64);
	$pdf->Cell(10,2,$consigneeaddress[2]);
	$pdf->SetXY(98,10);
	$pdf->Cell(100,60,'',1,1);
	$pdf->SetFont('Arial','',8);
	$pdf->SetXY(102,12);
	$pdf->Cell(10,2,'Reference No:');
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(106,18);
	$pdf->Cell(10,2,'GENERALISED SYSTEM OF PREFERENCES');
	$pdf->SetFont('Arial','B',8);
	$pdf->SetXY(122,26);
	$pdf->Cell(10,2,'CERTIFICATE OF ORIGIN');
	$pdf->SetXY(118,34);
	$pdf->Cell(10,2,'(Combined declaration and certificate)');
	$pdf->SetXY(132,40);
	$pdf->Cell(10,2,'FORM A');
	$pdf->SetXY(106,44);
	$pdf->Cell(20,2,'Issued in.........................................................................................');
	$pdf->SetXY(132,48);
	$pdf->Cell(10,2,'(Country)');
	$pdf->SetXY(158,54);
	$pdf->Cell(10,2,'(See notes Overleaf)');
	$pdf->SetXY(8,70);
	$pdf->Cell(90,30,'',1,1);
	$pdf->SetXY(12,74);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(10,2,'3. Means of Transport and route(as far as known)');
	$pdf->SetXY(98,70);
	$pdf->Cell(100,30,'',1,1);
	$pdf->SetXY(102,72);
	$pdf->Cell(10,2,'4.For Official Use ');
	$pdf->Line(8,100,8,170);
	$pdf->SetXY(10,102);
	
	$pdf->Cell(10,2,'5. Item');
	$pdf->SetXY(10,106);
	$pdf->Cell(10,2,'number');
	$pdf->Line(24,100,24,170);
	$pdf->SetXY(26,102);
	$pdf->Cell(10,2,'6. Marks and');
	$pdf->SetXY(26,106);
	$pdf->Cell(10,2,'Number of');
	$pdf->SetXY(26,110);
	$pdf->Cell(10,2,'Packages');
	$pdf->SetXY(26,118);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,2,$rows['marksandnos']);
	$pdf->SetXY(26,124);
	$pdf->Cell(10,2,$rows['noofpackages']);
	$pdf->SetXY(32,124);
	$pdf->Cell(10,2,$rows['units1']);
	$pdf->SetFont('Arial','',8);
	$pdf->Line(44,100,44,170);
	$pdf->SetXY(46,102);
	$pdf->Cell(10,2,'7.Number and kind of Packages,description of Goods');
	$pdf->SetXY(45,118);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,2,$rows['noofpackages'].$rows['units1']);
	$pdf->SetXY(46,122);
	$pdf->Cell(10,2,$rows['goodsdescription']);
	
	
	
	$pdf->SetFont('Arial','',8);
	$pdf->Line(118,100,118,170);
	$pdf->SetXY(120,102);
	$pdf->Cell(10,2,'8.Origin');
	
	
	
	$pdf->SetXY(120,106);
	$pdf->Cell(10,2,'Criterion');
	
	$pdf->SetXY(120,118);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,2,'A');
	$pdf->SetFont('Arial','',8);
	$pdf->SetXY(120,110);
	$pdf->Cell(10,2,'(see notes');
	$pdf->SetXY(120,114);
	$pdf->Cell(10,2,'Overleaf)');
	$pdf->Line(138,100,138,170);
	$pdf->SetXY(142,102);
	$pdf->Cell(10,2,'9.Gross');
	$pdf->SetXY(142,106);
	$pdf->Cell(10,2,'Weight');
	$pdf->SetXY(142,110);
	$pdf->Cell(10,2,'or Other');
	$pdf->SetXY(142,114);
	$pdf->Cell(10,2,'Quantity');
	$pdf->SetXY(142,118);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,2,$rows['grossweight'].$rows['units2']);
   $pdf->SetFont('Arial','',8);
	
	$pdf->Line(160,100,160,170);
	$pdf->SetXY(162,102);
	$pdf->Cell(10,2,'10. Number and ');
	$pdf->SetXY(162,106);
	$pdf->Cell(10,2,'date of Invoice');
	$pdf->Line(198,100,198,170);
	$pdf->Line(8,170,198,170);
	$pdf->SetXY(8,170);
	$pdf->Cell(90,80,'',1,1);
	$pdf->SetXY(10,174);
	  $pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,2,'11. Certification');
	 $pdf->SetFont('Arial','',8);
	 $pdf->SetXY(10,180);
	 $pdf->Cell(10,2,'hereby certified,on basis of control carried out');
	 $pdf->SetXY(10,184);
	 $pdf->Cell(10,2,'the declaration by exporter is correct');
	 $pdf->SetXY(10,208);
	 $pdf->Cell(10,2,'..................................................................................');
	 $pdf->SetXY(10,216);
	 $pdf->Cell(10,2,'Place and date,stamp and signsature of certifying authority');
	$pdf->SetXY(98,170);
	$pdf->Cell(100,80,'',1,1);
	$pdf->SetXY(100,174);
	  $pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,2,'12. Declaration by exporter');
	 $pdf->SetFont('Arial','',8);
	 $pdf->SetXY(100,180);
	 $pdf->Cell(10,2,'The Undersigned Hereby Declares that the above details');
	 $pdf->SetXY(100,184);
	 $pdf->Cell(10,2,'and statement are correct,and all goods are produced in');
	 $pdf->SetXY(100,194);
	  $pdf->Cell(10,2,'.............................................................................................');
	   $pdf->SetXY(130,198);
	 $pdf->Cell(10,2,'(Country)');
	 $pdf->SetXY(100,202);
	  $pdf->Cell(10,2,'and the comply with origin requuirements specified for');
	   $pdf->SetXY(100,206);
	   $pdf->Cell(10,2,'those goods in Generalised System Of Preferences For');
	   $pdf->SetXY(100,210);
	   $pdf->Cell(10,2,'goods exported to');
	   $pdf->SetXY(100,218);
	  $pdf->Cell(10,2,'.............................................................................................');
	   $pdf->SetXY(130,222);
	 $pdf->Cell(10,2,'( Importing Country)');
	 $pdf->SetXY(100,238);
	  $pdf->Cell(10,2,'.............................................................................................');
	  $pdf->SetXY(110,242);
	 $pdf->Cell(10,2,'place and date and signature of authorised signatory');
	  
}
$gs=$_POST['docketno']."gsp";
$pdf->Output('D',$gs.'.pdf');
?>