var clicking = false,
    cube = $('.cube'),
    x = 0,
    y = 0;

cube.mousedown(function(event) {
    clicking = true;
    cube.css({"-webkit-animation-play-state": "running", "-moz-animation-play-state": "running", "-o-animation-play-state": "running", "animation-play-state": "running"});
    x = event.clientX;
    y = event.clientY;
});

cube.mouseup(function(event) {
    clicking = false;
    cube.css({"-webkit-animation-play-state": "paused", "-moz-animation-play-state": "paused", "-o-animation-play-state": "paused", "animation-play-state": "paused"});
});

cube.mousemove(function(event) {
    if(clicking) {
        var movedX = event.clientX - x,
            movedY = event.clientY - y;

        console.log("Moving...");
        cube.css({transform: "rotateX(" + movedX + "deg)"});
    }
});