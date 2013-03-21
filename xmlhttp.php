<html>
<head>
<script>
function geturl(url, callback) {
	var callback = callback;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", url, true); 		xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4) {
			var datad=xmlhttp.responseText;
			callback(datad);
		};
	};
	xmlhttp.send();
};
</script>
</head>
<body>
<input type="button" value="click" onclick="geturl('http://apple.com', function(dat) {alert(dat);});" />
<input type="button" value="click2" onclick="geturl('http://google.com', function(dat) {alert(dat);});" />
</body>
</html>