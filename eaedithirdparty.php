<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<title>Third Party Details</title>
<body style="background-color:#5beba8;">

<button style="background-color:red;"><a href="logout.php">Logout</a><br></button>
<h3>Third Party Details</h3>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password="";

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
                $ieccode = "";
                if(isset($Row[5])) {
                    $ieccode = mysqli_real_escape_string($conn1,$Row[5]);
                }
                
                $branchsrno = "";
                if(isset($Row[6])) {
                    $branchsrno = mysqli_real_escape_string($conn1,$Row[6]);
                }

                $manufacturername = "";
                if(isset($Row[7])) {
                    $manufacturername = mysqli_real_escape_string($conn1,$Row[7]);
                }
                
                $manufactureraddress1 = "";
                if(isset($Row[8])) {
                    $manufactureraddress1 = mysqli_real_escape_string($conn1,$Row[8]);
                }
                $manufactureraddress2 = "";
                if(isset($Row[9])) {
                    $manufactureraddress2 = mysqli_real_escape_string($conn1,$Row[9]);
                }
                
                $city= "";
                if(isset($Row[10])) {
                    $city = mysqli_real_escape_string($conn1,$Row[10]);
                }
                
                $pin = "";
                if(isset($Row[11])) {
                    $pin = mysqli_real_escape_string($conn1,$Row[11]);
                }
                
                $gstintype = "";
                if(isset($Row[12])) {
                    $gstintype = mysqli_real_escape_string($conn1,$Row[12]);
                    
                $gstinno = "";
                if(isset($Row[13])) {
                    $gstinno = mysqli_real_escape_string($conn1,$Row[13]);
                }
                
                if (!empty($jobno) || !empty($branch)|| !empty($fy)|| !empty($invoicesrno)) {
                    $query = "insert into esedithirdparty(jobno,branch,fy,invoicesrno,itemno,ieccode,branchsrno,manufacturername,manufactureraddress1,manufactureraddress2,city,pin,gstintype,gstinno) values('".$jobno."','".$branch."','".$fy."','".$invoicesrno."','".$itemno."','".$ieccode."','".$branchsrno."','".$manufacturername."','".$manufactureraddress1."','".$manufactureraddress2."','".$city."','".$pin."','".$gstintype."','".$gstinno."')";
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
<label>jobno</label><input type="text" name="jobno" readonly value="<?php echo $_POST['jobno'];?>">
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

    $result = $conn->query("select * from eaediinvoice where jobno='$_POST[jobno]' and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
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
    <div class="col-md-4">
<label>Item no</label><input type="text" name="itemno">
</div>
<div class="col-md-4">
<label>Ieccode</label><input type="text" name="ieccode">
</div>
<div class="row">
    <div class="col-md-4">
        <label>Branchsrno</label><input type="text" name="branchsrno">
</div>

</div><br>

<div class="row">
    <div class="col-md-4">
        <label>Manufacturername</label><input type="text" name="manufacturername">
</div>
<div class="col-md-4">
        <label>Manufacturer address1</label><input type="text" name="manufactureraddress1">
</div>
<div class="col-md-4">
        <label>Manufacturer address2</label><input type="text" name="manufactureraddress2">
</div>
</div><br>
<div class="row">
    <div class="col-md-4">
        <label>City</label><input type="text" name="city">
</div>
<div class="col-md-4">
        <label>Pin</label><input type="text" name="pin">
</div>

</div><br>
<div class="row">
    <div class="col-md-4">
        <label>gstintype</label><input type="text" name="gstintype">
</div>
<div class="col-md-4">
        <label>gstinno</label><input type="text" name="gstinno">
</div>

</div><br>
<button type="submit"  class="btn-primary" name="Saveitem" formaction="saveeedithirdparty.php">Savethirdparty</button>
<button type="submit"  class="btn-primary" name="profile" formaction="eaedidet.php">ediprofile</button><br>

</form>
<iframe src="vieweaedithirdparty.php" width="800"height="300" style="background-color:white;" ></iframe>
</body>
</head>

</html>