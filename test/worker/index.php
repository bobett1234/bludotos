<html>
<head>
<script>
window.thisis = [];
var test = new Worker('desktop.js');
test.postMessage(("pref", "prefed"));
test.onmessage = function(e) {
var windowdiv = document.createElement('div');
windowdiv.id = 'Preferences';
windowdiv.innerHTML = e.data;
var wid = windowdiv;
document.getElementById('dhtmlwindowholder').appendChild(wid);
window.ndata = new Worker('getdata.js');
window.ndata.postMessage('http://bludotos.com/users/admin/sysapps/Preferences/index.php?userN=admin');
window.ndata.onmessage = function(e){
wid.children[1].innerHTML = e.data;
if (wid.children[1].getElementsByTagName('script')[0]) {
		wid.scriptd = wid.children[1].getElementsByTagName('script')[0];
		eval(wid.scriptd.innerHTML);
		wid.children[1].removeChild(wid.scriptd);
		};
		if (wid.children[1].getElementsByTagName('style')[0]) {
		wid.styleC = wid.children[1].getElementsByTagName('style')[0];
		document.head.appendChild(wid.styleC);
		};
};
var height = window.innerHeight-document.getElementById('background').clientHeight;
               var width= window.innerWidth;
wid.style.cssText = 'position:fixed;left:0px;top:23px;width:'+width+'px;height:'+height+'px;display:block;-webkit-border-radius: 30px;-moz-border-radius: 20px;border-radius: 20px;';
wid.children[1].style.height = wid.innerheight+'px';
	wid.style.zIndex=parseInt(SimpleWin.zindexbase)+1;
	SimpleWin.zindexbase=wid.style.zIndex;
	var divs = wid.getElementsByTagName('div');
	for (var i=0; i<divs.length; i++){
		if (/drag-/.test(divs[i].className));
			wid[divs[i].className.replace(/drag-/, "")]=divs[i];
	};
	var divs2 = wid.topbar.getElementsByTagName('div');
	for (var i=0; i<divs2.length; i++){
		if (/drag-/.test(divs2[i].className));
			wid.topbar[divs2[i].className.replace(/drag-/, "")]=divs2[i];
	};
	wid.topbar._parent=wid;
	wid.content._parent=wid;
        if(!size) {
	wid.resize._parent=wid;
	wid.resize.onmousedown=SimpleWin.resize;
        }
	wid.onclose=function(){return true} //custom event handler "onclose"
	wid.onmousedown=function(){SimpleWin.setfocus(this)};
	wid.topbar.onmousedown=SimpleWin.drag;
	wid.topbar.left1.onclick=function(){SimpleWin.close(wid);};
	wid.topbar.left2.onclick=function(){SimpleWin.minimize(wid);};
	wid.topbar.left3.onclick=function(){SimpleWin.maximize(wid);};
	window.actT=wid;
        wid.nim=0;

};

</script>
</head>
<body>
<div id="dhtmlwindowholder"></div>
</body>
</html>