<html>
<head>
<body>
<h1> dashboard</h1>
<a href="Logout.php">logout</a>

<form  method="post">
<?php
session_start();
?>
username<input type="text" name="username"id="username" value=" <?php echo $_SESSION['username'];?>"><br>
city<input type="text" name="city"id="city" value="<?php echo $_SESSION['branch'];?>"><br>
FinancialYear<input type="text" name="financialyear" id="fy" value="<?php echo $_POST['financialyear'];?>"><br>
Branch<input type="text" name="branch" id="fy" value="<?php echo $_POST['division'];?>"><br>
</form>

<div  class="vertical-menu">
<ul>
<li class="masters"><a href='#'>Masters</a>
	<ul style="list-style:none">
	<li><a href='masterdoc.php'>Documents</a></li>
	<li><a href='shippermaster.php'>Shipper</a></li>
	<li><a href='consigneemaster.php'>consignee</a></li>
	<li><a href='shiplinemaster.php'>shipline</a></li>
	<li><a href='overseasagentmaster.php'>overseasagent</a></li>
	
	<li><a href='subagentmaster.php'>subagent</a></li>
	<li><a href='iataagentmaster.php'>iataagent</a></li>
	<li><a href='othercompanymaster.php'>othercompany</a></li>
	<li><a href='containermaster.php'>container</a></li>
	<li><a href='portmaster.php'>PORT</a></li>
	<li><a href='currencymaster.php'>dailycurrency</a></li>
	</ul>
</li>
<li class="operation" style="list-style:none"><a href='#'>Operation</a>
	<ul>
	<li><a href='shipping_registration.php'>Shipping registration</a></li>
	<li><a href='viewshipmentregisteration.php'>viewshipmentregisteration</a></li>
	<li><a href='recievingdocuments.php'>Recieving documents</a></li>
	<li><a href='hblstock.php'>HBL Stock</a></li>
	<li><a href='jobbooking.php'>Job Booking</a></li>
	<li><a href='inwardinvoice.php'>Inwardinvoice</a></li>
	</ul>
</li>
<li class="EDI" ><a href='#'>EDI</a>
	<ul >
	<li><a href='#'>Sub Link 1</a></li>
	<li><a href='#'>Sub Link 2</a></li>
	<li><a href='#'>Sub Link 3</a></li>
	<li><a href='#'>Sub Link 4</a></li>
	</ul>
</li>
<li class="Accounts"><a href='#'>Accounts</a>
	<ul>
	<li><a href='#'>Sub Link 1</a></li>
	<li><a href='#'>Sub Link 2</a></li>
	</ul>
</li>
<li class="Reports"><a href='#'>Reports</a>
	<ul style="list-style:none">
	<li><a href='daily.php'>daily</a></li>
	<li><a href='#'>Sub Link 2</a></li>
	</ul>
</li>
</ul>
</div>
</body>
</head>
</html>