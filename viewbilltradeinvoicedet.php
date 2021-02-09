<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","accountmaster");
echo "<table>";
echo "<tr>";
echo "<th>voucherno</th>";
echo "<th>voucherdate</th>";
echo "<th>invoiceno</th>";
echo "<th>docketno</th>";
echo "<th>debitaccount</th>";
echo "<th>debitamount</th>";
echo "<th>creditaccount</th>";
echo "<th>creditamount</th>";
echo "<th>gstaccount</th>";
echo "<th>gstamount</th>";


echo "</tr>";
$sql="Select  distinct tradevoucher.voucherno,tradevoucher.voucherdate,tradevoucher.invoiceno,tradevoucher.docketno,tradevoucher.payreceive from accountmaster.billtradevoucher join accountmaster.tradevoucher where billtradevoucher.invoiceno=tradevoucher.invoiceno and billtradevoucher.invoiceno='".$_POST["invoiceno1"]."'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result)){
	echo "<td>".$row["voucherno"]."</td>";
	echo "<td>".$row["voucherdate"]."</td>";
echo "<td>".$row["invoiceno"]."</td>";
echo "<td>".$row["docketno"]."</td>";
if($row["payreceive"]=="Payable")
{
	$sql1="Select debitaccount,debit from billtradevoucher where invoiceno='".$_POST["invoiceno1"]."'";
     $result1=mysqli_query($conn,$sql1);
	$a="";
   $b="";
  $c="";
  $d="";
  
   
  
   while($row1=mysqli_fetch_array($result1)){
	$a=$a.$row1["debitaccount"].";";
	$b=$b.$row1["debit"].";";
	
	
   }
   echo "<td>".$a."</td>";
echo "<td>".$b."</td>";
   $sql2="Select distinct creditaccount from billtradevoucher where invoiceno='".$_POST["invoiceno1"]."'";
   $result2=mysqli_query($conn,$sql2);
   while($row2=mysqli_fetch_array($result2)){
$c=$c.$row2["creditaccount"].";";
   }
   echo "<td>".$c."</td>";

$sql3="Select sum(credit) as sumamt from billtradevoucher  where invoiceno='".$_POST["invoiceno1"]."'";
$result3=mysqli_query($conn,$sql3);
while($row3=mysqli_fetch_array($result3)){
	$d=$d.$row3["sumamt"].";";
}
 echo "<td>".$d."</td>";
 
  
  
 

}

 else {
$a="";
   $b="";
  $c="";
  $d="";
  
 

$sql1="Select distinct debitaccount from billtradevoucher where invoiceno='".$_POST["invoiceno1"]."'";
   $result2=mysqli_query($conn,$sql2);
   while($row2=mysqli_fetch_array($result2)){
$c=$c.$row2["creditaccount"].";";
   }
   echo "<td>".$a."</td>";

$sql2="Select sum(debit) as sumamt from billtradevoucher  where invoiceno='".$_POST["invoiceno1"]."'";
$result3=mysqli_query($conn,$sql3);
while($row3=mysqli_fetch_array($result3)){
	$b=$b.$row3["sumamt"].";";
}
 echo "<td>".$b."</td>";


	$sql1="Select creditaccount,credit from billtradevoucher where invoiceno='".$_POST["invoiceno1"]."'";
     $result1=mysqli_query($conn,$sql1);
	
   while($row1=mysqli_fetch_array($result1)){
	$c=$c.$row1["creditaccount"].";";
	$d=$d.$row1["debit"].";";
	
	
   }
    echo "<td>".$c."</td>";
	 echo "<td>".$d."</td>";
}
$e="";
$f="";
$sql4="Select  * from billtradevoucher  where invoiceno='".$_POST["invoiceno1"]."'";
$result4=mysqli_query($conn,$sql4);
while($row4=mysqli_fetch_array($result4)){

	 $e=$e.$row4["cgstaccount"].";".$row4["sgstaccount"].";".$row4["igstaccount"].";";
	 $f=$f.$row4["cgstamount"].";".$row4["sgstamount"].";".$row4["igstamount"].";";
 }
  echo "<td>".$e."</td>";
  echo "<td>".$f."</td>";
}

echo "</tr>";
echo "</table>";
?>
</body>
</head>
</html>