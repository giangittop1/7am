<?php 
    include "/xampp/htdocs/7am/signup/connect.php";
    $conn= connect_data();
    if(isset($_POST['email'])) {
        $email= $_POST['email'];
        $password= $_POST['password'];
        $nickname= $_POST['nickname'];
        $month= $_POST['month'];
        $date= $_POST['date'];
        $year= $_POST['year'];
        $gender= $_POST['sex'];
        $query_email= "SELECT email from signup where email='$email'";
        $password=md5($password);
        if(mysqli_num_rows(mysqli_query($conn,$query_email))>0) {
            $exist= "<span style='color:red'>Email address already exists</span>";
            exit();
        }
        $insert_statement= "INSERT INTO signup(email,password,profile_name,date,month,year,gender) 
        values('$email','$password','$nickname','$month','$date','$year','$gender')";
        $execute_statement= mysqli_query($conn,$insert_statement);
        if($execute_statement) {
            echo "Sign up successfully";
            header("refresh: 2;url=../login/",true,301);
        }
        else {
            echo "Error ! Please try again later";
        }
        exit();
}
?>