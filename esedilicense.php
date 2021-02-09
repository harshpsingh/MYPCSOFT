<html>
<head>

</head>	
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>license Details</title>
<body>
<?php
session_start();
unset($_SESSION['itemno']);

$servername = "localhost";
$username = "root";
$password="";
$conn1=mysqli_connect("localhost","root","","exportsea");
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
                    
                $licensetype = "";
                if(isset($Row[4])) {
                    $licensetype = mysqli_real_escape_string($conn1,$Row[4]);
                }
                $registrationno = "";
                if(isset($Row[5])) {
                    $registrationno = mysqli_real_escape_string($conn1,$Row[5]);
                }
                
                $registrationdate = "";
                if(isset($Row[6])) {
                    $registrationdate = mysqli_real_escape_string($conn1,$Row[6]);
                }

                $itemsno = "";
                if(isset($Row[7])) {
                    $itemsno = mysqli_real_escape_string($conn1,$Row[7]);
                }
                
                $slnoinc = "";
                if(isset($Row[8])) {
                    $slnoinc = mysqli_real_escape_string($conn1,$Row[8]);
                }
                $slnoine= "";
                if(isset($Row[9])) {
                    $slnoine= mysqli_real_escape_string($conn1,$Row[9]);
                }
                
                $expitemdet= "";
                if(isset($Row[10])) {
                    $expitemdet = mysqli_real_escape_string($conn1,$Row[10]);
                }
                
                 $expquantity= "";
                if(isset($Row[11])) {
                    $expquantity = mysqli_real_escape_string($conn1,$Row[11]);
                }
				 $impitemdet= "";
                if(isset($Row[12])) {
                    $impitemdet = mysqli_real_escape_string($conn1,$Row[12]);
                }
				 $quantity= "";
                if(isset($Row[13])) {
                    $quantity = mysqli_real_escape_string($conn1,$Row[13]);
                }
				 $unit= "";
                if(isset($Row[14])) {
                    $unit = mysqli_real_escape_string($conn1,$Row[14]);
                }
                 $impind= "";
                if(isset($Row[15])) {
                    $impind = mysqli_real_escape_string($conn1,$Row[15]);
                }
                if (!empty($jobno) || !empty($branch)|| !empty($fy)|| !empty($invoicesrno)) {
                    $query = "insert into esedilicensedet(jobno,branch,fy,invoicesrno,licensetype,registrationno,registrationdate,itemsno,slnoinc,slnoine,expitemdet,expquantity,impitemdet,quantity,unit,impind) values('".$jobno."','".$branch."','".$fy."','".$invoicesrno."','".$licensetype."','".$registrationno."','".$registrationdate."','".$itemsno."','".$slnoinc."','".$slnoine."','".$expitemdet."','".$expquantity."','".$impitemdet."','".$quantity."','".$unit."','".$impind."')";
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
        
?>
<button><a href="logout.php">Logout</a><br></button><br>
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
<form  style="background-color:pink"; method="post">
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
<div class="col-md-3">
<label>Invoicesrno</label><?php

$conn = new mysqli('localhost', 'root', '', 'exportsea') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from esediinvoice where jobno='$_POST[jobno]'  and branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
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
	
	<div class="col-md-3">
	<label>License Type</label><select name="licensetype">
	<option></option>
	<option>DEEC</option>
	<option>EPCG</option>
	</select>
	</div>
	
	<div class="col-md-3">
		<label>Registration No</label><input type="text" name="registrationno">
		</div>
		<div class="col-md-3">
		<label>Registration Date</label><input type="date" name="registrationdate">
		</div>
		</div><br>
		<div class="row" style="position:relative; left:20;">
<div class="col-md-4">
<label>Item Sno</label><input type="text" name="itemsno">
</div>
<div class="col-md-4">
<label>SL No in C</label><input type="text" name="slnoinc">
</div>
<div class="col-md-4">
<label>SL No in E</label><input type="text" name="slnoine">
</div>	
</div><br>	
<div class="row" style="position:relative; left:20;">
<div class="col-md-4">
<label>Export Item Details</label><input type="text" name="expitemdet">
</div>
<div class="col-md-4">
<label>Exp Quantity</label><input type="text" name="expquantity">
</div>
<div class="col-md-4">
<label>Import Item Details</label><input type="text" name="impitemdet">
</div>
</div><br>
<div class="row" style="position:relative; left:20;">
<div class="col-md-4">
<label>Quantity</label><input type="text" name="quantity">
</div>
<div class="col-md-4">
<label>Unit</label><input type="text" name="unit">
</div>
<div class="col-md-4">
<label>Imp(M)/Ind(N)</label><select name="impind">
<option></option>
<option>M</option>
<option>N</option>
</select>
</div>
</div>
	<button type="submit" style="background-color :red;"name="savekice" formaction="saveesedilicense.php">Save License
	</button>
<button type="submit" style="background-color :#008068;"name="eseditdet" formaction="esedidet.php">es edi</button>

</form>
</body>
</html>