<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<title>Reports</title>
<body style="background-color:#d4aed6;">
<?php
session_start();


?>
<button><a href="Logout.php">logout</a></button>
<h3 style="color:#ff6505;">Reports</h3>
<form method="post">
<div class="row">
<div class="three columns">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="three columns">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="three columns">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div><br>
<div class="row">
<div class="twelve columns">
<input type="checkbox" name="datecheck" style="width:30px;height:30px;">
 From Date<input type="date" name="fromdate" style="background-color:#9fd1c0; text-color:red;">


 To Date<input type="date" name="todate"style="background-color:#9fd1c0; ">
</div>
</div><br><br>
<div class="row">
<div class="twelve columns">
<input type="checkbox" name="impcheck" style="width:30px;height:30px;">
importername <?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

    $result = $conn->query("SELECT  distinct importername FROM shipmentregister where branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
	echo"<input list='importername' name='importername'>";
    echo "<datalist name='importername' id='importername' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $importername);
              
                  $importername= $row['importername']; 
				  
                 echo '<option>'.$importername.'</option>';
                
}

    echo "</datalist>";?>
</div>
</div>
<div class="row">
<div class="twelve columns">
<input type="checkbox" name="concheck" style="width:30px;height:30px;">
suppliername <?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

    $result = $conn->query("SELECT distinct  suppliername FROM shipmentregister where branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
	echo"<input list='suppliername' name='suppliername'>";
    echo "<datalist name='suppliername' id='suppliername' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $suppliername);
              
                  $suppliername= $row['suppliername']; 
				  
                 echo '<option>'.$suppliername.'</option>';
                
}

    echo "</datalist>";?>
</div>
</div>
<div class="twelve columns">
<input type="checkbox" name="slcheck" style="width:30px;height:30px;">
shiplinename <?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

    $result = $conn->query("SELECT distinct  shiplinename FROM shipmentregister where branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
	echo"<input list='shiplinename' name='shiplinename'>";
    echo "<datalist name='shiplinename' id='shiplinename' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $shiplinename);
              
                  $shiplinename= $row['shiplinename']; 
				  
                 echo '<option>'.$shiplinename.'</option>';
                
}

    echo "</datalist>";?>
</div>
</div>
<div class="row">
<div class="twelve columns">
<input type="checkbox" name="oacheck" style="width:30px;height:30px;">
overseasagentname <?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

    $result = $conn->query("SELECT  distinct overseasagentname FROM shipmentregister where branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
	echo"<input list='overseasagentname' name='overseasagentname'>";
    echo "<datalist name='overseasagentname' id='overseasagentname' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $overseasagentname);
              
                  $overseasagentname= $row['overseasagentname']; 
				  
                 echo '<option>'.$overseasagentname.'</option>';
                
}

    echo "</datalist>";?>
</div>
</div>
<div class="row">
<div class="twelve columns">
<input type="checkbox" name="destcheck" style="width:30px;height:30px;">
origincountry <?php
$conn = new mysqli('localhost', 'root', '', 'importsea') ;

    $result = $conn->query("SELECT  distinct origincountry FROM shipmentregister where branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
	echo"<input list='origincountry' name='origincountry'>";
    echo "<datalist name='origincountry' id='origincountry' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $origincountry);
              
                  $origincountry= $row['origincountry']; 
				  
                 echo '<option>'.$origincountry.'</option>';
                
}

    echo "</datalist>";?>
</div>
</div>
<div class="row">

<button type="submit" class="button-primary" name="impseadetrep" formaction="impseadetrep.php">importseadet</button>
</form>
</body>
<head>
<html>