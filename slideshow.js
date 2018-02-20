var path = "images/";
var sources = ['main.png','cave.png','girl.png'];
var index = 0;

function changeImage(dir) {
    if (dir == 1) { // left
        if (index == 0) {
            index = sources.length - 1;
        } else {
            index--;
        }
        $("#slideshowimg").attr("src", path + sources[index]);
    } else if (dir == -1) { // right
        if (index == sources.length - 1) {
            index = 0;
        } else {
            index++;
        }
        $("#slideshowimg").attr("src", path + sources[index]);
    }
}

$(document).keydown(function(e) {
    if (e.which == 37) { // left
        changeImage(-1);
    } else if (e.which == 39) { // right
        changeImage(1);
    }
});

$(document).ready(function(){
    $("#slideshowimg").click(function() {
        changeImage(1);
    });
});
