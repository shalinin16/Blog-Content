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
      Article id:<input type="text" name="articleid" value=""/><br/><br/>
      name:<input type="text" name="name" value=""/><br/><br/>
      date:<input type="date" name="date" value=""/><br/><br/>
      author:<input type="text" name="author" value=""/><br/><br/>
      Description<input type="text" name="description" value=""/><br/><br/>
          <input type="submit" name="submit" value="submit"/><br/><br/>
      
    </form>



    <?php

        if($_POST['submit'])
        {

          $blogid = $_POST['articleid'];
          $sn = $_POST['name'];
          $ps = $_POST['date'];
          $in = $_POST['author'];
          $doj = $_POST['description'];
         





            //if($si!="" && $sn!="" && $ps!="" && $in!="" && $doj!="" && $ys!="" && $des!="" && $adm!="" && $dep!=""  && $sal!="" && $email!="" && $contact!="")
          //  {

            $query="INSERT INTO ARTICLES VALUES('$articleid','$sn','$ps', '$in', '$doj' )";
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
