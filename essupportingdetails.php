<html>
<head>
<link rel="stylesheet" type="text/css" href="Skeleton/css/skeleton.css"> 
<link rel="stylesheet" type="text/css" href="Skeleton/css/normalize.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Supporting docs</title>
<body>
<?php
session_start();
unset($_SESSION['itemno'])


?>
<button><a href="logout.php">Logout</a><br></button>
<form method="post">
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
	<div class="row" style="position:relative; left:20;">
	<div class="col-md-3">
<label>Statement For</label><input type="text" name="statementfor">
</div>
<div class="col-md-3">
<label>Irn no</label><input type="text" name="irnno">
</div>
<div class="col-md-3">
<label>Doctype</label><input type="text" name="doctype">
</div>
<div class="col-md-3">
<label>Doc code</label><input type="text" name="doccode">
</div>
</div><br>
<div class="row" style="position:relative; left:20;">
	<div class="col-md-6">
<label>Issued Party</label><input type="text" name="issuedpartyname">
</div>
<div class="col-md-6">
<label>Issued Party address</label><input type="text" name="issuedpartyaddress">
</div>
</div>
<div class="row" style="position:relative; left:20;">
<div class="col-md-6">
<label>Doc Ref no</label><input type="text" name="drn">
</div>

<div class="col-md-6">
<label>Place</label><input type="text" name="place">
</div>
</div><br>
<div class="row" style="position:relative; left:20;">
<div class="col-md-3">
<label>issue date</label><input type="date" name="issuedate">
</div>
<div class="col-md-3">
<label>Exp Date</label><input type="date" name="expirydate">
</div>
<div class="col-md-3">
<label>Bnf party</label><input type="text" name="bnfpartyname">
</div>
<div class="col-md-3">
<label>Bnf party address</label><input type="text" name="bnfpartyaddress">
</div>
</div>
<button type="submit" name="Savesupporting" formaction="saveessupportingdetails.php">Savesupporting</button>


</form>
</body>
</head>
</html>




