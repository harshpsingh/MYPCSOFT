<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<title>Hbl Details</title>
<body style="background-color:#e0ff33;">
<header>
<a href="logout.php">Logout</a>
<a href="operations.php">operations</a>
</header>
<?php
session_start();
?>
<form method="post">
<div class="row">
<div class="four columns">
<label>Docket no</label><?php
$conn = new mysqli('localhost', 'root', '', 'exportsea') ;

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
</div>
<div class="four columns">
<label>branch</label><input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="four columns">
<label>year</label><input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div>
<div class="row">
<div class="four columns">
<label>Freight amount</label><input type="number" step="0.01" name="freightamt">
</div>
<div class="four columns">
<label>Freight Payable at</label><input type="text"  name="freightpayableat">
</div>
<div class="four columns">
<label>shipment type</label><select name="shipmenttype">
<option></option>
<option>LCL/LCL</option>
<option>LCL/FCL</option>
<option>FCL/LCL</option>
<option>FCL/FCL</option>
</select>
</div>
</div>
<div class="row">
<div class="six columns">
<label>Mode Of Transport</label><input type="text" name="modeoftransport">
</div>
<div class="six columns">
<label>Transhipment</label><input type="text" name="transhipment">

</div>
</div><br>
<div class="row">
<div class="six columns">
<label>Invoice no</label><input type="text" name="invoiceno">
</div>
<div class="six columns">
<label>Invoice date</label><input type="date" name="invoicedate">

</div>
</div><br>
<div class="row">
<div class="six columns">
<label>sb no</label><input type="text" name="sbno">
</div>
<div class="six columns">
<label>sb date</label><input type="date" name="sbdate">

</div>
</div><br>
<div class="row">
<div class="six columns">
<label>hs code</label><input type="text" name="hscode">
</div>
<div class="six columns">
<label>iec code</label><input type="text" name="ieccode">

</div>
</div><br>
<div class="row">
<div class="four columns">

<label>Ocean THC</label><select name="oceanthc">
<option></option>
<option> None</option>
<option>Prepaid</option>
<option>Collect</option>
</select>
</div>
<div class="four columns">
<label>Ocean Freight</label><select name="oceanfreight">
<option></option>
<option> None</option>
<option>Prepaid</option>
<option>Collect</option>
</select>
</div>
<div class="four columns">
<label>Destination THC</label><select name="destinationthc">
<option></option>
<option> None</option>
<option>Prepaid</option>
<option>Collect</option>
</select>
</div>
</div>
<div class="row">
<div class="four columns">
<label>Inland haulage</label><select name="inlandhaulage">
<option></option>
<option> None</option>
<option>Prepaid</option>
<option>Collect</option>
</select>
</div>
<div class="four columns">
<label>Destination inland haulage</label><select name="destinationinlandhaulage">
<option></option>
<option> None</option>
<option>Prepaid</option>
<option>Collect</option>
</select>
</div>
</div>
<div class="row">
<div class="four columns">
<label>No of Bls</label><input type="text" name="noofbl">
</div>
<div class="four columns">
<label>Place of issue</label><input type="text" name="placeofissue">
</div>
<div class="four columns">
<label>Date of issue</label><input type ="date" name="dateofissue">
</div>
</div>

<button type="submit" class="button button-primary" name="save" formaction="savebldetails.php">Save</button>
<button type="submit"  class="button button-primary" name="print" formaction="printbl.php">Print</button>
<button type="submit" class="button button-primary" name="update" formaction="updatebldetails.php">update</button>
</form>
</head>
</html>
