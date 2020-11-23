<?php
  include "connection.php";
  error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <form action="" method="POST">
      Blog id:<input type="text" name="blogid" value=""/><br/><br/>
      title:<input type="text" name="title" value=""/><br/><br/>
      datecreated:<input type="date" name="datecreated" value=""/><br/><br/>
      author:<input type="text" name="author" value=""/><br/><br/>
      Description<input type="text" name="description" value=""/><br/><br/>
          <input type="submit" name="submit" value="submit"/><br/><br/>
      
    </form>



    <?php

        if($_POST['submit'])
        {

          $blogid = $_POST['blogid'];
          $sn = $_POST['title'];
          $ps = $_POST['datecreated'];
          $in = $_POST['author'];
          $doj = $_POST['description'];
         





            //if($si!="" && $sn!="" && $ps!="" && $in!="" && $doj!="" && $ys!="" && $des!="" && $adm!="" && $dep!=""  && $sal!="" && $email!="" && $contact!="")
          //  {

            $query="INSERT INTO BLOGS VALUES('$blogid','$sn','$ps', '$in', '$doj' )";
            $data = mysqli_query($link,$query);

            if($data)
            {
              echo "data inserted into database";
            }
        //  }
        else
        {
                echo "all fields are required";
        }
      }


    ?>
  </body>
</html>
