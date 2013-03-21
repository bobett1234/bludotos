<html>
<head>
<script>
function smear(img) {
var canvas = document.createElement("canvas");
canvas.width = img.width;
canvas.height = img.width;
var context = canvas.getContext("2d");
context.drawImage(img, 0, 0);
var pixels = context.getImageData(0,0,img.width,img.height);
var worker = new Worker("SmearWorker.js");
worker.postMessage(pixels);
worker.onmessage = function(e) {
var smeared_pixels = e.data;
context.putImageData(smeared_pixels, 0, 0);
img.src = canvas.toDataURL();
worker.terminate();
canvas.width = canvas.height = 0;
}
}
</script>
</head>
<body>
<img src="../../../wallpaper/background.jpg" onclick="smear(this);"/>
</body>
</html>