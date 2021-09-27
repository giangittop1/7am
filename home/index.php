<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../themify-icons//themify-icons.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/5622/5622249.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Web player - 7:00AM</title>
    <style>
        body {
            overflow-y: visible;
        }
        .parent-progress::after {
            content: "."
        }
        .content1 ul {
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header-fixed">
            <div class="pagination">
                <li><i class="ti-angle-left"></i></li>
                <li><i class="ti-angle-right"></i></li>
            </div>
            <div class="infomation">
                <button>Upgrade</button>
                <button>7:00AM</button>
            </div>
        </div>
        <div class="play-song">
            <audio id="audio">
                <source src="https://drive.google.com/uc?id=15X4N2ewc2LFj3lm3VCQIN60QwCwHlTzD" type="audio/mp3">
            </audio>
            <div class="play-song1"></div>
            <div class="play-song2">
                <div class="main-progress">
                    <div class="start-time">
                        <span id="run-time" style="font-size:12px;font-weight:600;color:#fff">0:00</span>
                    </div>
                    <div class="parent-progress">

                        <div class="progress" id="progress"></div>

                    </div>
                    <div class="end-time">
                        <span style="font-size:12px;font-weight:600;color:#fff" id="end">0:00</span>
                    </div>
                </div>
                <div class="parent-toggle">

                    <div class="dura">
                        <div title="Previous song" class="icon-previous-song" style="width:18px;height:18px;display:flex;justify-content:center;align-items:center"><img src="../icon/previous.png" width="100%" height="100%"></div>
                        <div title="Backward 5s" style="color:rgba(255,255,255,0.45)"><i class="fa fa-fast-backward" aria-hidden="true"></i></div>
                        <div class="shuffle-song"><i title="Play random" style="color:rgba(255,255,255,0.45)" class="fa fa-random" aria-hidden="true"></i></div>
                        <button style="margin:0 !important" class="togglePlay" onclick="showTime();togglePlay();">Play/Pause</button>
                        <div class="repeat-song"><i title="Repeat song" style="color:rgba(255,255,255,0.45)" class="fas fa-repeat"></i></div>
                        <div title="Forward 5s" style="color:rgba(255,255,255,0.45)"><i class="fas fa-fast-forward"></i></div>
                        <div title="Next song" class="icon-next-song" style="width:18px;height:18px;display:flex;justify-content:center;align-items:center"><img src="../icon/next.png" width="100%" height="100%"></div>
                    </div>
                </div>
            </div>
            <div class="play-song3 hiih">
                <div class="slidecontainer">
                    <div class="display-volume">
                        <i style="color:#ffffff" class="fas fa-volume state-volume"></i>
                    </div>
                    <div class="range">
                        <input id="change-range" type="range" min="1" max="100" value="50">
                    </div>
                </div>
            </div>
        </div>
        <div class="content1">
            <ul class="menu1">
                <li class="700am"><img style="color:aqua !important" src="https://cdn-icons-png.flaticon.com/128/5622/5622249.png" width="50" height="50"> <span style="font-size:24px;">&nbsp;&nbsp;7:00AM</span></li>
            </ul>
            <br><br>
            <ul class="menu2">
                <li class="home"><svg viewBox="0 0 512 512" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M448 463.746h-149.333v-149.333h-85.334v149.333h-149.333v-315.428l192-111.746 192 110.984v316.19z" fill="currentColor"></path>
                    </svg> <span> Home</span> </li>
                <li class="search-bar"><svg viewBox="0 0 512 512" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M349.714 347.937l93.714 109.969-16.254 13.969-93.969-109.969q-48.508 36.825-109.207 36.825-36.826 0-70.476-14.349t-57.905-38.603-38.603-57.905-14.349-70.476 14.349-70.476 38.603-57.905 57.905-38.603 70.476-14.349 70.476 14.349 57.905 38.603 38.603 57.905 14.349 70.476q0 37.841-14.73 71.619t-40.889 58.921zM224 377.397q43.428 0 80.254-21.461t58.286-58.286 21.461-80.254-21.461-80.254-58.286-58.285-80.254-21.46-80.254 21.46-58.285 58.285-21.46 80.254 21.46 80.254 58.285 58.286 80.254 21.461z" fill="currentColor" fill-rule="evenodd"></path>
                    </svg> <span> Search</span></li>
                <li class="library"><svg viewBox="0 0 512 512" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M291.301 81.778l166.349 373.587-19.301 8.635-166.349-373.587zM64 463.746v-384h21.334v384h-21.334zM192 463.746v-384h21.334v384h-21.334z" fill="currentColor"></path>
                    </svg> <span> Library</span></li>
            </ul>
            <br>
            <br>
            <ul class="menu3">
                <li class="playlist"><svg role="img" height="12" width="12" viewBox="0 0 16 16" class="Svg-sc-1bi12j5-0 gSLhUO">
                        <path d="M14 7H9V2H7v5H2v2h5v5h2V9h5z"></path>
                        <path fill="none" d="M0 0h16v16H0z"></path>
                    </svg> <span> Create playlist</span></li>
                <li class="favorite-song"><svg role="img" height="12" width="12" viewBox="0 0 16 16" class="Svg-sc-1bi12j5-0 gSLhUO">
                        <path fill="none" d="M0 0h16v16H0z"></path>
                        <path d="M13.797 2.727a4.057 4.057 0 00-5.488-.253.558.558 0 01-.31.112.531.531 0 01-.311-.112 4.054 4.054 0 00-5.487.253c-.77.77-1.194 1.794-1.194 2.883s.424 2.113 1.168 2.855l4.462 5.223a1.791 1.791 0 002.726 0l4.435-5.195a4.052 4.052 0 001.195-2.883 4.057 4.057 0 00-1.196-2.883z"></path>
                    </svg> <span>Favorite song</span></li>
            </ul>

        </div>
        <script>
            function showTime() {
                let audi = document.querySelector("#audio")
                let endtime = document.querySelector("#end")
                let showduration = document.querySelector(".togglePlay")
                let runtime = document.querySelector("#run-time")

                function fancyTimeFormat(duration) {
                    // Hours, minutes and seconds
                    var hrs = ~~(duration / 3600);
                    var mins = ~~((duration % 3600) / 60);
                    var secs = ~~duration % 60;

                    // Output like "1:01" or "4:03:59" or "123:03:59"
                    var ret = "";

                    if (hrs > 0) {
                        ret += "" + hrs + ":" + (mins < 10 ? "0" : "");
                    }

                    ret += "" + mins + ":" + (secs < 10 ? "0" : "");
                    ret += "" + secs;
                    return ret;
                }
                endtime.innerHTML = fancyTimeFormat(audi.duration)
                setInterval(function() {
                    runtime.innerHTML = fancyTimeFormat(audi.currentTime)
                }, 1000)
            }
        </script>


        <div class="content2"></div>
        <div class="content3">
            <ul class="sub-content3">
                <li class="friend-activity">Friend activity</li>
                <li class="connect-fb">Connect with Facebook to see what you friends are playing.</li>
                <li><button style="background-color:#4692f5;color:#fff;border:none;outline:none;width:100%;padding:10px;border-radius:80px;font-weight:600;text-transform:uppercase">Connect with Facebook</button></li>
                <li class="warning">We"ll never post anything without you permission. Show and hide Friends Activity from Settings.</li>
            </ul>
        </div>
    </div>
    <script src="../script/progress.js"></script>
    <script>
        let audi = document.querySelector("#audio")
        let rept = document.querySelector(".repeat-song")
        let act = document.querySelector(".fa-repeat")
        let ran = document.querySelector(".shuffle-song")
        let sym = document.querySelector(".fa-random")
        rept.onclick = function() {
            if (audi.loop === false) {
                audi.loop = true
                act.classList.add("active-repeat")
            } else {
                audi.loop = false
                act.classList.remove("active-repeat")
            }
        }
        ran.onclick = function() {
            if (!sym.classList.contains("active-repeat")) {
                sym.classList.add("active-repeat")
            } else {
                sym.classList.remove("active-repeat")
            }
        }
    </script>
    <script>
        let changeRange = document.querySelector("#change-range")
        changeRange.onclick = function() {
            audi.volume = this.value / 100
        }
    </script>

    <script>
        const backward = document.querySelector(".fa-fast-backward")
        const forward = document.querySelector(".fa-fast-forward")
        backward.addEventListener("click", function() {
            audi.currentTime -= 5
        })
        forward.addEventListener("click", function() {
            audi.currentTime += 5
        })
    </script>
    <script>
        let iii=0
        document.addEventListener("keydown", function(e) {
            let x= event.key || window.event
            if(x==="ArrowLeft") {
                audi.currentTime -=5
            }
            else if(x==="ArrowRight") {
                audi.currentTime +=5
            }  
        })
    </script>
    <script asyn\>
        const staudio = document.querySelector(".state-volume")
        staudio.onclick = function() {
            if (audi.volume > 0) {
                if (this.classList.contains("fa-volume-up") || this.classList.contains("fa-volume") || this.classList.contains("fa-volume-down")) {
                    this.classList.add("fa-volume-mute")
                    this.classList.remove("fa-volume-up") || this.classList.remove("fa-volume") || this.classList.remove("fa-volume-down")
                    audi.volume = 0
                }
            } else {
                if (changeRange.value > 0 && changeRange.value < 25) {
                    this.className = ("fas state-volume fa-volume-down")
                    audi.volume = changeRange.value / 100

                } else if (changeRange.value >= 25 && changeRange.value < 75) {
                    this.classList = ("fas state-volume fa-volume")
                    audi.volume = changeRange.value / 100

                } else if (changeRange.value >= 75 && changeRange.value <= 100) {

                    this.className = "fas state-volume fa-volume-up"
                    audi.volume = changeRange.value / 100
                }
            }
        }
    </script>

    <script>
        changeRange.onclick = function() {
            if (this.value > 0 && this.value < 25) {
                staudio.className = ("fas state-volume fa-volume-down")
                audi.volume = this.value / 100
            } else if (this.value >= 25 && this.value < 75) {
                staudio.classList = ("fas state-volume fa-volume")
                audi.volume = this.value / 100

            } else if (this.value >= 75 && this.value <= 100) {
                staudio.className = "fas state-volume fa-volume-up"
                audi.volume = this.value / 100

            }
        }
    </script>
    <script>
        let x, y
        const chae = document.querySelector("#progress")
        let machae = document.querySelector(".parent-progress")
        const ldefault = document.querySelector(".parent-progress")
        $(".parent-progress").click(function(e) {
            var x = e.pageX
            var y = $(this).offset()
            that = this

            function fancyTimeFormat(duration) {
                var hrs = ~~(duration / 3600);
                var mins = ~~((duration % 3600) / 60);
                var secs = ~~duration % 60;
                var ret = "";
                if (hrs > 0) {
                    ret += "" + hrs + ":" + (mins < 10 ? "0" : "");
                }
                ret += "" + mins + ":" + (secs < 10 ? "0" : "");
                ret += "" + secs;
                return ret;
            }
            audi.currentTime = (Math.ceil((1 / $(this).width() * Math.ceil((x - y.left))) * audi.duration))
        })
    </script>
</body>

</html>