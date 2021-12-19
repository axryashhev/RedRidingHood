var video = document.getElementById("myVideo");
var button = document.getElementById("button");

button.addEventListener("click", function(e) {
	video.play();
	video.pause();
	video.currentTime = video.duration;
// 	video.play();
    document.location.href = 'index.php';
})


function endVideo() {
  document.location.href = 'index.php';
}
