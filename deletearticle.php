<?php
include "connection.php";

$articleid = $_GET['articleid'];
$query = "DELETE FROM ARTICLES WHERE ARTICLEID='$articleid'";
$data = mysqli_query($conn,$query);
if($data)
{
  echo "<script>alert('record deleted')</script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=localhost/Blog/displayarticle.php">
  <?php

}
else {
  echo "<font color='red'> sorry delete process failed";
}
?>
