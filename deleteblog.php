<?php
include "connection.php";

$blogid = $_GET['blogid'];
$query = "DELETE FROM BLOGS WHERE BLOGID='$blog'";
$data = mysqli_query($conn,$query);
if($data)
{
  echo "<script>alert('record deleted')</script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=localhost/Blog/displayblog.php">
  <?php

}
else {
  echo "<font color='red'> sorry delete process failed";
}
?>
