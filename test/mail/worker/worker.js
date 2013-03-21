onmessage = function(e){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", e.data, true);
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4) {
			var html = xmlhttp.responseText;
	  if(html.length > 0){
	    var obj = html;
	  }
			postMessage(obj);
		};
	};
	xmlhttp.send();
        //return datad;
};