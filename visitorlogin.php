<?php
include('login5.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: bloghomepage.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style4.css" rel="stylesheet" type="text/css">
</head>
<body>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>Visitor Email:</label>
<input id="email" name="email" placeholder="Enter email here" type="text"><br/><br/>
<label>Visitor Password:</label>
<input id="password" name="password" placeholder="Enter password here" type="password"><br//><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>
