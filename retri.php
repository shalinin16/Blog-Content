<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
    body{
        background-image: url('https://image.shutterstock.com/image-photo/blurred-white-gradient-colorful-light-260nw-1693320463.jpg');
        background-repeat: no-repeat;
          background-size:cover;
    }
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
    <div id="content">
<?php
        error_reporting(0);
     $db = mysqli_connect("localhost", "root", "", "Blog");
    $msg = "";
    $result = mysqli_query($db, "SELECT * FROM images");
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
    </div>
    </body>
</html>