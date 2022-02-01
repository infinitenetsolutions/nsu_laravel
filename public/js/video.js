document.querySelector('video').playbackRate = 0.25;
$("video").click(function() {
    //console.log(this); 
    if (this.paused) {
        this.play();
    } else {
        this.pause();
    }
});