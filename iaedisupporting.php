<html>
<head>
<title>Supporting docs</title>
<body>
<?php
session_start();

?>
<button><a href="logout.php">Logout</a><br></button>
<form method="post">
		
jobno<input type="text" name="jobno" readonly value="<?php echo $_POST['jobno'];?>">
username<input type="text" name="username" readonly value="<?php echo $_SESSION['username'];?>"><br>
branch<input type="text" name="branch" readonly value="<?php echo $_SESSION['branch'];?>"><br>
year<input type="text" name="fy" readonly value="<?php echo $_SESSION['fy'];?>"><br>
Invoicesrno<?php

$conn = new mysqli('localhost', 'root', '', 'importair') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from iaediinvoice where jobno='$_POST[jobno]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='invoicesrno'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $invoicesrno);
              
                  $invoicesrno = $row['invoicesrno']; 
                  echo '<option>'.$invoicesrno.'</option>';
                 
}

    echo "</select>";?>
Item no<?php

$conn = new mysqli('localhost', 'root', '', 'importsea') 
or die ('Cannot connect to db');

    $result = $conn->query("select * from isediitem where jobno='$_POST[jobno]'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='itemno'>";

    while ($row = $result->fetch_assoc()) {

                  unset( $itemno);
              
                  $itemno = $row['itemno']; 
                  echo '<option>'.$itemno.'</option>';
                 
}

    echo "</select>";?>
Statement For<input type="text" name="statementfor">
doctype code no<input type="text" name="doctypecode"><br>
Chanumber<input type="text" name="chanumber">
ieccode<input type="text" name="ieccode">
Doctype<input type="text" name="doctype">
Doc code<input type="text" name="doccode">
Issued Party<input type="text" name="issuedpartyname">
Issued Party address<input type="text" name="issuedpartyaddress"><br>
Doc Ref no<input type="text" name="drn">
Place<input type="text" name="place">
issue date<input type="date" name="issuedate">
Bnf party<input type="text" name="bnfpartyname">
Bnf party address<input type="text" name="bnfpartyaddress">
<button type="submit" name="Savesupporting" formaction="saveiasupportingdetails.php">Saviaupporting</button>


</form>
</body>
</head>
</html>




