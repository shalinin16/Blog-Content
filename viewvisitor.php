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
$query = "SELECT * FROM visitors";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

if($total != 0)
{
  ?>

  <table>
    <tr>
      <th>visitor_id</th>
      <th>visitor_name</th>
      <th>visitor_password</th>
      <th>visitor_email</th>
      <th>date_visited</th>
      <th>admin_id</th>
    </tr>

  <?php
  while($result = mysqli_fetch_assoc($data))
  {

    echo "<tr>
            <td>".$result['visitor_id']."</td>
            <td>".$result['visitor_name']."</td>
            <td>".$result['visitor_password']."</td>
              <td>".$result['visitor_email']."</td>
                <td>".$result['date_visited']."</td>
                <td>".$result['admin_id']."</td>
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
    <title></title>
  </head>
  <body>

  </body>
</html>
