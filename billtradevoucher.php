<html>
<?php
session_start();

$_SESSION['division']=$_POST["division"];
?>
<head>
<button><a href="logout.php">Logout</a></button>
<button><a href="gsttradeinvoice.php">GST TRADE Invoice</a></button>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script>
  function getinvoice(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('invoiceno');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var voucherno = document.getElementById('voucherno').value;
			   
              
               var queryString = "?voucherno=" + voucherno ;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_tradeinvoiceno.php" + queryString, true);
               ajaxRequest.send(null); 
            }
	function getvoucherdate(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('voucherdate');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var voucherno = document.getElementById('voucherno').value;
			   
              
               var queryString = "?voucherno=" + voucherno ;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_tradevoucherdate.php" + queryString, true);
               ajaxRequest.send(null); 
            }
function getpaymentstatus(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('payreceive');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var invoiceno = document.getElementById('invoiceno').value;
			   
              
               var queryString = "?invoiceno=" + invoiceno ;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_tradepayreceive.php" + queryString, true);
               ajaxRequest.send(null); 
            }
	function getdocketno(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('docketno');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var invoiceno = document.getElementById('invoiceno').value;
			   
              
               var queryString = "?invoiceno=" + invoiceno ;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_tradedocketno.php" + queryString, true);
               ajaxRequest.send(null); 
            }
function getpartyname(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('partyname');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var invoiceno = document.getElementById('invoiceno').value;
			   
              
               var queryString = "?invoiceno=" + invoiceno ;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_tradepartyname.php" + queryString, true);
               ajaxRequest.send(null); 
            }
	
function getcharges(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('chargename');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var invoiceno = document.getElementById('invoiceno').value;
			   
              
               var queryString = "?invoiceno=" + invoiceno ;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_tradechargename.php" + queryString, true);
               ajaxRequest.send(null); 
            }
function gettradeaccount(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('tradeaccount');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               
			
			   var chargename=  document.getElementById('chargename').value;
			   var payreceive=  document.getElementById('payreceive').value;
              
               
			   
             var  qSt =  "?payreceive=" +payreceive;
               
			   qSt+="&chargename=" + chargename;
			 
			   //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_tradeaccount.php" + qSt, true);
               ajaxRequest.send(null); 
            }
function getamount(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('amount');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var chargename = document.getElementById('chargename').value;
			   var invoiceno = document.getElementById('invoiceno').value;
			   
              
               var queryString = "?invoiceno=" + invoiceno ;
			   queryString+="&chargename=" +chargename;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_tradeamount.php" + queryString, true);
               ajaxRequest.send(null); 
            }
	function getcgstaccount(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('cgstaccount');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               
			
			   var chargename=  document.getElementById('chargename').value;
			   var payreceive=  document.getElementById('payreceive').value;
              
               
			   
             var  qSt =  "?payreceive=" +payreceive;
               
			   qSt+="&chargename=" + chargename;
			 
			   //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_cgstaccount.php" + qSt, true);
               ajaxRequest.send(null); 
            }	
function getcgstamount(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('cgstamount');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var chargename = document.getElementById('chargename').value;
			   var invoiceno = document.getElementById('invoiceno').value;
			   
              
               var queryString = "?invoiceno=" + invoiceno ;
			   queryString+="&chargename=" +chargename;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_cgstamount.php" + queryString, true);
               ajaxRequest.send(null); 
            }
function getsgstaccount(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('sgstaccount');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               
			
			   var chargename=  document.getElementById('chargename').value;
			   var payreceive=  document.getElementById('payreceive').value;
              
               
			   
             var  qSt =  "?payreceive=" +payreceive;
               
			   qSt+="&chargename=" + chargename;
			 
			   //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_sgstaccount.php" + qSt, true);
               ajaxRequest.send(null); 
            }	
function getsgstamount(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('sgstamount');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var chargename = document.getElementById('chargename').value;
			   var invoiceno = document.getElementById('invoiceno').value;
			   
              
               var queryString = "?invoiceno=" + invoiceno ;
			   queryString+="&chargename=" +chargename;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_cgstamount.php" + queryString, true);
               ajaxRequest.send(null); 
            }
function getigstaccount(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('igstaccount');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               
			
			   var chargename=  document.getElementById('chargename').value;
			   var payreceive=  document.getElementById('payreceive').value;
              
               
			   
             var  qSt =  "?payreceive=" +payreceive;
               
			   qSt+="&chargename=" + chargename;
			 
			   //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_igstaccount.php" + qSt, true);
               ajaxRequest.send(null); 
            }	
function getigstamount(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('igstamount');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var chargename = document.getElementById('chargename').value;
			   var invoiceno = document.getElementById('invoiceno').value;
			   
              
               var queryString = "?invoiceno=" + invoiceno ;
			   queryString+="&chargename=" +chargename;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "get_igstamount.php" + queryString, true);
               ajaxRequest.send(null); 
            }
function fetchinvoice(){
	 var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('invoiceno1');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var voucherno1 = document.getElementById('voucherno1').value;
			   
              
               var queryString = "?voucherno1=" + voucherno1 ;
            
               //queryString +=  "&division=" + division //+ "&sex=" + sex;
               ajaxRequest.open("GET", "fetch_invoiceno.php" + queryString, true);
               ajaxRequest.send(null); 
            }
  </script>
<?php

$conn=mysqli_connect("localhost","root","","accountmaster");
$servername = "localhost";
$username = "root";
$password="";	
try {
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt1 = $conn->prepare('select distinct voucherno  from tradevoucher where division=:division and  branch=:branch and fy=:fy');
		$smt1->execute([':division'=>$_SESSION['division'],':branch'=>$_SESSION['branch'],':fy'=>$_SESSION['fy']]);
		$data1 = $smt1->fetchAll();
try {
    $conn = new PDO("mysql:host=$servername;dbname=accountmaster", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
		$smt2 = $conn->prepare('select distinct voucherno  from billtradevoucher where division=:division and  branch=:branch and fy=:fy');
		$smt2->execute([':division'=>$_SESSION['division'],':branch'=>$_SESSION['branch'],':fy'=>$_SESSION['fy']]);
		$data2 = $smt2->fetchAll();
?>
<title>Trade Invoice</title>

<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">Trade Invoice</h3>
<?php


 $branch=$_SESSION["branch"];
$fy=$_SESSION["fy"];
?>
<form method="post">
<div class="row">
<div class="col-md-3">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-3">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="col-md-3">
Division<input type="text" name="division" id="division" readonly value="<?php echo $_SESSION['division'];?>">
</div>

<div class="col-md-3">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div><br>
<div class="row">
<div class="col-md-3">
voucherno<select name="voucherno" id="voucherno" onChange="getinvoice();getvoucherdate(); "> >
<option>Select </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["voucherno"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-3">
Voucherdate<select name="voucherdate" id="voucherdate">
<option>Date</option>
</select>
</div>
<div class="col-md-3">
Invoiceno<select name="invoiceno" id="invoiceno" onChange="getpaymentstatus();getdocketno();getpartyname(); getcharges();">
<option>Select</option>
</select>
</div>
<div class="col-md-3">
pay/receive<select name="payreceive" id="payreceive">
<option>Select</option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-4">
Docketno<select name="docketno" id="docketno">
<option>Select</option>
</select>
</div>
<div class="col-md-4">
Partyname<select name="partyname" id="partyname">
<option>Select</option>
</select>
</div>
<div class="col-md-4">
Chargename<select name="chargename" id="chargename" onChange="gettradeaccount();getamount();gettradeaccount();getamount();getcgstaccount();getcgstamount();getsgstaccount();getsgstamount();getigstaccount();getigstamount();">
<option>Select</option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-6">
tradeaccount<select name="tradeaccount" id="tradeaccount">
<option>Select</option>
</select>
</div>
<div class="col-md-6">
amount<select name="amount" id="amount">
<option>Select</option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Cgstaccount<select name="cgstaccount" id="cgstaccount">
<option>Select</option>
</select>
</div>
<div class="col-md-6">
cgstamount<select name="cgstamount" id="cgstamount">
<option>Select</option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Sgstaccount<select name="sgstaccount" id="sgstaccount">
<option>Select</option>
</select>
</div>
<div class="col-md-6">
Sgstamount<select name="sgstamount" id="sgstamount">
<option>Select</option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-6">
igstaccount<select name="igstaccount" id="igstaccount">
<option>Select</option>
</select>
</div>
<div class="col-md-6">
igstamount<select name="igstamount" id="igstamount">
<option>Select</option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-6">
Narration<input type="text" name="narration">
</div>
</div><br>
<button type="submit" name="billinvoice"  class="btn-primary" formaction="billtradeinvoice.php">bill</button>
</form>
<form name="form2" method="post">
<div class="row">
<div class="col-md-4">
voucherno<select name="voucherno1" id="voucherno1" onChange="fetchinvoice();">
<option>Select </option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["voucherno"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-4">
Invoiceno<select name="invoiceno1" id="invoiceno1">
<option>Select</option>
</select>
</div>
</div><br>
<button type="Submit" name="view" formaction="viewbilltradeinvoicedet.php">View</button>
<button type="Submit" name="Print" formaction="printtradeinvoice.php">Print</button>
</body>
</head>
</html>
