<?php
session_start();

// initializing variables
$name = "abcoffyo_shalu";
$password ="shalini@123";
$errors = array(); 
$results="";

// connect to the database
$db = mysqli_connect('localhost', 'abcoffyo_shalu', 'shalini@123', 'abcoffyo_blog');

if (isset($_POST['admin_login'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($name)) {
  	array_push($errors, "Name is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
  	$query = "SELECT * FROM  admin WHERE name='$name' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results)  >0) {
        ob_start();
    session_start();
    $_SESSION ['email'] =  $email;
    session_write_close();	
      $URL="newadm.html";  
      header ("Location: $URL"); 
  	}else {
  		array_push($errors, "Wrong name / password combination");
  	}
  }
}

