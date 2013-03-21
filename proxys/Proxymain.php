<html>
<head>
<script src="json2.js"></script>
<script>
function get(urlc, callabck) {
	urla = 'proxy.php'+'?'+'url='+encodeURIComponent(urlc);
	var getx = new XMLHttpRequest();
	getx.open('get', urla, true);
 	getx.onreadystatechange = function() {
		if (getx.readyState==4) {
			var datad = getx.responseText;
			document.getElementById('paste').innerHTML=datad;
			window.data=datad;
		};
	};
	getx.send();
};
window.addEventListener('keypress', function(event) {
if (event.target==document.getElementById('url')) {
	if (event.keyCode==13) {
		get(document.getElementById('url').value);
	};
};
}, true);
</script>
</head>
<body>
<input id="url" type="textbox" />
<div id="paste"></div>
</body>
</html>