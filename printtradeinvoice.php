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
$pdf->SetXY(90,20);
$pdf->Cell(10,1,'903-905, 9th floor mayuresh,cosmos sector-11 CBD Belpur,Navi Mumbai ,MUMBAI,Maharashtra,PIN-400614');
$pdf->SetXY(95,30);
$pdf->Cell(10,1,'Ph : +912227574650,27574606 Fax : ,');
$pdf->SetXY(90,40);
$pdf->Cell(10,1,'E-mail : seamum@amritind.com,actsmum@amritind.com');
}
else if($_SESSION["branch"]=='Haryana')
{
$pdf->SetXY(90,20);
$pdf->Cell(10,1,'531, 2nd Floor, Hotel Pearl Plaza,Near Naval Cinema, Panipat,Panipat,HARYANA,PIN-132103');
$pdf->SetXY(95,30);
$pdf->Cell(10,1,'Ph : +911804000248,4018655 Fax : ,');
$pdf->SetXY(90,40);
$pdf->Cell(10,1,'E-mail : edi@amritind.com,acts@amritind.com');

}
else if($_SESSION["branch"]=='Ludhiana')
{
$pdf->SetXY(90,20);
$pdf->Cell(10,1,'Room No.75, C-145 A, Bindra Complex,,Focal Point, Phase - V,Ludhiana,PUNJAB,PIN-141010');
$pdf->SetXY(95,30);
$pdf->Cell(10,1,'Ph : +91161-4621522,4646448 Fax : +91161-2676447,');
$pdf->SetXY(90,40);
$pdf->Cell(10,1,'E-mail : infoldh@amritind.com,ratnesh@amritind.com');
}
else if($_SESSION["branch"]=='Uttar pradesh')
{
$pdf->SetXY(90,20);
$pdf->Cell(10,1,'Shop No.3, Block 31, 2nd Floor ,Sanjay Place, Civil Lines,,AGRA,UTTAR PRADESH,PIN-282002');
$pdf->SetXY(95,30);
$pdf->Cell(10,1,'Ph : +915624000320,2851543 Fax : ,');
$pdf->SetXY(90,40);
$pdf->Cell(10,1,'E-mail : infoagr@amritind.com,csuagr@amritind.com');
}
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(100,50);
$pdf->Cell(10,1,'Journal Trade Invoice');
$sql="Select * From tradevoucher where invoiceno='$_POST[invoiceno1]'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
$pdf->SetFont('Arial','B',10);	
$pdf->SetXY(10,60);
$pdf->SetDrawColor(74,66,65);
$pdf->Cell(50,10,'Voucher No:'.$row['voucherno'],1,1,'');
$pdf->SetXY(60,60);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,60);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,60);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,60);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(210,60);
$pdf->Cell(40,10,'Date:'.$row['voucherdate'],1,1);
$pdf->SetXY(10,70);
$pdf->Cell(50,20,'Account Details',1,1);
$pdf->SetXY(60,70);
$pdf->Cell(40,20,'Pay To',1,1);
$pdf->SetXY(100,70);
$pdf->Cell(30,20,'Chq/DD No',1,1);
$pdf->SetXY(130,70);
$pdf->Cell(40,20,'CHq/DD Date',1,1);
$pdf->SetXY(170,70);
$pdf->Cell(40,20,'Debit(Amount In INR)',1,1);
$pdf->SetXY(210,70);
$pdf->Cell(40,20,'Credit(Amount In INR)',1,1);
}
$sqla="Select distinct payreceive from tradevoucher where invoiceno='$_POST[invoiceno1]'";
$resulta=mysqli_query($conn,$sqla);
while($rowa=mysqli_fetch_array($resulta)){
if($rowa['payreceive']=="Payable")
{
	

$y=$pdf->getY();
$pdf->SetFont('Arial','',8);
$sql1="Select * From billtradevoucher where invoiceno='$_POST[invoiceno1]'";
$result1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($result1)){
$pdf->SetXY(10,$y);
$pdf->Cell(50,10,$row1['debitaccount'],1,1);
$pdf->SetXY(60,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,$y);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,$y);
$pdf->Cell(40,10,$row1["debit"],1,1);
$pdf->SetXY(210,$y);
$pdf->Cell(40,10,"0.00",1,1);
$y=$y+10;
}
$pdf->SetFont('Arial','',8);
$sql2="Select distinct creditaccount  From billtradevoucher where invoiceno='$_POST[invoiceno1]'";
$result2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_array($result2)){
$pdf->SetXY(10,$y);
$pdf->Cell(50,10,$row2['creditaccount'],1,1);
$pdf->SetXY(60,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,$y);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,$y);
$pdf->Cell(40,10,"0.00",1,1);
$pdf->SetXY(210,$y);
$sqlc="Select sum(credit) as sumamt from billtradevoucher where invoiceno='$_POST[invoiceno1]'";
$resultc=mysqli_query($conn,$sqlc);
while($row2=mysqli_fetch_array($resultc)){
$pdf->SetXY(210,$y);
$sum=$row2['sumamt'];
$pdf->Cell(40,10,$row2['sumamt'],1,1);}
$y=$y+10;}
$sql3="Select * From billtradevoucher where invoiceno='$_POST[invoiceno1]'";
$result3=mysqli_query($conn,$sql3);
while($row3=mysqli_fetch_array($result3)){
$pdf->SetXY(10,$y);
$pdf->Cell(50,10,$row3['cgstaccount'],1,1);
$pdf->SetXY(60,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,$y);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,$y);
$pdf->Cell(40,10,$row3['cgstamount'],1,1);
$pdf->SetXY(210,$y);
$pdf->Cell(40,10,"0.00",1,1);
$y=$y+10;
$pdf->SetXY(10,$y);
$pdf->Cell(50,10,$row3['sgstaccount'],1,1);
$pdf->SetXY(60,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,$y);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,$y);
$pdf->Cell(40,10,$row3['sgstamount'],1,1);
$pdf->SetXY(210,$y);
$pdf->Cell(40,10,"0.00",1,1);
$y=$y+10;
$pdf->SetXY(10,$y);
$pdf->Cell(50,10,$row3['igstaccount'],1,1);
$pdf->SetXY(60,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,$y);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,$y);
$pdf->Cell(40,10,$row3['igstamount'],1,1);
$pdf->SetXY(210,$y);
$pdf->Cell(40,10,"0.00",1,1);
$y=$y+10;
}

}
else
{
	
$y=$pdf->getY();
$pdf->SetFont('Arial','',8);
$sql1="Select * From billtradevoucher where invoiceno='$_POST[invoiceno1]'";
$result1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($result1)){
$pdf->SetXY(10,$y);
$pdf->Cell(50,10,$row1['creditaccount'],1,1);
$pdf->SetXY(60,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,$y);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,$y);
$pdf->Cell(40,10,"0.00",1,1);
$pdf->SetXY(210,$y);
$pdf->Cell(40,10,$row1['credit'],1,1);
$y=$y+10;
}
$pdf->SetFont('Arial','',8);
$sql2="Select distinct debitaccount  From billtradevoucher where invoiceno='$_POST[invoiceno1]'";
$result2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_array($result2)){
$pdf->SetXY(10,$y);
$pdf->Cell(50,10,$row2['debitaccount'],1,1);
$pdf->SetXY(60,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,$y);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,$y);
$sqlc="Select sum(debit) as sumamt from billtradevoucher where invoiceno='$_POST[invoiceno1]'";
$resultc=mysqli_query($conn,$sqlc);
while($row2=mysqli_fetch_array($resultc)){
$pdf->SetXY(210,$y);
$a=$row2['sumamt'];
$pdf->Cell(40,10,$row2['sumamt'],1,1);}

$pdf->SetXY(210,$y);
$pdf->Cell(40,10,"0.00",1,1);
$y=$y+10;}
$sql3="Select * From billtradevoucher where invoiceno='$_POST[invoiceno1]'";
$result3=mysqli_query($conn,$sql3);
while($row3=mysqli_fetch_array($result3)){
$pdf->SetXY(10,$y);
$pdf->Cell(50,10,$row3['cgstaccount'],1,1);
$pdf->SetXY(60,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,$y);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,$y);
$pdf->Cell(40,10,"0.00",1,1);
$pdf->SetXY(210,$y);
$pdf->Cell(40,10,$row3['cgstamount'],1,1);
$y=$y+10;
$pdf->SetXY(10,$y);
$pdf->Cell(50,10,$row3['sgstaccount'],1,1);
$pdf->SetXY(60,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,$y);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,$y);
$pdf->Cell(40,10,"0.00",1,1);
$pdf->SetXY(210,$y);
$pdf->Cell(40,10,$row3['sgstamount'],1,1);
$y=$y+10;
$pdf->SetXY(10,$y);
$pdf->Cell(50,10,$row3['igstaccount'],1,1);
$pdf->SetXY(60,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(100,$y);
$pdf->Cell(30,10,'',1,1);
$pdf->SetXY(130,$y);
$pdf->Cell(40,10,'',1,1);
$pdf->SetXY(170,$y);
$pdf->Cell(40,10,"0.00",1,1);
$pdf->SetXY(210,$y);
$pdf->Cell(40,10,$row3['igstamount'],1,1);
$y=$y+10;
}
}
$pdf->SetFont("Arial","B",8);
$pdf->SetXY(170,$y);
$pdf->Cell(10,2,$sum);
$pdf->SetXY(210,$y);
$pdf->Cell(10,2,$sum);
$y=$y+4;
$pdf->SetXY(10,$y);
$pdf->Cell(10,2,"Amount");
$amt=convertToIndianCurrency($sum);
$pdf->SetXY(40,$y);
$pdf->Cell(10,2,$amt);
$y=$y+4;
$pdf->SetXY(10,$y);
$pdf->Cell(10,2,"Narration:");
$sql3="Select distinct narration From billtradevoucher where invoiceno='$_POST[invoiceno1]'";
$result3=mysqli_query($conn,$sql3);
while($row3=mysqli_fetch_array($result3)){
$pdf->SetXY(10,$y);
$pdf->Cell(10,2,$row3['narration']);
}
}

$pdf->Output();
?>