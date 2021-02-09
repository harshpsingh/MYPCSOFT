<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<title>Invoices</title>
<body style="background-color:#ff8400">
<?php
session_start();

?>
<form method="post">
<div class="row">
<div class="four columns">
<label>Docketno</label><?php
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
</div>
<div class="four columns">
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>">
</div>
<div class="four columns">
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>">
</div>
</div>
<button type="submit" name="save" formaction="serviceinvoiceair.php" style="color:red; background-color:purple">Serviceinvoice</button>

</form>
</body>
</head>
</html>