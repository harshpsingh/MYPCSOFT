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
<input type="checkbox" name="expcheck" style="width:30px;height:30px;">
exportername <?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

    $result = $conn->query("SELECT  distinct exportername FROM shipmentregister where branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
	echo"<input list='exportername' name='exportername'>";
    echo "<datalist name='exportername' id='exportername' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $exportername);
              
                  $exportername= $row['exportername']; 
				  
                 echo '<option>'.$exportername.'</option>';
                
}

    echo "</datalist>";?>
</div>
</div>
<div class="row">
<div class="twelve columns">
<input type="checkbox" name="concheck" style="width:30px;height:30px;">
consigneename <?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

    $result = $conn->query("SELECT distinct  consigneename FROM shipmentregister where branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
	echo"<input list='consigneename' name='consigneename'>";
    echo "<datalist name='consigneename' id='consigneename' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $consigneename);
              
                  $consigneename= $row['consigneename']; 
				  
                 echo '<option>'.$consigneename.'</option>';
                
}

    echo "</datalist>";?>
</div>
</div>

<div class="row">
<div class="twelve columns">
<input type="checkbox" name="oacheck" style="width:30px;height:30px;">
overseasagentname <?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

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
destinationcountry <?php
$conn = new mysqli('localhost', 'root', '', 'exportair') ;

    $result = $conn->query("SELECT  distinct destinationcountry FROM shipmentregister where branch ='$_SESSION[branch]' and fy='$_SESSION[fy]'");
    
    echo "<html>";
    echo "<body>";
	echo"<input list='destinationcountry' name='destinationcountry'>";
    echo "<datalist name='destinationcountry' id='destinationcountry' >";
 echo  "<option> </option>";
    while ($row = $result->fetch_assoc()) {

                  unset( $destinationcountry);
              
                  $destinationcountry= $row['destinationcountry']; 
				  
                 echo '<option>'.$destinationcountry.'</option>';
                
}

    echo "</datalist>";?>
</div>
</div>
<div class="row">

<button type="submit" class="button-primary" name="expairdetrep" formaction="expairdetrep.php">exportairdet</button>
</form>
</body>
<head>
<html>