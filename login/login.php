<?php 
    class Login {
        private $server= "localhost";
        private $user= "root";
        private $password= "";
        private $database= "signup";
        public function getProperties() {
            return mysqli_connect($this->server,$this->user,$this->password,$this->database);
        }
        public function receive_data() {
            if(isset($_POST['username'])) {
                session_start();
                $conn= $this->getProperties();
                $user= $_POST['username'];
                $password= $_POST['password'];
                $password= md5($password);
                $sql_email="SELECT email from signup where email='$user'";
                $sql_password="SELECT password from signup where password='$password'";
                $data= mysqli_fetch_assoc(mysqli_query($conn,$sql_email));
                if(mysqli_num_rows(mysqli_query($conn,$sql_email))>0 && mysqli_num_rows(mysqli_query($conn,$sql_password))>0) {
                    $_SESSION['user']= $data;
                    $token= md5(time().$data['email']);
                    setcookie('token',$token,time()+86400*30,"/");
                    $jaja= $data['email'];
                    echo $jaja;
                    $sql= "UPDATE signup set token='$token' where email= '$jaja'";
                    mysqli_query($conn,$sql);
                    header("refresh: 0.001f;url=/7am/",true,301);
                }
                else {
                    header("Location: {$_SERVER['HTTP_REFERER']}");
                }
            }
        }
        
        
    }
    $login= new Login();
    $login->receive_data();
?>