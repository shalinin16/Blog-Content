<?php
include('login3.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: newadm.php"); // Redirecting To Profile Page
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
<label>Admin Name:</label>
<input id="name" name="name" placeholder="Enter name here" type="text"><br/><br/>
<label>Admin Password:</label>
<input id="password" name="password" placeholder="Enter password here" type="password"><br//><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>
