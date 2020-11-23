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
$query = "SELECT * FROM articles";
$data = mysqli_query($link,$query);

$total = mysqli_num_rows($data);

if($total != 0)
{
  ?>

  <table>
    <tr>
      <th>articleid</th>
      <th>name</th>
      <th>date</th>
      <th>author</th>
      <th>description</th>
        <th>Edit</th>
        <th>Delete</th>
<!--      <th>admin_id</th>-->
    </tr>

  <?php
  while($result = mysqli_fetch_assoc($data))
  {

    echo "<tr>
            <td>".$result['articleid']."</td>
            <td>".$result['name']."</td>
            <td>".$result['date']."</td>
              <td>".$result['author']."</td>
                <td>".$result['description']."</td>
                
                  <td><a href='update1.php?articleid=$result[articleid]&sn=$result[name]&sp=$result[date]&in=$result[author]&doj=$result[description]'>edit</a></td>
          <td><a href='deletearticle.php?si=$result[articleid]' onclick= 'return checkdelete()'>delete</a></td>

            </tr>";

  }
}
else
{
  echo "no records";
}



?>
</table>

<script>
function checkdelete()
{
  return confirm('Are you sure you want to delete this data???');
}
</script>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Articles</title>
      <link rel="stylesheet" href="articledisp.css">
  </head>
  <body>

  </body>
</html>
