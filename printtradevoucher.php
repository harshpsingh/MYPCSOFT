<?php
session_start();
require('fpdf.php');

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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accountmaster";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Database connection error");}
$pdf = new FPDF();
$pdf->AddPage('L','A4');
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(90,10);
$pdf->SetTextColor(33,33,71);
$pdf->Cell(10,1,'AMRIT SEAIR EXPRESS PVT.LTD.');

$pdf->SetFont('Arial','',10);
if($_SESSION["branch"]=='New Delhi')
{
	$pdf->SetXY(80,20);
$pdf->Cell(10,1,'224, Sant   Nagar,  East  Of   Kailash  ,New  Delhi,  PIN- 110065');
$pdf->SetXY(95,30);
$pdf->Cell(10,1,'Ph : 01146111777 Fax : 01125061701 ,');
$pdf->SetXY(90,40);
$pdf->Cell(10,1,'E-mail : edi@amritind.com,acts@amritind.com');
}
else if($_SESSION["branch"]=='Mumbai')
{
$pdf->SetXY(60,20);
$pdf->Cell(10,1,'903-905, 9th floor mayuresh,cosmos sector-11 CBD Belpur,Navi Mumbai ,MUMBAI,Maharashtra,PIN-400614');
$pdf->SetXY(95,30);
$pdf->Cell(10,1,'Ph : +912227574650,27574606 Fax : ,');
$pdf->SetXY(90,40);
$pdf->Cell(10,1,'E-mail : seamum@amritind.com,actsmum@amritind.com');
}
else if($_SESSION["branch"]=='Haryana')
{
$pdf->SetXY(60,20);
$pdf->Cell(10,1,'531, 2nd Floor, Hotel Pearl Plaza,Near Naval Cinema, Panipat,Panipat,HARYANA,PIN-132103');
$pdf->SetXY(95,30);
$pdf->Cell(10,1,'Ph : +911804000248,4018655 Fax : ,');
$pdf->SetXY(90,40);
$pdf->Cell(10,1,'E-mail : edi@amritind.com,acts@amritind.com');

}
else if($_SESSION["branch"]=='Ludhiana')
{
$pdf->SetXY(60,20);
$pdf->Cell(10,1,'Room No.75, C-145 A, Bindra Complex,,Focal Point, Phase - V,Ludhiana,PUNJAB,PIN-141010');
$pdf->SetXY(95,30);
$pdf->Cell(10,1,'Ph : +91161-4621522,4646448 Fax : +91161-2676447,');
$pdf->SetXY(90,40);
$pdf->Cell(10,1,'E-mail : infoldh@amritind.com,ratnesh@amritind.com');
}
else if($_SESSION["branch"]=='Uttar pradesh')
{
$pdf->SetXY(60,20);
$pdf->Cell(10,1,'Shop No.3, Block 31, 2nd Floor ,Sanjay Place, Civil Lines,,AGRA,UTTAR PRADESH,PIN-282002');
$pdf->SetXY(95,30);
$pdf->Cell(10,1,'Ph : +915624000320,2851543 Fax : ,');
$pdf->SetXY(90,40);
$pdf->Cell(10,1,'E-mail : infoagr@amritind.com,csuagr@amritind.com');
}
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(110,50);
$pdf->Cell(10,1,'Journal Trade Invoice');
$sql="Select * From tradevoucher where voucherno='$_POST[voucherno]'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
$pdf->SetFont('Arial','B',10);	
$pdf->SetXY(10,60);
$pdf->SetDrawColor(74,66,65);
$pdf->Cell(70,10,'Voucher No:'.$row['voucherno'],1,1,'');
$pdf->SetXY(80,60);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(120,60);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(150,60);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(180,60);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(220,60);
$pdf->Cell(40,10,'Date:'.$row['voucherdate'],1,1);
$pdf->SetXY(10,70);
$pdf->Cell(70,20,'Account Details',1,1);
$pdf->SetXY(80,70);
$pdf->Cell(40,20,'Pay To',1,1);
$pdf->SetXY(120,70);
$pdf->Cell(30,20,'Chq/DD No',1,1);
$pdf->SetXY(150,70);
$pdf->Cell(30,20,'CHq/DD Date',1,1);
$pdf->SetXY(180,70);
$pdf->Cell(40,20,'Debit(Amount In INR)',1,1);
$pdf->SetXY(220,70);
$pdf->Cell(40,20,'Credit(Amount In INR)',1,1);}
$y=$pdf->getY();
$y=$y+3;

$pdf->SetFont('Arial','',8);
$sql1="Select * From tradevouchercharges where voucherno='$_POST[voucherno]'";
$result1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($result1)){
$sql="Select * From tradevoucher where voucherno='$_POST[voucherno]'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
$pdf->SetXY(10,$y);
$pdf->Cell(70,10,$row1['accountname'],1,1);
$pdf->SetFont('Arial','',10);

$pdf->SetXY(80,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(120,$y);
$pdf->Cell(30,10,$row['chequeno'],1,1);
$pdf->SetXY(150,$y);
$pdf->Cell(30,10,$row['voucherdate'],1,1);
$pdf->SetXY(180,$y);
$pdf->Cell(40,10,$row1['debitamount'],1,1);
$pdf->SetXY(220,$y);
$pdf->Cell(40,10,$row1['creditamount'],1,1);

$y=$y+10;
}
}
$y=$y+5;
$sql2="Select sum(debitamount) as sumdebit From tradevouchercharges where voucherno='$_POST[voucherno]'";
$result2=mysqli_query($conn,$sql2);	
while($row2=mysqli_fetch_array($result2)){
$y=$y+4;
$pdf->SetXY(180,$y);
$pdf->Cell(40,10,$row2['sumdebit'],0,1);
$pdf->SetXY(220,$y);
$pdf->Cell(40,10,$row2['sumdebit'],0,1);
$y=$y+4;

$pdf->SetXY(10,$y);
$pdf->Cell(10,1,'Amount:');
$amt=convertToIndianCurrency($row2['sumdebit']);
$pdf->SetXY(30,$y);
$pdf->Cell(10,1,$amt);
$y-$y+2;

}
$y=$y+5;
$sql="Select * From tradevoucher where voucherno='$_POST[voucherno]'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
$pdf->SetFont('Arial','B',10);
$pdf->SetXY(10,$y);
$pdf->Cell(10,1,'Narration');
$pdf->SetXY(30,$y);
$pdf->Cell(10,1,$row['narration']);	

}
$pdf->Output();
?>