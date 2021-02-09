<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<title>outstanding Receipts</title>
<button><a href="Logout.php">logout</a></button>
<body style="background-color:#75ffc1;">
<h3 style="color:#ff6305;">outstanding Receipts</h3>

<form method="post">


<div class="row">
<div class="col-md-3">
partyname<input type="text" name="partyname">
</div>
<div class="col-md-3">
billno<input type="text" name="billno" >
</div>
<div class="col-md-3">
date<input type="date" name="billdate">

</div>
<div class="col-md-3">
docketno<input type="text" name="docketno">

</div>
</div><br>
<div class="row">
<div class="col-md-3">
awb/blno<input type="text" name="blawbno">
</div>
<div class="col-md-3">
clientinvoice<input type="text" name="clientinvoiceno">
</div>
<div class="col-md-3">
dueamount<input type="text" name="dueamount">

</div>
<div class="col-md-3">
status<select name="status" >
<option>Due </option>
<option>Recieved</option>
</select>
</div>
</div><br>
<div class="row">
<div class="col-md-3">
paidamont<input type="text" name="paidamount">
</div>
<div class="col-md-3">
paiddate<input type="date" name="paiddate" >
</div>
</div><br>
<button type="submit" name="saveout" formaction="saveoutr.php">Save</button>
<button type="submit" name="modify" formaction="updateoutr.php">modify</button>
<button type="submit" name="view" formaction="viewoutr.php">view</button>
</form>
</body>
<?head>
</html>