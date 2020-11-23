<!--20.contactform.php-->
<?php ob_start(); ?>
<?php
  include "connection.php";
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comment Form</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
            .commentForm{
                border:1px solid #7c73f6;
                margin-top: 50px;
                border-radius: 15px;
            }
        </style> 

    </head>
        <body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 contactForm">
            <h1>Leave a reply</h1>

            <form action="comment.php" method="GET">
                <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control" value=""/>
                </div>
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Email" class="form-control" value=""/>
                </div>
                <div class="form-group">
                <label for="comment">Comment:</label>
                    <textarea name="comment" id="message" class="form-control" rows="5"></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-success btn-lg" value="Post Comment">
            
            </form>
            
            
        </div>
    </div>
</div>
            
            <?php

if($_GET['submit'])
        {
   // $error = '<p><strong>Fill out all fields</strong></p>';
    // $resultMessage = '<div class="alert alert-danger">' . $error .'</div>'; 

          $name = $_GET['name'];
          $email = $_GET['email'];
          $comment = $_GET['comment'];

          if($name!="" && $email!="" && $comment!="")
          {
            $query="INSERT INTO COMMENTS VALUES('$name','$email','$comment')";
            $data = mysqli_query($link,$query);

            if($data)
            {
              echo "Thank you for visiting!!!Your response has been recorded.";
            }
          }
          else
          {
            $error = '<p><strong>Fill out all fields</strong></p>';
            $resultMessage = '<div class="alert alert-danger">' . $error .'</div>'; 
            echo $resultMessage;
              
          }
        }

   
?>
<!--
           
-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>
<?php ob_flush(); ?>