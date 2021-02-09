<html>
<head>
</head>
<title> Country Details</title>
<header>
<button><a href="Logout.php">logout</a></button>
<button><a href="adminpage.php">adminpage</a></button>
</header>
<body>
<iframe src="viewcountry.php" width=500" height="400"></iframe>
<form name="addcountry" method="post" style="background-color:#99ffbb;">
Countryname<input type="text" name="countryname">
Countrycode<input type="text" name="countrycode">
<button type="submit" name="add" formaction="savecountry.php">Add</button>
<button type="submit" name="modify" formaction="updatecountry.php" >Modify</button>
<button type="submit" name="delete" formaction="deletecountry.php">Delete</button>
</body>
</html>