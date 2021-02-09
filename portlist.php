<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<title> Port Details</title>
<header>
<button><a href="Logout.php">logout</a></button>
<button><a href="adminpage.php">adminpage</a></button>
</header>
<body>
<iframe src="viewport.php" width=600" height="400"></iframe>

<form name="addport" method="post" style="background-color:#99ffbb;">
<div class="row">
<div class="col-md-4">
Port name<input type="text" name="portname">
</div>
<div class="col-md-4">
Port code<input type="text" name="portcode">
</div>
</div><br>
<div class="row">
<div class="col-md-4">
Country name<input type="text" name="countryname">
</div>
<div class="col-md-4">
Country code<input type="text" name="countrycode">
</div>
</div><br>
<button type="submit" name="add" formaction="saveport.php">Add</button>
<button type="submit" name="modify" formaction="updateport.php" >Modify</button>
<button type="submit" name="delete" formaction="deleteport.php">Delete</button>
</form>
</body>
</html>