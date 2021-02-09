<html>
<head>
<a href="Logout.php">logout</a>
<a href="adminpage.php">adminpage</a>

<title>Dailycurrency</title>
<body>
<h4>Dailycurrency</h4>
<iframe src="viewcurrency.php" width="300" height="300"></iframe>
<form method="post" style="background-color:#99ffbb;">

Currency name<input type="text" name="currencyname">
export rate<input type="text" name="exportexchange">
import rate<input type="text" name="importexchange">
<button type="submit" name="add"  value="ADD" formaction="savecurrency.php">ADD
<button type="submit" name="delete"  value="delete" formaction="deletecurrency.php">Delete
</form>

</body>
</head>
</html>
