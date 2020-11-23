<style>

td
{
  padding:10px;
}
  body{
    background-image:url('');
    background-size:cover;
    background-repeat:no-repeat;
    margin:0;
  }

</style>

<?php
include "connection.php";
error_reporting(0);
$query = "SELECT * FROM users";
$data = mysqli_query($link,$query);

$total = mysqli_num_rows($data);

if($total != 0)
{
  ?>

  <table>
    <tr>
      <th>username</th>
      <th>email</th>
      <th>password</th>
    
<!--      <th>admin_id</th>-->
    </tr>

  <?php
  while($result = mysqli_fetch_assoc($data))
  {

    echo "<tr>
            <td>".$result['username']."</td>
            <td>".$result['email']."</td>
            <td>".$result['password']."</td>


            </tr>";

  }
}
else
{
  echo "no records";
}



?>
</table>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Visitors</title>
      <link rel="stylesheet" href="articledisp.css">
  </head>
  <body>

  </body>
</html>
