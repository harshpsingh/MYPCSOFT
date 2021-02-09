<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script>
  function getvoucherdate(val) {
	$.ajax({
	type: "POST",
	url: "getvoucherdate.php",
	data:'voucherno='+val,
	success: function(data){
		$("#voucherdate").html(data);
	}
	});
}
</script>
<title>Trade Vouchers</title>
<button><a href="Logout.php">logout</a></button>
<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">Trade Vouchers</h3>

<?php
session_start();
$_SESSION['division']=$_POST['division'];
if (isset($_POST["voucherno"])) 
{
	$_SESSION['voucherno']=$_POST['voucherno'];
	
}
if (isset($_POST["voucherdate"])) 
{
	$_SESSION['voucherdate']=$_POST['voucherdate'];
	
}


?>
<form method="post">
<div class="row">
<div class="col-md-3">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>">
</div>
<div class="col-md-3">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="col-md-3">
Division<input type="text" name="division" readonly value="<?php echo $_SESSION['division'];?>">
</div>
<div class="col-md-3">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
<label>Voucherno</label><?php

$conn = new mysqli('localhost', 'root', '', 'accountmaster') 
or die ('Cannot connect to db');

    $result = $conn->query("select voucherno from journalvoucher where division='$_SESSION[division]'");
    
    echo "<html>";
    echo "<body>";
	
    echo "<select name='voucherno' id='voucherno' onChange=getvoucherdate(this.value);>";
	echo '<option></option>';

    while ($row = $result->fetch_assoc()) {

                  unset( $voucherno);
              
                  $voucherno = $row['voucherno']; 
                  echo '<option>'.$voucherno.'</option>';
                 
}

    echo "</select>";?>
	</div>
	<div class="col-md-4">
	<label>Voucherdate</label>
	<select name='voucherdate' id='voucherdate' value="<?php echo $_SESSION["voucherdate"];?>">
	<option></option>
	</select>
	</div>
	
	<div class="col-md-4">
	<label>Invoiceno</label>
	
	<input type="text" name="invoiceno">
	</div>
	</div>
	<div class="row">
	<div class="col-md-4">
	<label>Docketno</label>
	
	<input type="text" name="docketno">
	</div>
	
	
	<div class="col-md-4">
	<label>chequeno</label>
	
	<input type="text" name="chequeno">
	</div>
	
	<div class="col-md-4">
	<label>Narration</label>
	
	<input type="text" name="narration">
	</div>
	</div><br>
	
	<button type="submit" class="btn btn-primary" formaction="savetradevoucher.php">Save</button>
	<button type="submit" class="btn btn-primary" formaction="tradevouchercharges.php">tradevouchercharges</button>

</body>
</head>
</html>