<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<style>
.tbox
{
	border-style:solid;
	border-color:red;
	border-radius:5px;
	width:200px;
	height:50px;
}

</style>
<title>Account Group</title>
<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">Accounts Group</h3>
<form method="post">
<div class="row">
<div class="col-md-4">
<label>
Account group name</label><input type="text" class="tbox" name="accountgroup">
</div>
<div class="col-md-4">
<label>
Account type</label><select  class="tbox" name="accounttype">
<option></option>
<option>Asset</option>
<option>Expense</option>
<option>capital</option>
<option>income</option>
<option>Liability</option>
</select>
</div>
</div><br>
<button type="submit" name="savegroup" formaction="saveaccgroup.php">Save</button>
</form>
<iframe src="viewaccgroup.php" style="background-color:white;">Viewaccount</iframe>
</body>
</head>
</html>