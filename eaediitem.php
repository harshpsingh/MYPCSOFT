<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
function gettotalvaluefc()
{
    var productrate=document.getElementById("productrate");
    var quantity=document.getElementById("quantity");
    document.getElementById("totalvaluefc").value=(productrate.value*quantity.value).toFixed(2);;
    
    
}
function getfobinr()
{
    document.getElementById("fobinr").value=(document.getElementById("totalvaluefc").value*exchangerate.value).toFixed(2); ;
}
function getpmv()
{
    var pmvperc=document.getElementById("pmvpercentage");
    var exchrate=document.getElementById("exchangerate");
    var productrate=document.getElementById("productrate");
    document.getElementById("pmv").value=((exchangerate.value*productrate.value*pmvperc.value)/100).toFixed(2);
    
    
    
    
}


function gettotalpmv()
{
    var pmv=document.getElementById("pmv");
    var qty=document.getElementById("quantity");
    document.getElementById("totalpmv").value=(pmv.value*qty.value).toFixed(2);
    
}
function getdbkamt()
{
    var fobinr=document.getElementById("fobinr");
    var dbkr=document.getElementById("dbkrate");
    document.getElementById("dbkamount").value=(fobinr.value*dbkr.value)/100;
    
}

function getschemedescription(val) {
    $.ajax({
    type: "POST",
    url: "get_schemedescription.php",
    data:'schemecode='+val,
    success: function(data){
        $("#schemedescription").html(data);
    }
    });
}


function getendusedescription(val) {
    $.ajax({
    type: "POST",
    url: "get_endusedescription.php",
    data:'endusecode='+val,
    success: function(data){
        $("#endusedescription").html(data);
    }
    });
}
function getexchrate(val) {
    $.ajax({
    type: "POST",
    url: "get_exchangerate.php",
    data:'currencyname='+val,
    success: function(data){
        $("#exchangerate").html(data);
    }
    });
}
function getdbksrno(val) {
    $.ajax({
    type: "POST",
    url: "get_dbksrno.php",
    data:'ritc='+val,
    success: function(data){
        $("#dbksrno").html(data);
    }
    });
}
function getdbkrate(val) {
    $.ajax({
    type: "POST",
    url: "get_dbkrate.php",
    data:'dbksrno='+val,
    success: function(data){
        $("#dbkrate").html(data);
    }
    });
}
function getdbkratespec(val) {
    $.ajax({
    type: "POST",
    url: "get_dbkratespec.php",
    data:'dbksrno='+val,
    success: function(data){
        $("#dbkratespec").html(data);
    }
    });
}
</script>
<title>Edi item  details</title>
<body style="background-color:#5beba8;">

<button style="background-color:red;"><a href="logout.php">Logout</a><br></button>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password="";

if(!isset($_POST['itemno']))
{
    $_SESSION['itemno']=1;
}
try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
        $smt = $conn->prepare('select * From currencymaster');
        $smt->execute();
        $data = $smt->fetchAll();
        
        

try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
        $smt1 = $conn->prepare('select * From ritc');
        $smt1->execute();
        $data1 = $smt1->fetchAll();
        
        try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
        $smt2 = $conn->prepare('select * From schemecode');
        $smt2->execute();
        $data2 = $smt2->fetchAll();
        try {
    $conn = new PDO("mysql:host=$servername;dbname=master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
        $smt3 = $conn->prepare('select * From enduse');
        $smt3->execute();
        $data3 = $smt3->fetchAll();
        
        
    
        
        $conn1 = mysqli_connect("localhost","root","","exportair");
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"]))
{
    
    
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $jobno = "";
                if(isset($Row[0])) {
                    $jobno = mysqli_real_escape_string($conn1,$Row[0]);
                }
                
                $branch = "";
                if(isset($Row[1])) {
                    $branch = mysqli_real_escape_string($conn1,$Row[1]);
                }
                
                $fy = "";
                if(isset($Row[2])) {
                    $fy = mysqli_real_escape_string($conn1,$Row[2]);
                }
                
                $invoicesrno = "";
                if(isset($Row[3])) {
                    $invoicesrno = mysqli_real_escape_string($conn1,$Row[3]);
                    
              
                
                $itemno = "";
                if(isset($Row[4])) {
                    $itemno = mysqli_real_escape_string($conn1,$Row[4]);
                }
                
                $ritc = "";
                if(isset($Row[5])) {
                    $ritc = mysqli_real_escape_string($conn1,$Row[5]);
                }
                
                $goodsdescription = "";
                if(isset($Row[6])) {
                    $goodsdescription = mysqli_real_escape_string($conn1,$Row[6]);
                }
                $quantity = "";
                if(isset($Row[7])) {
                    $quantity = mysqli_real_escape_string($conn1,$Row[7]);
                }
                
                $unit = "";
                if(isset($Row[8])) {
                    $unit = mysqli_real_escape_string($conn1,$Row[8]);
                }
                
                $productrate = "";
                if(isset($Row[9])) {
                    $productrate = mysqli_real_escape_string($conn1,$Row[9]);
                }
                
                $currencyname = "";
                if(isset($Row[10])) {
                    $currencyname = mysqli_real_escape_string($conn1,$Row[10]);
                    
                $exchangerate = "";
                if(isset($Row[11])) {
                    $exchangerate = mysqli_real_escape_string($conn1,$Row[11]);
                }
                
                $totalvaluefc = "";
                if(isset($Row[12])) {
                    $totalvaluefc = mysqli_real_escape_string($conn1,$Row[12]);
                }
                
                $fobinr = "";
                if(isset($Row[13])) {
                    $fobinr = mysqli_real_escape_string($conn1,$Row[13]);
                }
                
                $dbksrno = "";
                if(isset($Row[14])) {
                    $dbksrno = mysqli_real_escape_string($conn1,$Row[14]);
                }

                $dbkrate = "";
                if(isset($Row[15])) {
                    $dbkrate = mysqli_real_escape_string($conn1,$Row[15]);
                }
                $dbkratespec = "";
                if(isset($Row[16])) {
                    $dbkratespec = mysqli_real_escape_string($conn1,$Row[16]);
                }
                
                $dbkamount = "";
                if(isset($Row[17])) {
                    $dbkamount = mysqli_real_escape_string($conn1,$Row[17]);
                }
            
                $schemecode = "";
                if(isset($Row[18])) {
                    $schemecode = mysqli_real_escape_string($conn1,$Row[18]);
                }
                
                $schemedescription = "";
                if(isset($Row[19])) {
                    $schemedescription = mysqli_real_escape_string($conn1,$Row[19]);
                }

                $pmvpercentage = "";
                if(isset($Row[20])) {
                    $pmvpercentage = mysqli_real_escape_string($conn1,$Row[20]);
                }
                $pmv = "";
                if(isset($Row[21])) {
                    $pmv = mysqli_real_escape_string($conn1,$Row[21]);
                }

                $totalpmv = "";
                if(isset($Row[22])) {
                    $totalpmv = mysqli_real_escape_string($conn1,$Row[22]);
                }
                $endusecode = "";
                if(isset($Row[23])) {
                    $endusecode = mysqli_real_escape_string($conn1,$Row[23]);
                }
            
                $endusedescription = "";
                if(isset($Row[24])) {
                    $endusedescription = mysqli_real_escape_string($conn1,$Row[24]);
                }
                
                $igstpaymentstatus = "";
                if(isset($Row[25])) {
                    $igstpaymentstatus = mysqli_real_escape_string($conn1,$Row[25]);
                }

                $taxablevalue = "";
                if(isset($Row[26])) {
                    $taxablevalue = mysqli_real_escape_string($conn1,$Row[26]);
                }
                $igstrate = "";
                if(isset($Row[27])) {
                    $igstrate = mysqli_real_escape_string($conn1,$Row[27]);
                }

                $igstamount = "";
                if(isset($Row[28])) {
                    $igstamount = mysqli_real_escape_string($conn1,$Row[28]);
                }
                $reward = "";
                if(isset($Row[29])) {
                    $reward = mysqli_real_escape_string($conn1,$Row[29]);
                }

                $str = "";
                if(isset($Row[30])) {
                    $str = mysqli_real_escape_string($conn1,$Row[30]);
                }
                $accessory = "";
                if(isset($Row[31])) {
                    $accessory = mysqli_real_escape_string($conn1,$Row[31]);
                }

                $cess = "";
                if(isset($Row[32])) {
                    $cess = mysqli_real_escape_string($conn1,$Row[32]);
                }
                if (!empty($jobno) || !empty($branch)|| !empty($fy)|| !empty($invoicesrno)) {
                    $query = "insert into eaediitem(jobno,branch,fy,invoicesrno,itemno,ritc,goodsdescription,quantity,unit,productrate,currencyname,exchangerate,totalvaluefc,fobinr,dbksrno,dbkrate,dbkratespec,dbkamount,schemecode,schemedescription,pmvpercentage,pmv,totalpmv,endusecode,endusedescription,igstpaymentstatus,taxablevalue,igstrate,igstamount,reward,str,accessory,cess) values ('".$jobno."','".$branch."','".$fy."','".$invoicesrno."','".$itemno."','".$ritc."','".$goodsdescription."','".$quantity."','".$unit."','".$productrate."','".$currencyname."','".$exchangerate."','".$totalvaluefc."','".$fobinr."','".$dbksrno."','".$dbkrate."','".$dbkratespec."','".$dbkamount."','".$schemecode."','".$schemedescription."','".$pmvpercentage."','".$pmv."','".$totalpmv."','".$endusecode."','".$endusedescription."','".$igstpaymentstatus."','".$taxablevalue."','".$igstrate."','".$igstamount."','".$reward."','".$str."','".$accessory."','".$cess."')";
                    $result = mysqli_query($conn1, $query);
                
                    if (! empty($result)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                    }
                }
             }
        
         }
  }
        }
        echo $message;
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
        }
  
?>
 <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-primary">Import</button>
        
            </div>
        
        </form>
        <form method="post">
            
<div class="row" style="position:relative; left:20;">
<div class="col-md-3">      
<label>jobno</label><input type="text" name="jobno" readonly value="<?php echo $_SESSION['jobno'];?>">
</div>
<div class="col-md-3">
<label>username</label><input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-3">
<label>branch</label><input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="col-md-3">
<label>year</label><input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div><br>
<div class="row" style="position:relative; left:20;">
<div class="col-md-4">
<label>Invoicesrno</label><?php

$conn = new mysqli('localhost', 'root', '', 'exportair') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from eaediinvoice where jobno='$_SESSION[jobno]' and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='invoicesrno'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $invoicesrno);
              
                  $invoicesrno = $row['invoicesrno']; 
                  echo '<option>'.$invoicesrno.'</option>';
                 
}

    echo "</select>";?>
    </div>
    
</div><br>
    <div class="row" style="position:relative; left:20;">
    <div class="col-md-4">
<label>Item no</label><input type="text" name="itemno" value="<?php echo $_SESSION['itemno']?>">
</div>
<div class="col-md-4">
<label>ritc code</label><select name="ritc" id="ritc" onChange="getdbksrno(this.value);" >
<option> </option>
<?php foreach ($data1 as $row): ?>
    <option><?=$row["ritc"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-4">
<label>Goods Description</label><input type="text" name="goodsdescription">
</div>
</div><br>

<div class="row" style="position:relative; left:20;">
<div class="col-md-4">
<label>Quantity</label><input type="text" name="quantity" id="quantity">
</div>
<div class="col-md-4">
<label>Product Rate</label><input type="text" name="productrate" id="productrate">
</div>
<div class="col-md-4">
<label>Unit</label><input type="text" name="unit">
</div>
</div><br>
<div class="row" style="position:relative; left:20;">
<div class="col-md-6">
<label>Currencyname</label><?php

$conn = new mysqli('localhost', 'root', '', 'exportair') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from eaediinvoice where jobno='$_SESSION[jobno]' and branch='$_SESSION[branch]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='currencyname' id='currencyname'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $currencyname);
              
                  $currencyname = $row['currencyname']; 
                  echo '<option>'.$currencyname.'</option>';
                 
}

    echo "</select>";?>
    </div>
    <div class="col-md-6">
<label>exchangerate</label><?php

$conn = new mysqli('localhost', 'root', '', 'exportair') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from eaediinvoice where jobno='$_SESSION[jobno]' and branch='$_SESSION[branch]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='exchangerate' id='exchangerate'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $exchangerate);
              
                  $exchangerate = $row['exchangerate']; 
                  echo '<option>'.$exchangerate.'</option>';
                 
}

    echo "</select>";?>
</div>
</div><br>

<?php
$_SESSION['itemno']=$_SESSION['itemno']+1;
?>
<div class="row" style="position:relative; left:20;">
<div class="col-md-6">
<label>Total value(Fc)</label><input type="text" name="totalvaluefc" id="totalvaluefc" onclick="gettotalvaluefc()">
</div>
<div class="col-md-6">
<label>Fob</label><input type="text" name="fobinr" id="fobinr" onclick="getfobinr()">
</div>
</div><br>

<div class="row" style="position:relative; left:20;">
<div class="col-md-3">
<label>Dbk srno</label><select name="dbksrno" id="dbksrno" onChange="getdbkrate(this.value);getdbkratespec(this.value);">
<option></option>
</select>
</div>
<div class="col-md-3">
<label>DBk rate</label><select name="dbkrate" id="dbkrate">
<option></option>
</select>
</div>
<div class="col-md-3">
<label>DBk rate spec</label><select name="dbkratespec" id="dbkratespec">
<option></option>
</select>
</div>
<label>Dbk amount</label><input type="text" name="dbkamount" id="dbkamount" onclick="getdbkamt()">
</div>
</div><br>
<div class="row" style="position:relative; left:20;">
<div class="col-md-6">
<label>schemecode</label><select name="schemecode" id="schemecode"  onChange="getschemedescription(this.value);">
<option> </option>
<?php foreach ($data2 as $row): ?>
    <option><?=$row["schemecode"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
<label>schemedescription</label><Select name="schemedescription" id="schemedescription">
<option value="">Select</option>
</select>
</div>
</div><br>
<div class="row" style="position:relative; left:20;">
<div class="col-md-4">
<label>Pmv Percentage</label><input type="text" name="pmvpercentage" id="pmvpercentage" value="110">
</div>
<div class="col-md-4">
<label>Pmv</label><input type="text" name="pmv" id="pmv" onclick="getpmv()">
</div>
<div class="col-md-4">
<label>Total pmv</label><input type="text" name="totalpmv" id="totalpmv" onclick="gettotalpmv()">
</div>
</div><br>
<div class="row" style="position:relative; left:20;">
<div class="col-md-6">
<label>End use code</label><select name="endusecode" id="endusecode" onChange="getendusedescription(this.value);" >
<option> </option>
<?php foreach ($data3 as $row): ?>
    <option><?=$row["endusecode"]?></option>
<?php endforeach ?>
</select>
</div>
<div class="col-md-6">
<label>Enduse description</label><Select name="endusedescription" id="endusedescription">
<option value="">Select</option>
</select>
</div>
</div><br>
<div class="row" style="position:relative; left:20;">
<div class="col-md-3">
<label>Igst Payment status</label><select name="igstpaymentstatus" >
<option></option>
<option> LUT</option>
<option>P</option>
<option>NA</option>
</select>
</div>
<div class="col-md-3">
<label>Taxable value</label><input type="text" name="taxablevalue">
</div>
<div class="col-md-3">
<label>Igst Rate</label><input type="text" name="igstrate">
</div>
<div class="col-md-3">
<label>Igst amount</label><input type="text" name="igstamount">
</div>
</div>
<br>
<div class="row" style="position:relative; left:6;">
<div class="col-md-3">
<label>Reward</label><select name="reward" >
<option></option>
<option>Y</option>
<option>N</option>
</select>
</div>
<div class="col-md-3" >
<label>STR</label><select name="str" >
<option></option>
<option>Y</option>
<option>N</option>
</select>
</div>
<div class="col-md-3">
<label>Accessory</label><select name="accessory" >
<option></option>
<option>Y</option>
<option>N</option>
</select>
</div>
<div class="col-md-3">
<label>Cess</label><select name="cess" >
<option></option>
<option>Y</option>
<option>N</option>
</select>
</div>
</div><br>
<button type="submit"  class="btn-primary" name="Saveitem" formaction="saveeaediitemdetails.php">Saveitem</button>
<button type="submit"  class="btn-primary" name="profile" formaction="eaedidet.php">ediprofile</button>


</form>
<iframe src="vieweaediitemdet.php" width="800"height="300" style="background-color:white;" ></iframe>
</body>
</head>
</html>