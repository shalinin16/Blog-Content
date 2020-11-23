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
$query = "SELECT * FROM blogs";
$data = mysqli_query($link,$query);

$total = mysqli_num_rows($data);

if($total != 0)
{
  ?>

  <table>
    <tr>
      <th>blogid</th>
      <th>title</th>
      <th>datecreated</th>
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
            <td>".$result['blogid']."</td>
            <td>".$result['title']."</td>
            <td>".$result['datecreated']."</td>
              <td>".$result['author']."</td>
                <td>".$result['description']."</td>
                
                <td><a href='update.php?blogid=$result[blogid]&sn=$result[title]&sp=$result[datecreated]&in=$result[author]&doj=$result[description]'>edit</a></td>
          <td><a href='deleteblog.php?si=$result[blogid]' onclick= 'return checkdelete()'>delete</a></td>

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
      <link rel="stylesheet" href="articledisp.css">
    <title>View Blogs</title>
  </head>
  <body>

  </body>
</html>
