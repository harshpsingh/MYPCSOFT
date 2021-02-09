<html>
<head>
<a href="Logout.php">logout</a>
<a href="mainpage1.php">mainpage</a>
<title>consingee name</title>
<body>
<h4>consigneename</h4>
<iframe src="viewconsignee.php" width="1300" height="300"></iframe>
<form method="post"  >

consignee<input type="text" name="nameofconsignee">
SR No<input type="text" name="srno">
Address1<input type="text" name="address1">
Address2<input type="text" name="address2">
PIN<input type="text" name="pin"><br>
City<input type="text" name="city">
State<input type="text" name="state">
Country<input type="text" name="country">
Phone<input type="text" name="phone">0
Fax<input type="text" name="fax">
Email<input type="text" name="email"><br>
Mobile<input type="text" name="mobile">
Contactperson<input type="text" name="contactperson">
Tan no<input type="text" name="tanno">
citycode<input type="text" name="citycode">
gstintype<input type="text" name="gstintype"><br>
gststatename<input type="text" name="gststatename">
gststatecode<input type="text" name="gststatecode">
gstin<input type="text" name="gstin">
sez<input type="text" name="sez">



<button type="submit" name="add"  value="ADD" formaction="saveconsignee.php">ADD
<button type="submit" name="delete"  value="delete" formaction="deleteconsignee.php">Delete
</form>

</body>
</head>
</html>
