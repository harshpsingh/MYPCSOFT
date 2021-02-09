<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Search</title>
<body style="background-color:#ff9966">
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
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

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
	<button type="submit" name="view" formaction="vieweasr1.php">viewbydocketno</button>
	</div>
<div class="col-md-4">
fromdate<input type="date" name="fromdate">
</div>
<div class="col-md-4">
Todate<input type="date" name="todate">
<button type="submit" name="view" formaction="vieweasr.php">viewbydate</button>
</div>

</div>
<div class="row">
<div class="col-md-6">
exportername<?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

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
	<button type="submit" name="view" formaction="vieweasr2.php" style="position: relative; top:20;">viewbyexporter</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	consigneename<?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

    $result = $conn->query("select distinct consigneename from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='consigneename' class='form-control' id='consigneename' >";
    
    while ($row = $result->fetch_assoc()) {

                  unset( $consigneename);
              
                  $consigneename = $row['consigneename']; 
				
                 echo '<option>'.$consigneename.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit"  name="view" formaction="vieweasr3.php" style="position: relative; top:20;">viewbyconsignee</button>
	</div>
	</div>
	
	
	
 <div class="row">
<div class="col-md-6">
 hawbblno<?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

    $result = $conn->query("select * from shipmentregister where branch='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='hawbblno' class='form-control' id='hawbblno' >";
     echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $hawbblno);
              
                  $hawbblno = $row['hawbblno']; 
				
                 echo '<option>'.$hawbblno.'</option>';
                
}

    echo "</select>";?>
	</div>
	<div class="col-md-6">
	<button type="submit" name="view" formaction="vieweasr4.php" style="position: relative; top:20;">viewbyhblno</button>
	</div>
	</div>
	
	<div class="row">
<div class="col-md-6">
	origincountry<?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

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
	<button type="submit"  name="view" formaction="vieweasr5.php" style="position: relative; top:20;">viewbyorigincountry</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	originport<?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

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
	<button type="submit"  name="view" formaction="vieweasr6.php" style="position: relative; top:20;">viewbyoriginport</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	destinationcountry<?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

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
	<button type="submit"  name="view" formaction="vieweasr7.php" style="position: relative; top:20;">viewbydestinationcountry</button>
	</div>
	</div>
	<div class="row">
<div class="col-md-6">
	destinationport<?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

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


<button type="submit"   name="view" formaction="vieweasr8.php" style="position: relative; top:20;">viewbydestinationport</button>
</div>
<div class="col-md-6">
<button type="submit"   name="view" formaction="vieweasr9.php" style="position: relative; top:20;">viewbyall</button>
</div>
</div>
</form>
</body>
</html>