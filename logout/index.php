<?php
 session_start();
mysqli_connect("localhost","root","","signup");
 if(isset($_SESSION['user'])) {
    unset($_SESSION['user']);
 }

 header("refresh: 0;url=/7am/",true,301);

 ?>