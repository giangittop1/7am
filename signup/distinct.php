<?php
    include "/xampp/htdocs/7am/signup/connect.php";
    $conn= connect_data();
    if(isset($_POST['email'])) {
        $email= $_POST['email'];
        $sql_query= "SELECT email FROM signup where email='$email'";
        if(mysqli_num_rows(mysqli_query($conn,$sql_query))>0) {
            echo "x Email address is already exists.";
        }
    }
?>