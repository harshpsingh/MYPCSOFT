<html>
<head>

</head>	
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
function getqualifier(val)
 {
	$.ajax({
	type: "POST",
	url: "get_esediqualifier.php",
	data:'type='+val,
	success: function(data){
		$("#qualifier").html(data);
		
	}
	});
} 
function getswcode(val)
 {
	$.ajax({
	type: "POST",
	url: "get_esediswcode.php",
	data:'qualifier='+val,
	success: function(data){
		$("#swcode").html(data);
		
	}
	});
} 		
</script>	

<title>Single window info</title>
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
                    
                $itemno = "";
                if(isset($Row[4])) {
                    $itemno = mysqli_real_escape_string($conn1,$Row[4]);
                }
                $type = "";
                if(isset($Row[5])) {
                    $type = mysqli_real_escape_string($conn1,$Row[5]);
                }
                
                $qualifier = "";
                if(isset($Row[6])) {
                    $qualifier = mysqli_real_escape_string($conn1,$Row[6]);
                }

                $swcode = "";
                if(isset($Row[7])) {
                    $swcode = mysqli_real_escape_string($conn1,$Row[7]);
                }
                
                $swtext = "";
                if(isset($Row[8])) {
                    $swtext = mysqli_real_escape_string($conn1,$Row[8]);
                }
                $measurement= "";
                if(isset($Row[9])) {
                    $measurement= mysqli_real_escape_string($conn1,$Row[9]);
                }
                
                $unit= "";
                if(isset($Row[10])) {
                    $unit = mysqli_real_escape_string($conn1,$Row[10]);
                }
                
                
                
                if (!empty($jobno) || !empty($branch)|| !empty($fy)|| !empty($invoicesrno)) {
                    $query = "insert into esedisinglewindowinfo(jobno,branch,fy,invoicesrno,itemno,type,qualifier,swcode,swtext,measurement) values('".$jobno."','".$branch."','".$fy."','".$invoicesrno."','".$itemno."','".$type."','".$qualifier."','".$swcode."','".$swtext."','".$measurement."')";
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
<button><a href="logout.php">Logout</a><br></button>
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
<div class="col-md-6">
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
	<div class="col-md-6">
<label>Item no</label><?php

$conn = new mysqli('localhost', 'root', '', 'exportsea') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from esediitem where jobno='$_POST[jobno]'and  branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='itemno'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $itemno);
              
                  $itemno = $row['itemno']; 
                  echo '<option>'.$itemno.'</option>';
                 
}

    echo "</select>";?>
	</div>
	</div><br>
	<div class="row">
	<div class="col-md-4">
<label>Type</label><Select name="type" id ="type" onChange="getqualifier(this.value);">
<option>Select</option>
<option>CHR</option>
<option>ORC</option>
<option>DTY</option>		
</select>
</div>
<div class="col-md-4">
<label>qualifier</label><select name="qualifier" id="qualifier"onChange="getswcode(this.value);">
<option> Select q</option>
</select>
</div>
<div class="col-md-4">
<label>Code</label>
<select name="swcode" id="swcode">
<option> Select cc</option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-4">
<label>Text</label>	
<input type="text" name="swtext" >
</div>
<div class="col-md-4">
<label>Measurement</label>
<input type="text" name="measurement" >
</div>
<div class="col-md-4">
<label>Unit</label>
<input type="text" name="unit" >
</div>
</div><br>
<button type="submit" style="background-color :red;"name="savsw" formaction="saveesedisinglewindow.php">Savesw</button>
<button type="submit" style="background-color :purple;"name="eseditdet" formaction="esedidet.php">es edi</button>

</form>
</body>
</html>




