<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/5622/5622249.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/7am/login/style.css">
    <title>Log in - 7:00AM</title>
</head>

<body>
    <div id="main">
        <div class="all-page-1">
            <div class="all-page-1-1"><img width="60" height="60" src="../moon.png"></div>
            <div class="all-page-1-2"><span style="font-family:sans-serif;font-size:26px;font-weight:700">7:00AM</span></div>
        </div>
        <div class="all-page-2">
            <div class="all-page-2-1"><span style="font-size:14px;font-weight:650">To continue, please login.</span></div>
            <div class="all-page-2-2">
                <div class="all-page-2-2-1" ><button style="background-color:#3b5998;color:#ffffff;border:none;box-shadow: inset 0 0 0 2px #3b5998;"><i class="fab fa-facebook"></i><span>Continue with Facebook</span> </button></div>
                <div class="all-page-2-2-2"><button class="hov"><svg style="width:16px;height:16.8px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 533.5 544.3"><path d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z" fill="#4285f4"/><path d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z" fill="#34a853"/><path d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z" fill="#fbbc04"/><path d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z" fill="#ea4335"/></svg><span>Continue with Google</span> </button></div>
                <div class="all-page-2-2-3"><button class="hov">Continue with Phone number</button></div>
            </div>
        <div class="all-page-3">
            <div class="all-page-3-1"></div>    
            <div class="all-page-3-2"><span style="color:#000000;font-weight:600">or</span></div>
            <div class="all-page-3-3"></div>
        </div>
        <div class="all-page-4">
            <form method="post" action="/7am/login/login.php">
                <div class="all-page-4-1">
                    <span class="all-page-4-1-1">Email address or user name</span>
                    <input class="all-page-4-1-2" id="username" name="username" type="text" placeholder="Email address or user name" autocomplete="off">
                    <span style="color:red;border-color:red;" id="lost-username"></span>
                </div>
                <div class="all-page-4-2">
                    <span class="all-page-4-2-1">Password</span>
                    <input type="password" id="password" name="password" placeholder="Password">
                    <span style="color:red;border-color:red;    " id="lost-password"></span>
                </div>
                <div class="all-page-4-3"><a style="color:#616467" href="">Do you forgot password?</a></div>
                <div class="all-page-4-4">
                    <div class="all-page-4-4-1">
                        <label class="container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <span style="color:#616467;font-weight:500">Remember me</span>
                    </div>
                    <div class="all-page-4-4-2">
                        <input type="submit" value="Log in" id="sent-login" onclick="return sent_data();">
                    </div>
                </div>
            </form>
        </div>  
        <div class="all-page-5">
            <div class="all-page-5-1"><span style="text-align:center !important;width:100%;font-weight:600;">You don't have account?</span> </div>
            <div class="all-page-5-2"><button><a style="text-transform: uppercase" href="../signup/">Sign up 7:00AM</a></button></div>    
        </div>
    </div>
    <script>
        const sent= document.querySelector("#sent-login");
        let username= document.querySelector("#username")
        let password= document.querySelector("#password")
        const lost_user= document.querySelector("#lost-username")
        const lost_password= document.querySelector("#lost-password")
        function sent_data() {
                if(username.value.length===0 && password.value.length>0) {
                    username.style.borderColor="red"
                    lost_user.innerHTML= "x Please enter your username or email address.";
                    lost_password.innnerHTML= ""
                    return false
                }
                else if(password.value.length===0 && username.value.length>0) {
                    password.style.borderColor="red"
                    lost_password.innerHTML= "x Please enter your password."
                    lost_user.innerHTML=""
                    return false
                }
                else if(password.value.length===0 && username.value.length===0) {
                    lost_user.innerHTML= "x Please enter your username or email address.";
                    lost_password.innerHTML= "x Please enter your password."
                    return false
                }
                else {
                    return true
                }
            
        }
    </script>
</body>

</html>