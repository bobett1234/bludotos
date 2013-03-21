<html>
<head>
<script>
var test = new Worker('worker.js');
test.postMessage('hi');
test.onmessage = function(e) {alert(e.data);};
</script>
</head>
<body>
</body>
</html>