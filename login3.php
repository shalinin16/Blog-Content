<?php
  include "connection.php";
  error_reporting(0);
?>

<?php
session_start(); // Starting Session
error_reporting(0);
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit']))
{
if (empty($_POST['name']) || empty($_POST['password']))
{
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username = $_POST['name'];
$password = $_POST['password'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "Blog");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT name, password from admin where name=? AND password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $username; // Initializing Session
header("location: newadm.php"); // Redirecting To Profile Page
}
mysqli_close($conn); // Closing Connection
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<!--    <a  style="margin-left:1300px" href="registers.php">New User?Register Here</a>-->

  </body>
</html>
