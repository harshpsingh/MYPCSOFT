<?php
require('fpdf.php');
session_start();
function convertToIndianCurrency($number) {
    $no = round($number);
    $decimal = round($number - ($no = floor($number)), 2) * 100;    
    $digits_length = strlen($no);    
    $i = 0;
    $str = array();
    $words = array(
        0 => '',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine',
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
        20 => 'Twenty',
        30 => 'Thirty',
        40 => 'Forty',
        50 => 'Fifty',
        60 => 'Sixty',
        70 => 'Seventy',
        80 => 'Eighty',
        90 => 'Ninety');
    $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore','arab','kharab');
    while ($i < $digits_length) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;            
            $str [] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural;
        } else {
            $str [] = null;
        }  
    }
    
    $Rupees = implode(' ', array_reverse($str));
    $paise = ($decimal) ? "And Paise " . ($words[$decimal - $decimal%10]) ." " .($words[$decimal%10])  : '';
    return ($Rupees ? 'Rupees ' . $Rupees : '') . $paise . " Only";
	
	
}
	$pdf = new FPDF();
    $pdf->AddPage('P','a4');
	
	  $pdf->Image('logo.png',20,2,160,40);
	$pdf->SetXY(10,20);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(10,44,'Multimodal Transport Operator, International Freight Forewarders & Cargo Consolidators');
	$pdf->SetXY(10,48);
	$pdf->Cell(10,5,'Regd.MTO NO.:MTO/DGS/162/98 WITH D.G. SHIPPING. MUMBAI');
	$pdf->SetXY(150,46);
	$pdf->SetFont('Arial','B',10);
    $pdf->Cell(10,5,'GSTIN No. : 07AAACA6571B1Z2');	
	$pdf->SetXY(8,54);
	$pdf->Cell(200,15,'',1);
	$pdf->SetXY(80,58);
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(50,5,'TAX INVOICE');
	$pdf->SetFont('Arial','B',10);
	$pdf->SetXY(160,56);
	$pdf->Cell(10,2,'Original For Receipient');
	$pdf->SetXY(160,60);
	$pdf->Cell(10,2,'Duplicate');
	$pdf->SetXY(160,64);
	$pdf->Cell(10,2,'Triplicate');
	$pdf->Line(80,70,80,150);
	$servername = "localhost";
   $username = "root";
   $password = "";
    $dbname = "exportair";
	

	$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Database connection error");}
$sql="Select * from shipmentregister where docketno='$_SESSION[docketno]' and branch='$_SESSION[branch]'and fy='$_SESSION[fy]'";




$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	
	$pdf->SetXY(10,72);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'Bill To:');
	$pdf->SetXY(22,72);
	$pdf->Cell(10,1,$rows['exportername']);
	$pdf->SetFont('Arial','',10);
	$pdf->SetXY(10,76);
	$exporteraddress=explode(',',$rows['exporteraddress']);
	$pdf->Cell(10,1,$exporteraddress[0].$exporteraddress[1]);
	$pdf->SetXY(10,80);
	$pdf->Cell(10,1,$exporteraddress[2].$exporteraddress[4].$exporteraddress[3].$exporteraddress[5]);
    $pdf->SetXY(10,116);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,1,'GSTIN NO:');$pdf->SetXY(12,120);
	$pdf->Cell(10,2,'State:');
	$pdf->SetXY(12,125);
	$pdf->Cell(10,2,'Code:');
	
	$conn1=mysqli_connect($servername,$username,$password,'master');
	$sqla="Select * from exporter where exportername='$rows[exportername]'";




$resulta=mysqli_query($conn1,$sqla);
while($rowsa=mysqli_fetch_array($resulta)){
	$pdf->SetXY(30,115);
	$pdf->Cell(10,1,$rowsa['gstin']);

	$pdf->SetXY(30,120);
	$pdf->Cell(10,1,$rowsa['gststatename']);
	$pdf->SetXY(30,125);
	$pdf->Cell(10,1,$rowsa['gststatecode']);
	
	
}
	
	
}
$sql1="Select * from serviceinvoice where docketno='$_SESSION[docketno]' and branch='$_SESSION[branch]'and fy='$_SESSION[fy]'";
$result1=mysqli_query($conn,$sql1);
while($rows1=mysqli_fetch_array($result1)){
	$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(80,72);
		$pdf->Cell(10,1,'Bill No:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(94,72);
		$pdf->Cell(10,1,$rows1['billno']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(130,72);
		$pdf->Cell(10,1,'Bill Date:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(150,72);
		$pdf->Cell(10,1,$rows1['billdate']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(80,78);
		$pdf->Cell(10,1,'Job No:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(94,78);
		$pdf->Cell(10,1,$rows1['docketno']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(130,78);
		$pdf->Cell(10,1,'Category:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(150,78);
		$pdf->Cell(10,1,$rows1['category']);
		$sql="Select * from shipmentregister where docketno='$_SESSION[docketno]' and branch='$_SESSION[branch]'and fy='$_SESSION[fy]'";




$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	
	$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(80,84);
		$pdf->Cell(10,1,'AWB No:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(94,84);
		$pdf->Cell(10,1,$rows['mawbblno']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(130,84);
		$pdf->Cell(10,1,'Date:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(150,84);
		$pdf->Cell(10,1,$rows['mawbbldate']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(80,90);
		$pdf->Cell(10,1,'HAWB No:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(94,90);
		$pdf->Cell(10,1,$rows['hawbblno']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(130,90);
		$pdf->Cell(10,1,'Date:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(150,90);
		$pdf->Cell(10,1,$rows['hawbbldate']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(80,98);
		$pdf->Cell(10,1,'Origin:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(94,98);
		$pdf->Cell(10,1,$rows['originport']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(130,98);
		$pdf->Cell(10,1,'DSTN:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(150,98);
		$pdf->Cell(10,1,$rows['destinationport']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(80,104);
		$pdf->Cell(10,1,'Wt:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(94,104);
		$pdf->Cell(10,1,$rows['grossweight']);
		
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(80,120);
		$pdf->Cell(10,1,'Shipper:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(94,120);
		$pdf->Cell(10,1,$rows['exportername']);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(130,120);
		$pdf->Cell(10,1,'PKGS:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(150,120);
		$pdf->Cell(10,1,$rows['noofpackages']);
		
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(80,126);
		$pdf->Cell(10,1,'Place Of Supply:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(94,126);
		$pdf->Cell(10,1,$rows['placeofsupply']);
}

		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(80,110);
		$pdf->Cell(10,1,'Inv no:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(94,110);
		$pdf->Cell(10,1,$rows1['invoiceno']);
		
		$pdf->SetFont('Arial','B',10);
		$pdf->SetXY(130,110);
		$pdf->Cell(10,1,'Inv Date:');
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(150,110);
		$pdf->Cell(10,1,$rows1['invoicedate']);
}
	
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(8,148);
$pdf->SetFillColor(201,186,185);
$pdf->Cell(30,10,'Particulars',1,1,'C',1);
$pdf->SetXY(38,148);
$pdf->Cell(15,10,'HSN Code',1,1,'Ç',1);
$pdf->SetXY(53,148);
$pdf->Cell(12,10,'FC',1,1,'C',1);
$pdf->SetXY(65,148);
$pdf->Cell(15,10,'FC Rate',1,1,'C',1);
$pdf->SetXY(80,148);
$pdf->Cell(12,10,'Qty',1,1,'C',1);
$pdf->SetXY(92,148);
$pdf->Cell(15,10,'Rate',1,1,'C',1);
$pdf->SetXY(107,148);
$pdf->Cell(16,10,'Amt',1,1,'C',1);
$pdf->SetXY(123,148);
$pdf->Cell(15,10,'Dis.',1,1,'C',1);
$pdf->SetXY(138,148);
$pdf->Cell(16,10,'Tax Amt.',1,1,'C',1);
$pdf->SetXY(154,148);
$pdf->Cell(18,10,'CGST',1,1,'C',1);
$pdf->SetXY(172,148);
$pdf->Cell(18,10,'SGST',1,1,'C',1);
$pdf->SetXY(190,148);
$pdf->Cell(18,10,'IGST',1,1,'C',1);
$pdf->SetXY(8,158);
$pdf->Cell(30,10,'',1,1,'C',1);
$pdf->SetXY(38,158);
$pdf->Cell(15,10,'',1,1,'Ç',1);
$pdf->SetXY(53,158);
$pdf->Cell(12,10,'',1,1,'C',1);
$pdf->SetXY(65,158);
$pdf->Cell(15,10,'',1,1,'C',1);
$pdf->SetXY(80,158);
$pdf->Cell(12,10,'',1,1,'C',1);
$pdf->SetXY(92,158);
$pdf->Cell(15,10,'',1,1,'C',1);
$pdf->SetXY(107,158);
$pdf->Cell(16,10,'',1,1,'C',1);
$pdf->SetXY(123,158);
$pdf->Cell(15,10,'',1,1,'C',1);
$pdf->SetXY(138,158);
$pdf->Cell(16,10,'',1,1,'C',1);
$pdf->SetXY(154,158);
$pdf->Cell(8,10,'Rate',1,1,'C',1);
$pdf->SetXY(162,158);
$pdf->Cell(10,10,'Amt',1,1,'C',1);
$pdf->SetXY(172,158);
$pdf->Cell(8,10,'Rate',1,1,'C',1);
$pdf->SetXY(180,158);
$pdf->Cell(10,10,'Amt',1,1,'C',1);
$pdf->SetXY(190,158);
$pdf->Cell(8,10,'Rate',1,1,'C',1);
$pdf->SetXY(198,158);
$pdf->Cell(10,10,'Amt',1,1,'C',1);

$pdf->SetXY(8,168);

$sql2="Select * From eainvoicecharge where docketno='$_POST[docketno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result2=mysqli_query($conn,$sql2);
while($rows2=mysqli_fetch_array($result2)){
	$pdf->SetFont('Arial','',8);
	$y=$pdf->getY();
	$pdf->SetXY(8,$y);
	$pdf->Cell(30,10,$rows2['chargename'],1,1);
	$pdf->SetXY(38,$y);
	$pdf->Cell(15,10,$rows2['hsncode'],1,1);
	$pdf->SetXY(53,$y);
	$pdf->Cell(12,10,$rows2['currencyname'],1,1);
	$pdf->SetXY(65,$y);
	$pdf->Cell(15,10,$rows2['exchangerate'],1,1);
	$pdf->SetXY(80,$y);
	$pdf->Cell(12,10,$rows2['quantity'],1,1);
	$pdf->SetXY(92,$y);
	$pdf->Cell(15,10,$rows2['rate'],1,1);
	$pdf->SetXY(107,$y);
	$pdf->Cell(16,10,$rows2['amount'],1,1);
	$pdf->SetXY(123,$y);
	$pdf->Cell(15,10,$rows2['discount'],1,1);
	$pdf->SetXY(138,$y);
	$pdf->Cell(16,10,$rows2['amount']-$rows2['discount'],1,1);
    $pdf->SetXY(154,$y);
	$pdf->Cell(8,10,$rows2['cgstrate'],1,1);
	$pdf->SetXY(162,$y);
	$pdf->Cell(10,10,$rows2['cgstrate']*($rows2['amount']-$rows2['discount']),1,1);
	$pdf->SetXY(172,$y);
	$pdf->Cell(8,10,$rows2['sgstrate'],1,1);
	$pdf->SetXY(180,$y);
	$pdf->Cell(10,10,$rows2['sgstrate']*($rows2['amount']-$rows2['discount']),1,1);
	$pdf->SetXY(190,$y);
	$pdf->Cell(8,10,$rows2['igstrate'],1,1);
	$pdf->SetXY(198,$y);
	$pdf->Cell(10,10,$rows2['igstrate']*($rows2['amount']-$rows2['discount']),1,1);
	$y=$y+10;

}
$sql3="Select sum(amount) as sumamount,sum(amount-discount) as sumtaxamount,sum(cgstrate*(amount-discount)) as sumcgstamount,sum(sgstrate*(amount-discount)) as sumsgstamount,sum(igstrate*(amount-discount)) as sumigstamount from eainvoicecharge where docketno='$_POST[docketno]' and branch='$_POST[branch]'and fy='$_POST[fy]'";
$result3=mysqli_query($conn,$sql3);
while($rows3=mysqli_fetch_array($result3)){
	$pdf->SetFont('Arial','B',8);
	$y=$pdf->getY();
$pdf->SetXY(8,$y);
$pdf->Cell(30,10,'Total amount:',1,1,'C',1);
$pdf->SetXY(38,$y);
$pdf->Cell(15,10,'',1,1,'C',1);
$pdf->SetXY(53,$y);
$pdf->Cell(12,10,'',1,1,'C',1);
$pdf->SetXY(65,$y);
$pdf->Cell(15,10,'',1,1,'C',1);
$pdf->SetFont('Arial','',8);
$pdf->SetXY(80,$y);
$pdf->Cell(12,10,'',1,1,'C',1);
$pdf->SetXY(92,$y);
$pdf->Cell(15,10,'',1,1,'C',1);
$pdf->SetXY(107,$y);
$pdf->Cell(16,10,$rows3['sumamount'],1,1,'C',1);
$pdf->SetXY(123,$y);
$pdf->Cell(15,10,'',1,1,'C',1);
$pdf->SetXY(138,$y);
$pdf->Cell(16,10,$rows3['sumtaxamount'],1,1,'C',1);
$pdf->SetXY(154,$y);
$pdf->Cell(8,10,'',1,1,'C',1);
$pdf->SetXY(162,$y);
$pdf->Cell(10,10,$rows3['sumcgstamount'],1,1,'C',1);
$pdf->SetXY(172,$y);
$pdf->Cell(8,10,'',1,1,'C',1);
$pdf->SetXY(180,$y);
$pdf->Cell(10,10,$rows3['sumsgstamount'],1,1,'C',1);
$pdf->SetXY(190,$y);
$pdf->Cell(8,10,'',1,1,'C',1);
$pdf->SetXY(198,$y);
$pdf->Cell(10,10,$rows3['sumigstamount'],1,1,'C',1);
$y=$y+20;
$pdf->SetXY(10,$y);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,1,'Total IGST Amount');
$pdf->SetXY(50,$y);
$pdf->Cell(10,1,$rows3['sumigstamount']);
$pdf->SetXY(70,$y);
$pdf->Cell(10,1,'Total Invoice amount/');
$pdf->SetXY(107,$y);
$pdf->Cell(10,1,$rows3['sumtaxamount']+$rows3['sumigstamount']+$rows3['sumsgstamount']+$rows3['sumcgstamount']);
$y=$y+6;
$pdf->SetXY(10,$y);
$pdf->Cell(10,1,'Total Sgst Amount');
$pdf->SetXY(50,$y);
$pdf->Cell(10,1,$rows3['sumsgstamount']);
$y=$y+6;
$pdf->SetXY(10,$y);
$pdf->Cell(10,1,'Total Cgst Amount');
$pdf->SetXY(50,$y);
$pdf->Cell(10,1,$rows3['sumcgstamount']);
$y=$y+6;
$pdf->SetXY(10,$y);
$pdf->Cell(10,1,'INR');
$amt=convertToIndianCurrency($rows3['sumtaxamount']+$rows3['sumigstamount']+$rows3['sumsgstamount']+$rows3['sumcgstamount']);
$pdf->SetXY(20,$y);
$pdf->Cell(10,1,$amt);

}
$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
	$y=$y+6;
	$pdf->SetXY(10,$y);
	$pdf->Cell(10,1,'Remarks');
	$pdf->SetXY(30,$y);
	$pdf->Cell(10,1,$rows['remarks']);
	
}
$y=$y+6;
$pdf->SetXY(10,$y);
$pdf->Cell(10,1,'Spl Note');
$pdf->SetFont('Arial','',8);
$pdf->SetXY(25,$y);
$pdf->Cell(10,1,'1. FMC Regd. No. :');
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(50,$y);
$pdf->Cell(10,1,'024942');
$pdf->SetXY(150,$y);
$pdf->Cell(10,1,'For Amrit Seair Express Only');
$y=$y+4;
$pdf->SetXY(25,$y);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,1,'2. Pan No:');
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(50,$y);
$pdf->Cell(10,1,'AAACA6571B');
$y=$y+4;
$pdf->SetXY(25,$y);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,1,'3. CIN No:');
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(50,$y);
$pdf->Cell(10,1,'U63013DL1996PTC076238');
$pdf->SetXY(160,$y);
$pdf->Cell(10,1,'Authorised Signatory');
$y=$y+4;
$pdf->SetXY(25,$y);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,1,'4. Any discrepany in this bill must be reported back within 3 days failing which we will not accept any DEBIT against this bill later on.');
$y=$y+4;
$pdf->SetXY(25,$y);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,1,'5. Intrest @ 24% per annum is chargeable on bill, If not paid on presentation.');
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(160,$y);
$pdf->Cell(10,1,'E.OE');
$y=$y+4;
$pdf->SetXY(25,$y);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,1,'6. Payment to be made by crossed cheque/draft only in favour of Amrit Seair Express Pvt. Ltd');
	$pdf->output();
	?>