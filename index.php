<?php
session_start();
include "/xampp/htdocs/7am/login/login.php";
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/5622/5622249.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>Listening to the moon - 7:00AM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');

        a {
            text-decoration: none
        }

        a:hover {
            color: #1ed760;
        }

        .loconcac {
            position: relative;
        }
        .loconcac:hover {
            color:#1ed760
        }

        .loconcac .container-1 {
            position: absolute;
            z-index: 999999;
            padding-top: 10px;
            padding-bottom: 10px

           
        }
        .fa.fa-triangle::before {
            transform: scale(0.8);
        }
    </style>
</head>

<body>
    <div id="main">
        <div class="section-1" id="section-1">
            <div class="section-1-1">
                <div class="contain-img"><a href="/7am"><img src="./moon.png"></a></div>
                <div class="contain-title"><a href="/7am"> <span>7:00AM</span></a></div>
            </div>
            <div class="section-1-2">
                <ul class="menu-bar">
                    <li class="listen">Premium</li>
                    <li class="Suport">Support</li>
                    <li class="Contact">Contact</li>
                    <li class="separated">|</li>
                    <?php if (isset($user['email'])) { ?>

                        <div class="loconcac" style="cursor:pointer" onclick="trigger1();"><?php echo $user['email'] ?>
                            <div class="container-1" style="padding-top:10px;padding-bottom:10px;width:100%;margin-top:7px;color:#000000;font-weight:600;display:none">
                                <div style="height:16.8px;position:relative"><i style="color:#ffffff;width:10px !important;height:10px;position:absolute;bottom:0;left:5px" class="fas fa-triangle"></i></div>
                                <div style="background-color: #ffffff;padding-left:7px;padding-top:10px;" class="info-account"><a href="#" style="color:#000000">Account</a> </div>
                                <div style="background-color: #ffffff;padding-left:7px;padding-bottom:10px;"><a style="color:#000000" href="../7am/logout">Log out</a></div>

                            </div>


                        </div>
                    <?php } else { ?>
                        <li class="signup"><a href="../7am/signup/">Sign up</a></li>
                        <li class="login"><a href="../7am/login/">Log in</a></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
        <div class="section-2">
            <div class="section-2-1">
                <div class="content">
                    <p style="text-transform: uppercase;">7:00AM Premium</p>
                    <p style="font-size:60px;font-weight:600;">Get 3 months of Premium for free</p>
                    <div class="two-last">
                        <p style="font-size:24px">Enjoy ad-free music listening, offline playback, and more.</p>
                        <p style="font-size:24px">Cancel anytime.</p>
                    </div>
                    <div style="padding-top:10px;margin-top:20px" class="get-3-months">
                        <button style="border:none;outline:0;border-radius:80px;background:#000;width:38%;padding:12px 0;text-transform:uppercase;font-weight:590" class="btn">get 3 months free</button>
                    </div>
                </div>
                <div class="section-2-image">
                    <div class="image-right"></div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-top-1632319800">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="section-3">
            <div class="listening-music">
                <p style="text-transform:uppercase;color:#1ed760">7:00AM free</p>
                <p style="font-size:60px;font-weight:bold;color:#1ed760">Listening to the moon</p>
                <p style="font-size:24px;color:#1ed760">Millions of songs and podcasts. No credit card needed.</p>
                <div class="signup-free">
                    <button style="border:none;color:#2941ab;outline:0;border-radius:80px;background:#1ed760;width:25%;padding:12px 0;text-transform:uppercase;font-weight:590" class="btn2">Get 7:00am free</button>
                </div>
            </div>
            <div class="decoration"></div>
        </div>
        <div class="section-4">
            <div class="conclude1">

                <div class="section-1-1">
                    <div class="contain-img"><img src="./moon.png"></div>
                    <div class="contain-title"><a style="text-decoration:none;" href="#section-1"><span>7:00AM</span></a></div>
                </div>
                <div class="part2">
                    <ul>
                        <li style="margin-top:10px;color:#919496;text-transform:uppercase;font-size:14px;font-weight:550">website</li>
                        <li class="hover-green" style="text-transform:capitalize">about</li>
                        <li class="hover-green" style="text-transform:capitalize"><a href="https://datist.w3spaces.com/">author</a></li>
                        <li class="hover-green" style="text-transform:capitalize">jobs</li>
                        <li class="hover-green" style="text-transform:capitalize">for the record</li>
                    </ul>
                </div>
                <div class="part3">
                    <ul>
                        <li style="margin-top:10px;color:#919496;text-transform:uppercase;font-size:14px;font-weight:550">communities</li>
                        <li class="hover-green" style="text-transform:capitalize">for artists</li>
                        <li class="hover-green" style="text-transform:capitalize">developers</li>
                    </ul>
                </div>
                <div class="part4">
                    <ul>
                        <li style="margin-top:10px;color:#919496;text-transform:uppercase;font-size:14px;font-weight:550">useful links</li>
                        <li class="hover-green" style="text-transform:capitalize">Support</li>
                        <li class="hover-green" style="text-transform:capitalize"><a href="../7am/home"> Web player</a></li>
                        <li class="hover-green" style="text-transform:capitalize">Moblie app</li>
                    </ul>
                </div>
                <div class="part5">
                    <div>
                        <a href="https://www.youtube.com/channel/UCjbwOEcQgQeLw_QTX13rZNw"><i title="Youtube" style="margin-top:10px" class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="conclude2">
                <div class="part1"><i class="fa fa-globe-asia" aria-hidden="true"></i> <a style="font-size:12px;text-decoration:none;color:#919496;cursor:pointer;" href="https://vi.wikipedia.org/wiki/Vi%E1%BB%87t_Nam">&nbsp;Viet Nam</a></div>
            </div>
            <div class="conclude3">
                <div class="part1">Legal</div>
                <div class="part2">Privacy Center</div>
                <div class="part3">Privacy Policy</div>
                <div class="part4">Cookies</div>
                <div class="part5">Ads</div>
                <div class="part6">&copy; 2021 7:00AM</div>
            </div>
        </div>
    </div>
    <script>
        function trigger1() {
            let abcd= document.querySelector(".loconcac .container-1")
            document.querySelector(".loconcac").style.color="#1ed760"
            if(abcd.style.display==="none") {
               abcd.style.display="block"
               
            }
            else {
                abcd.style.display= "none"
            }
        }
    </script>
</body>

</html>