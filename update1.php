<?php
  include "connection.php";
error_reporting(0);
$_GET['articleid'];
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
      articleid:<input type="text" name="articleid" value="<?php echo $_GET['articleid']; ?>"/><br/><br/>
      name:<input type="text" name="name" value="<?php echo $_GET['sn']; ?>"/><br/><br/>
      date:<input type="date" name="date" value="<?php echo $_GET['sp']; ?>"/><br/><br/>
      author:<input type="text" name="author" value="<?php echo $_GET['in']; ?>"/><br/><br/>
      description:<input type="text" name="description" value="<?php echo $_GET['doj']; ?>"/><br/><br/>
         <input type="submit" name="submit" value="update"/><br/><br/>
      
    </form>



    <?php

        if($_GET['submit'])
        {
          $articleid = $_GET['articleid'];
          $name = $_GET['name'];
          $date = $_GET['date'];
          $author = $_GET['author'];
          $description = $_GET['description'];
         
        //  $query = "UPDATE SCIENTISTS SET scientist_name='$scientist_name' , scientist_password='$scientist_password' , invention='$invention' , date_of_join='$date_of_join', yeras_served='$date_of_invention' , designation='$designation' , admin_id='$admin_id' , department_id='$department_id'  , salary='$salary'  , email_id='$email_id' , contact_number='$contact_number'  WHERE scientist_id='$scientist_id' ";
            $query = "UPDATE ARTICLES SET articleid='$articleid' , name='$name' , date='$date' , author='$author' , description='$description' ";
          $data = mysqli_query($conn , $query);

          if($data)
          {
            echo "<font color='green'>record updated successfully.</font><a href='displayarticle.php'> Check updated list here</a>";
          }
          else{
            echo "<font color='red'>record not updated.</font><a href='displayarticle.php'> Check updated list here</a>< ";
          }
        }
        else {
          echo "<font color='blue'>click on update button to save the changes</font>";
        }

    ?>
  </body>
</html>
