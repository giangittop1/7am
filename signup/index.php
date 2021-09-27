<?php 
   require "/xampp/htdocs/7am/signup/signup.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../signup/style.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/5622/5622249.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Signup - 7:00AM</title>
    <style>
        @media screen and (max-width: 500px) {
            .all-content {
                width: 350px;
            }
        }
        
    </style>
</head>

<body>
    <div id="main">
        <div class="all-content">
            <div class="all-content-1">
                <div class="all-content-1-1"><img width="40px" height="40px" src="../moon.png"><span style="font-size:24px;font-weight:bolder">7:00AM</span></div>
                <div class="all-content-1-2"><span style="font-size:28px;font-weight:700">Sign up for free to start listening.</span></div>
                <div class="all-content-1-3"><button style="border:none;outline:none;color:#ffffff;font-size: 15px;font-weight:700;border-radius:80px;padding:15px 33px;background-color:#1877f2">Sign up with Facebook</button></div>
                <div class="all-content-1-4">
                    <span class="all-content-1-4-1"></span>
                    <span class="all-content-1-4-2">or</span>
                    <span class="all-content-1-4-3"></span>
                </div>
                <div class="all-content-1-5">
                    <span style="font-size:16px;font-weight:700;">Sign up with your email address</span>
                </div>
            </div>
            <div class="all-content-2">
                <form method="POST" class="all-content-2-1" action="/7am/signup/signup.php">
                    <div class="all-content-2-1-1">
                        <label for="email">What's your email ?</label>
                        <input type="text" id="email" name="email" placeholder="Enter your email." autocomplete="off">
                        <span style="color:#0400FF" id="lost-email"></span>
                    </div>
                    <div class="all-content-2-1-2">
                        <label for="confirm-email">Confirm your email</label>
                        <input type="text" id="confirm-email" name="confirm-email" placeholder="Enter your email again." autocomplete="off">
                        <span style="color:#ff0000" id="lost-again-email"></span>
                    </div>
                    <div class="all-content-2-1-3">
                        <label for="password">Create your password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password." autocomplete="off">
                        <span style="color:#ff0000" id="lost-password"></span>
                    </div>
                    <div class="all-content-2-1-4">
                        <label for="nickname">What should we call you?</label>
                        <input type="text" id="nickname" name="nickname" placeholder="Enter a profile name." autocomplete="off">
                        <span style="color:#ff0000" id="lost-profile"></span>
                        <p style="font-size:12px;font-weight:600">This appears on your profile.</p>
                    </div>
                    <span></span>
                    <div class="all-content-2-1-5">
                        <p for="birthday">What's your birth of date?</p>
                        <div class="all-content-2-1-6">
                            <div class="all-content-2-1-6-1">
                                <div class="month">
                                    <span style="font-weight:500">Month</span>
                                    <select name="month" id="month">
                                        <option style="background-color:#929191E7;color:#EBE7E7" value="0" disabled selected>Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option> 
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">Septemper</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>

                                <div class="date">
                                    <span style="font-weight:500">Day</span>
                                    <input id="date" type="text" name="date" placeholder="DD" autocomplete="off">
                                </div>
                                <div class="year">
                                    <span style="font-weight:500">Year</span>
                                    <input id="year" type="text" name="year" placeholder="Year" autocomplete="off">
                                </div>
                            </div>
                            <div class="all-content-2-1-6-2">
                                <span style="color:red" id="invalid-month"></span>
                                <span style="color:red" id="invalid-date"></span>
                                <span style="color:red" id="invalid-year"></span>
                            </div>
                        </div>
                        <div class="all-content-2-1-7">
                            <p style="font-size:14px;font-weight:600">What's your gender?</p>
                        </div>
                    </div>
                    <div class="all-content-2-1-8">
                        <div class="gender-male container">
                            <input type="radio" id="gender" name="sex" value="male">
                            <span>Male</span>
                        </div>
                        <div class="gender-female container">
                            <input type="radio" id="gender" name="sex" value="female">
                            <span>Female</span>
                        </div>
                        <div class="no-gender container">
                            <input type="radio" id="gender" name="sex" value="non binary">
                            <span style="white-space:nowrap">Non-binary</span>
                        </div>
                    </div>
                    <span style="color:red;width:100%;text-align:left" id="lost-gender"></span>
                    <div class="all-content-2-1-9">
                        <input style="width:14px;height:14px" type="checkbox">
                        <span style="font-size:14px">I agree with all <a style="font-size:13px;font-style: italic;color:#1db954" href="javascript:void(0)">service policy</a>  7:00AM 's</span>
                    </div>
                    <div class="all-content-2-1-12">
                        <span style="color:red" id="lost-agree"></span>
                    </div>
                    <div class="all-content-2-1-10">
                        <input type="submit" value="Sign up" onclick="return sent();">
                    </div>
                    <div class="all-content-2-1-11">
                        <span style="font-weight:520">You have account? <a style="color:#1ed760" href="../login/">Login</a> </span>
                    </div>
                </form>

            </div>
        </div>
        <script>
            $(document).ready(function() {
                $("#email").on("keyup",function() {
                    let email= $(this).val()
                    $.ajax({
                        url: "/7am/signup/distinct.php",
                        method: "POST",
                        data: {
                            email:email
                        },
                        success: function(result) {
                            $("#lost-email").html(result)
                        }
                    })
                })
                
            })
        </script>
        <script>
            function validateEmail(email) {
                const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                return re.test(email)
            }
            function validatePassword(password) {
                const re =/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/
                return re.test(password)
            }
            const email = document.querySelector('#email')
            const confirm_email = document.querySelector('#confirm-email')
            const password = document.querySelector('#password')
            const nickname = document.querySelector('#nickname')
            const month = document.querySelector("#month")
            const date = document.querySelector("#date")
            const year = document.querySelector("#year")
            let gender1 = document.querySelector("#gender")
            
            
            email.addEventListener("focusout", function() {
                if (this.value === "") {
                    document.querySelector("#lost-email").innerHTML = "x You need to enter your email."
                    this.style.borderColor = "red"
                } else if (validateEmail(this.value) === false) {
                    document.querySelector("#lost-email").innerHTML = "x Please enter valid your email."
                    this.style.borderColor = "red"
                }
                
                else {
                    document.querySelector("#lost-email").innerHTML = ""
                    this.style.borderColor = "initial"
                }
            })
            confirm_email.addEventListener("focusout", function() {
                if (this.value === "") {
                    document.querySelector("#lost-again-email").innerHTML = "x You need to enter confirm your email."
                    this.style.borderColor = "red"
                } else if (this.value !== email.value) {
                    document.querySelector("#lost-again-email").innerHTML = "x The email address is don't match."
                    this.style.borderColor = "red"
                } else {
                    document.querySelector("#lost-again-email").innerHTML = ""
                    this.style.borderColor = "initial"
                }
            })
            password.addEventListener("focusout", function() {
                if (this.value === "") {
                    console.log(111);

                    document.querySelector("#lost-password").innerHTML = "x You need to enter your password."
                    this.style.borderColor = "red"
                }
                else if(validatePassword(this.value)===false) {
                    console.log(111);
                    document.querySelector("#lost-password").innerHTML="x Your password must have minumum 8 characters at least, one uppercase letter, one lowercase letter and one number.";
                    this.style.borderColor= "red"
                }
                else {
                    document.querySelector("#lost-password").innerHTML = ""
                    this.style.borderColor = "initial"
                }
            })
            nickname.addEventListener("focusout", function() {
                if (this.value === "") {
                    document.querySelector("#lost-profile").innerHTML = "x You need to enter your name."
                    this.style.borderColor = "red"
                } else {
                    document.querySelector("#lost-profile").innerHTML = ""
                    this.style.borderColor = "initial"
                }
            })
            date.addEventListener("focusout", function() {
                if (this.value === "") {
                    document.querySelector("#invalid-date").innerHTML = "x Select your birth date."
                    this.style.borderColor = "red"
                } else {
                    document.querySelector("#invalid-date").innerHTML = ""
                    this.style.borderColor = "initial"
                }
            })
            year.addEventListener("focusout", function() {
                if (this.value === "") {
                    document.querySelector("#invalid-year").innerHTML = "x Select your birth year."
                    this.style.borderColor = "red"
                } else {
                    document.querySelector("#invalid-year").innerHTML = ""
                    this.style.borderColor = "initial"
                }
            })
            month.addEventListener("focusout", function() {
                if (month.selectedIndex === 0) {
                    document.querySelector("#invalid-month").innerHTML = "x Select your birth month."
                    this.borderColor = "red"
                } else {
                    document.querySelector("#invalid-month").innerHTML = ""
                    this.borderColor = "initial"
                }
            })
        </script>
          <script>
            function sent() {
                if (email.value === "" || confirm_email.value === "" || password.value === "" || nickname.value === "" || date.value === "" || year.value === "" || gender.checked === false ||  month.selectedIndex === 0 || document.querySelector("#lost-email").innerHTML==="x Email address is already exists.") {
                    document.querySelector("#invalid-month").innerHTML = "x Select your birth month."
                    document.querySelector("#invalid-year").innerHTML = "x Select your birth year."
                    document.querySelector("#invalid-date").innerHTML = "x Select your birth date."
                    document.querySelector("#lost-profile").innerHTML = "x You need to enter your name."
                    document.querySelector("#lost-password").innerHTML = "x You need to enter your password."
                    document.querySelector("#lost-again-email").innerHTML = "x You need to enter confirm your email."
                    document.querySelector("#lost-email").innerHTML = "x You need to enter your email." || "x Email address is already exists."
                    document.querySelector("#lost-gender").innerHTML = "x Select your gender."
                    document.querySelector("#lost-agree").innerHTML= "x Please agree with all services policy."
                    return false;
                } else {
                    return true;
                }
            }
        </script>
        
</body>

</html>