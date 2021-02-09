<?php
session_start();
if(isset($_POST['username']))
{
$username=$_POST['username']; // Get username
$password=$_POST['password'];

}
?>

<html>
<head>
<style>


.login {
	position:relative;
	top:70px;
	margin-top:10px;
  background: #eceeee;
  border: 3px solid #42464b;
  border-radius: 6px;
  height: 400px;
  margin: 20px auto 0;
  width: 320px;
}
input{
    outline: 0;
    background: darken($white, 5%);
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    +border-top-radius(3px);
    +border-bottom-radius(3px);
    +box-sizing(border-box);
    font-size: 14px;
}
 button
 {
    
    background: red;
    width: 100%;
	color:white;
	height: 40px; 
 }
 label{
	 text-transform:uppercase;
	 letter-spacing: 3px;
	 font-weight: bold;
 }
 h3{
	 color:blue;
	 text-transform:camelcase;
	 letter-spacing: 3px;
	 font-weight: bold;
 }
  marquee{
	 text-transform:uppercase;
	 letter-spacing: 3px;
	 font-weight: bold;
	 font-size:2.2em;
 }
</style>


<meta charset="UTF-8">
<title>User login and tracking in PHP using PHP OOPs Concept</title>

<body style="background-color:#ff664d;">    
<marquee style="color:orange;">Welcome to amrit FMS</marquee>
<form name="login" method="post" >
  <div class="login" align="center">
  <h3>Login</h2>
  <label>Username </label>
  <input name="username" id="username" placeholder="username" type="text" value="" required /><br><br><br>
  <label>Password </label>
  <input name="password" type="password"id="password" placeholder="password" value="" required /><br>
  <button  type="submit" name="login" formaction="authenticate.php">Login</button>
  </div>
</form>
    
    
    
    
    
  </body>
  </head>
</html>
