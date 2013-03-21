onmessage = function(e){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", e.data, true);
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4) {
			var datad=xmlhttp.responseText;
			postMessage(datad);
		};
	};
	xmlhttp.send();
        //return datad;
};