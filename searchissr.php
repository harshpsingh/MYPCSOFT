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
docketno<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

    $result = $conn->query("select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='docketno' id='docketno' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $docketno);
              
                  $docketno = $row['docketno']; 
				  
                 echo '<option>'.$docketno.'</option>';
                
}

    echo "</select>";?>
	<button type="submit" name="view" formaction="viewissr1.php">viewbydocketno</button>
	</div>
<div class="col-md-4">
fromdate<input type="date" name="fromdate">
</div>
<div class="col-md-4">
Todate<input type="date" name="todate">
<button type="submit" name="view" formaction="viewissr.php">viewbydate</button>
</div>

</div>
<div class="row">
<div class="col-md-6">
importername<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

    $result = $conn->query("select distinct importername from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='importername' class='form-control' id='importername' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $importername);
              
                  $importername = $row['importername']; 
				
                 echo '<option>'.$importername.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit" name="view" formaction="viewissr2.php" style="position: relative; top:20;">viewbyimporter</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	suppliername<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

    $result = $conn->query("select distinct suppliername from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='suppliername' class='form-control' id='suppliername' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $suppliername);
              
                  $suppliername = $row['suppliername']; 
				
                 echo '<option>'.$suppliername.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit"  name="view" formaction="viewissr3.php" style="position: relative; top:20;">viewbysupplier</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	shiplinename<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit" name="view" formaction="viewissr4.php" style="position: relative; top:20;">viewbyshipline</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	overseasagentname<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit"  name="view" formaction="viewissr5.php" style="position: relative; top:20;">viewbyoverseasagent</button>
 </div>
 </div>
 <div class="row">
<div class="col-md-6">
 hblno<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit" name="view" formaction="viewissr6.php" style="position: relative; top:20;">viewbyhblno</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	containerno<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit" name="view" formaction="viewissr7.php" style="position: relative; top:20;">viewbycontainerno</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	origincountry<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit"  name="view" formaction="viewissr8.php" style="position: relative; top:20;">viewbyorigincountry</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	originport<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit"  name="view" formaction="viewissr9.php" style="position: relative; top:20;">viewbyoriginport</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	loadcountry<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit"   name="view" formaction="viewissr10.php" style="position: relative; top:20;">viewbyloadcountry</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	loadport<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit"   name="view" formaction="viewissr11.php" style="position: relative; top:20;">viewbyloadport</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	dischargecountry<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit"  name="view" formaction="viewissr12.php" style="position: relative; top:20;">viewbydischargecountry</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	dischargeport<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit"  name="view" formaction="viewissr13.php" style="position: relative; top:20;">viewbydischargeport</button>
	
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	destinationcountry<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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
	<button type="submit"  name="view" formaction="viewissr14.php" style="position: relative; top:20;">viewbydestinationcountry</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	destinationport<?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

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


<button type="submit"   name="view" formaction="viewissr15.php" style="position: relative; top:20;">viewbydestinationport</button>
</div><br><br>
<button type="submit"   name="view" formaction="viewissr16.php" style="position: relative; top:20;">view by all</button>
</div>
</form>
</body>
</html>