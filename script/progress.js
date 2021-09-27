let timer
let percent = 0
let audio= document.getElementById('audio')
audio.addEventListener('playing', function(_event) {
    let duration= _event.target.duration
    advance(duration,audio)
})

audio.addEventListener('pause', function(_event) {
    clearTimeout(timer)
})

let advance= function(duration, element) {
    let progress= document.getElementById("progress")
    increment= 10/duration
    percent= Math.min(increment* element.currentTime*10,100)
    progress.style.width= percent+ "%"
    startTimer(duration,element)
}

let startTimer= function(duration,element) {
    if(percent <100) {
        timer= setTimeout(function() {
            advance(duration,element)
        },100)
    }
}

function togglePlay(e) {
    e= e || window.event
    let btn= e.target
    if(!audio.paused) {
        btn.classList.remove('active')
        audio.pause()
        isPlaying= false
    }
    else {
        btn.classList.add('active')
        audio.play()    
        isPlaying= true
    }
}