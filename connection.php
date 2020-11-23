<?php
$link = mysqli_connect("localhost", "abcoffyo_shalu", "shalini@123", "abcoffyo_blog");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>