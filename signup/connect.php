<?php
function connect_data() {
        $server= "localhost";
        $user= "root";
        $password= "";
        $database="signup";
        return mysqli_connect($server,$user,$password,$database);
    }
?>