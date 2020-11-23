<?php
  include "connection.php";
error_reporting(0);
$_GET['blogid'];
$_GET['sn'];
$_GET['sp'];
$_GET['in'];
$_GET['doj'];

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="GET">
      blogid:<input type="text" name="blogid" value="<?php echo $_GET['blogid']; ?>"/><br/><br/>
      title:<input type="text" name="title" value="<?php echo $_GET['sn']; ?>"/><br/><br/>
      datecreated:<input type="date" name="datecreated" value="<?php echo $_GET['sp']; ?>"/><br/><br/>
      author:<input type="text" name="author" value="<?php echo $_GET['in']; ?>"/><br/><br/>
      description:<input type="text" name="description" value="<?php echo $_GET['doj']; ?>"/><br/><br/>
         <input type="submit" name="submit" value="update"/><br/><br/>
      
    </form>



    <?php

        if($_GET['submit'])
        {
          $blogid = $_GET['blogid'];
          $title = $_GET['title'];
          $datecreated = $_GET['datecreated'];
          $author = $_GET['author'];
          $description = $_GET['description'];
         
        //  $query = "UPDATE SCIENTISTS SET scientist_name='$scientist_name' , scientist_password='$scientist_password' , invention='$invention' , date_of_join='$date_of_join', yeras_served='$date_of_invention' , designation='$designation' , admin_id='$admin_id' , department_id='$department_id'  , salary='$salary'  , email_id='$email_id' , contact_number='$contact_number'  WHERE scientist_id='$scientist_id' ";
            $query = "UPDATE BLOGS SET blogid='$blogid' , title='$title' , datecreated='$datecreated' , author='$author' , description='$description' ";
          $data = mysqli_query($conn , $query);

          if($data)
          {
            echo "<font color='green'>record updated successfully.</font><a href='displayblog.php'> Check updated list here</a>";
          }
          else{
            echo "<font color='red'>record not updated.</font><a href='displayblog.php'> Check updated list here</a>< ";
          }
        }
        else {
          echo "<font color='blue'>click on update button to save the changes</font>";
        }

    ?>
  </body>
</html>
