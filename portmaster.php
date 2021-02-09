<html>
<head>
<a href="Logout.php">logout</a>
<a href="mainpage1.php">mainpage</a>


<title>Container master</title>
<body>

<h4>Port master</h4>
<iframe src="viewport.php" width="500" height="300"></iframe>
<form method="post"  >
Port name<input type="text" name="portname">
Port code<input type="text" name="portcode">
Country name<input type="text" name="countryname">
<button type="submit" name="add"  value="ADD" formaction="addport.php">ADD
<button type="submit" name="delete"  value="delete" formaction="deleteport.php">Delete
<button type="submit" name="modify"  value="modify" formaction="updateport.php">Modify
</form>
</body>
</head>
</html>

