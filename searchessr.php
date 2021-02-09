<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Search</title>
<body style="background-color:#ff9966;">
<button><a href="Logout.php">logout</a></button>

<?php
session_start();
?>

<form method="post" >
<div class="row">
 <div class="col-md-6">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
 <div class="col-md-6">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div>
<div class="row">
<div class="col-md-4">
docket no<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
	echo"<input list='docketno' name='docketno'>";
    echo "<datalist name='docketno' id='docketno' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $docketno);
              
                  $docketno = $row['docketno']; 
				  
                 echo '<option>'.$docketno.'</option>';
                
}

    echo "</datalist>";?>
	<button type="submit" name="view" formaction="viewessr1.php">viewbydocketno</button>
	</div>
<div class="col-md-4">
from date<input type="date" name="fromdate">
</div>
<div class="col-md-4">
To date<input type="date" name="todate">
<button type="submit" name="view" formaction="viewessr.php">viewbydate</button>
</div>

</div>
<div class="row">
<div class="col-md-6">
exporter name<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct exportername from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='exportername' class='form-control' id='exportername' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $exportername);
              
                  $exportername = $row['exportername']; 
				
                 echo '<option>'.$exportername.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit" name="view" formaction="viewessr2.php" style="position: relative; top:20;">viewbyexporter</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	consignee name<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct consigneename from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='consigneename' class='form-control' id='consigneename' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $consigneename);
              
                  $consigneename = $row['consigneename']; 
				
                 echo '<option>'.$consigneename.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit"  name="view" formaction="viewessr3.php" style="position: relative; top:20;">viewbyconsignee</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	shipline name<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct shiplinename from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='shiplinename' class='form-control' id='shiplinename' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $shiplinename);
              
                  $shiplinename = $row['shiplinename']; 
				
                 echo '<option>'.$shiplinename.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit" name="view" formaction="viewessr4.php" style="position: relative; top:20;">viewbyshipline</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	overseasagent name<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct overseasagentname from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='overseasagentname' class='form-control' id='overseasagentname' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $overseasagentname);
              
                  $overseasagentname = $row['overseasagentname']; 
				
                 echo '<option>'.$overseasagentname.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit"  name="view" formaction="viewessr5.php" style="position: relative; top:20;">viewbyoverseasagent</button>
 </div>
 </div>
 <div class="row">
<div class="col-md-6">
 hbl no<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='hblno' class='form-control' id='hblno' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $hblno);
              
                  $hblno = $row['hblno']; 
				
                 echo '<option>'.$hblno.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit" name="view" formaction="viewessr6.php" style="position: relative; top:20;">viewbyhblno</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	container no<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct containerno from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='containerno' class='form-control' id='containerno' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $containerno);
              
                  $containerno = $row['containerno']; 
				
                 echo '<option>'.$containerno.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit" name="view" formaction="viewessr7.php" style="position: relative; top:20;">viewbycontainerno</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	origin country<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct origincountry from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='origincountry' class='form-control' id='origincountry' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $origincountry);
              
                  $origincountry = $row['origincountry']; 
				
                 echo '<option>'.$origincountry.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit"  name="view" formaction="viewessr8.php" style="position: relative; top:20;">viewbyorigincountry</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	origin port<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct originport from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='originport' class='form-control' id='originport' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $originport);
              
                  $originport = $row['originport']; 
				
                 echo '<option>'.$originport.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit"  name="view" formaction="viewessr9.php" style="position: relative; top:20;">viewbyoriginport</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	load country<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct loadcountry from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='loadcountry' class='form-control' id='loadcountry' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $loadcountry);
              
                  $loadcountry = $row['loadcountry']; 
				
                 echo '<option>'.$loadcountry.'</option>';
                
}

    echo "</select>";?>
	</div>
	<button type="submit"   name="view" formaction="viewessr10.php" style="position: relative; top:20;">viewbyloadcountry</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	load port<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct loadport from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='loadport' class='form-control' id='loadport' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $loadport);
              
                  $loadport = $row['loadport']; 
				
                 echo '<option>'.$loadport.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit"   name="view" formaction="viewessr11.php" style="position: relative; top:20;">viewbyloadport</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	discharge country<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct dischargecountry from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='dischargecountry' class='form-control' id='dischargecountry' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $dischargecountry);
              
                  $dischargecountry = $row['dischargecountry']; 
				
                 echo '<option>'.$dischargecountry.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit"  name="view" formaction="viewessr12.php" style="position: relative; top:20;">viewbydischargecountry</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	discharge port<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct dischargeport from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='dischargeport' class='form-control' id='dischargeport' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $dischargeport);
              
                  $dischargeport = $row['dischargeport']; 
				
                 echo '<option>'.$dischargeport.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit"  name="view" formaction="viewessr13.php" style="position: relative; top:20;">viewbydischargeport</button>
	
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	destination country<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct destinationcountry from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='destinationcountry' class='form-control' id='destinationcountry' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $destinationcountry);
              
                  $destinationcountry = $row['destinationcountry']; 
				
                 echo '<option>'.$destinationcountry.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit"  name="view" formaction="viewessr14.php" style="position: relative; top:20;">viewbydestinationcountry</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	destination port<?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

    $result = $conn->query("select distinct destinationport from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='destinationport' class='form-control' id='destinationport' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $destinationport);
              
                  $destinationport = $row['destinationport']; 
				
                 echo '<option>'.$destinationport.'</option>';
                
}

    echo "</select>";?>



</div>








<div class="col-md-6">


<button type="submit"   name="view" formaction="viewessr15.php" style="position: relative; top:20;">viewbydestinationport</button>
</div><br><br>
<button type="submit"   name="view" formaction="viewessr16.php" style="position: relative; top:20;">view by all</button>
</div>
</form>
</body>
</html>