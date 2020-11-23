<?php
include('session2.php');
if(!isset($_SESSION['login_user'])){
header("location: visitorlogin.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style6.css" rel="stylesheet" type="text/css">
<style>
  body{
    background-image:url('');
    background-size:cover;
    background-repeat:no-repeat;
    margin:0;
  }

  .wrap{
    width:100%;
    height:60px;
    margin:0;
    background:#366b82;
  }
  .navbar{
    height:60px;
    padding:0;
    margin:0;
    position:absolute;
    border-right:1px solid #54879d;
  }

  .navbar li{
    height:auto;
    width:250px;
    float:left;
    text-align:center;
    list-style:none;
    font-weight:bold;
    font-size:14px;
    font-family:Arial;
    padding:0;
    margin:0;
    background:#366b82;
  }

  .navbar a{
    padding:22px;
    border-left:1px solid #54879d;
    border-right:1px solid #1f5065;
    text-decoration:none;
    color:white;
    display:block;
  }

  .navbar li:hover, a:hover{
    background:#54879d;
  }
  </style>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome  <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout2.php">Log Out</a></b>
</div>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/>
<div class="wrap">
  <ul class="navbar">
    <li><a href="feedback.php">FEEDBACK</a></li>
    <li><a href="scientistdisplay.php">VIEW SCIENTISTS</a></li>
    <li><a href="missionsdisplay.php">VIEW MISSIONS</a></li>
    <li><a href="contactus.php">CONTACT US</a></li>

    <li><a href="index.php">HOME</a></li>


</body>
</html>
