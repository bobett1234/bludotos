<?
$user=$_GET['userN'];
?>
<script>
window.thisis.push(actT);
for (x in thisis)
{
     if(actT == thisis[x])
     {
        var thisislength = x;
        actT.x = x;
     }
}
thisis[actT.x].menu = function() {
window.bar(0);
var menu = document.getElementById('menu0');
menu.innerHTML = '<li onclick="clickt(this);"><a>FileNet</a></li><ul></ul><li><a>File</a></li><ul></ul><li><a>Edit</a></li><ul></ul><li onclick="clickt(this);"><a>View</a></li><ul><li onclick="clickt(this);"><a onclick="clickt(clicked);thisis[actT.x].listviewt();">Splitview</a></li><li onclick="clickt(this);"><a onclick="clickt(clicked);thisis[actT.x].listviewt();">List View</a></li></ul>';
}
thisis[actT.x].menu();
thisis[actT.x].FileNet = [];
thisis[actT.x].i = -1;
thisis[actT.x].openapp = function(name) {
var name = name.split(".")[0];
        window.tempname = name;
thisis[actT.x].nameit = name;
var openapp = new XMLHttpRequest();
        var sendit = 'name='+name+'.blu';
        openapp.open('POST', 'users/<? echo $user; ?>/sysapps/FileNet/fopen.php', true);
	openapp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	//goto2.setRequestHeader("Content-length", sendit.length);
	openapp.onreadystatechange = function() {
	if (openapp.readyState==4) {
thisis[actT.x].i++;
window.dock.AddNew({
            name:      'icons/gear',
            label:     name,
            extension: '.png',
            sizes:     [44, 100],
            menuItems: ['open'],
            menuClick: [function(){return false;}],
            onclick:   function (){return false;}
          }, dock.findApp('Trash'));
thisis[actT.x].FileNet[thisis[actT.x].i]=SimpleWin.create(name, name, "users/"+window.user+"/sysapps/FileNet/HDD/Applications/temp/"+name+"/index.php?name="+name+"&userN="+window.user+"");
<?
if ($isMobile) {
?>
dock.addclick(name, ['close', 'minimize'], [function(){SimpleWin.close(window.thisis[actT.x].FileNet[thisis[actT.x].i]);}, function(){SimpleWin.minimize(window.thisis[actT.x].FileNet[thisis[actT.x].i]);}]);
<?
};
?>
thisis[actT.x].onclose=function(){ //Run custom code when window is being closed (return false to cancel action):
<?
if (!$isMobile) {
?>
var closeapp = new XMLHttpRequest();
        var sendit2 = 'name='+window.tempname;
        closeapp.open('POST', 'users/<? echo $user; ?>/sysapps/FileNet/resolve.php', true);
	closeapp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	//goto2.setRequestHeader("Content-length", sendit2.length);
	closeapp.onreadystatechange = function() {
	if (closeapp.readyState==4) {
window.dock.removeApp(window.tempname);
}
}
closeapp.send(sendit2);
<?
};
?>
return true;
}
}
}
openapp.send(sendit);
}
thisis[actT.x].innerdivs = 0;
thisis[actT.x].cdivs = 0;
thisis[actT.x].cdiv = 0;
thisis[actT.x].listview = false;
thisis[actT.x].back = function(gotoit) {
thisis[actT.x].gotoit = gotoit;
//var gotoit = gotoit.substring(0, gotoit.length-1);
var goto2 = new XMLHttpRequest();
	if(gotoit.substring(0, 4) != "HDD/"){
	sendit = 'goto=HDD/'+gotoit.substring(thisis[actT.x].response.files[i].indexOf("/") + 1);
	} else {
	sendit = 'goto='+gotoit.substring(0, gotoit.length-1);
	}
	goto2.open('POST', 'users/<? echo $user; ?>/sysapps/FileNet/goto.php', true);
	goto2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	//goto2.setRequestHeader("Content-length", sendit.length);
	goto2.onreadystatechange = function() {
	if (goto2.readyState==4) {
	if(thisis[actT.x].cdiv == thisis[actT.x].innerdivs && thisis[actT.x].listview != true) {
        window.actT.children[1].children[2].appendChild(window.actT.children[1].children[2].children[thisis[actT.x].innerdivs].cloneNode(true));
        thisis[actT.x].innerdivs+=1;
        window.actT.children[1].children[2].children[thisis[actT.x].innerdivs].id = thisis[actT.x].innerdivs;
        thisis[actT.x].cdivs = thisis[actT.x].innerdivs;
        } else if(thisis[actT.x].cdiv < thisis[actT.x].innerdivs && thisis[actT.x].listview != true) {
        for(var i=0; i < (thisis[actT.x].innerdivs-(thisis[actT.x].cdiv+1)); i++) {
        	window.actT.children[1].children[2].removeChild(window.actT.children[1].children[2].children[i+thisis[actT.x].innerdivs]);
        }        
        thisis[actT.x].innerdivs-=(thisis[actT.x].innerdivs-(thisis[actT.x].cdiv+1));
        thisis[actT.x].cdivs = thisis[actT.x].cdiv+1;
        } else if(thisis[actT.x].listview == true) {
        thisis[actT.x].cdivs = 0;
        };
        if (gotoit != 'Applications' && gotoit != 'HDD/Applications'){
		thisis[actT.x].response2 = goto2.responseText;
		thisis[actT.x].response = JSON.parse(goto2.responseText);
		var k = window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].children.length;
		for(var i=1; i < k; i++)
		{
			window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].removeChild(window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].children[1]);
		}
		if(thisis[actT.x].response.dirs){
		for(var i=0; i < thisis[actT.x].response.dirs.length; i++)
		{
			var newtr = document.createElement('tr');
			newtr.innerHTML = '<td style="text-align:left;" class="name"><a onclick="thisis[actT.x].goto((thisis[actT.x].response.location+\'/\'+this.innerText));">'+thisis[actT.x].response.dirs[i]+'</a></td><td style="text-align:left;" class="type">Size</td>';
			window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].appendChild(newtr);
		};
		}
		if(thisis[actT.x].response.files){
		for(var i=0; i < thisis[actT.x].response.files.length; i++)
		{
			var temp = thisis[actT.x].response.files[i].substring(thisis[actT.x].response.files[i].indexOf(".") + 1);
			if(temp == 'png' || temp == 'jpg' || temp == 'jpeg' || temp == 'gif'){
				var type = 'image';
			} else {
				var type = 'undefined';
			}
			var newtr = document.createElement('tr');
			newtr.innerHTML = '<td style="text-align:left;" class="name"><a onclick="thisis[actT.x].goto((this.innerText+thisis[actT.x].response.location));">'+thisis[actT.x].response.files[i]+'</a></td><td style="text-align:left;" class="type">'+type+'</td>';
			window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].appendChild(newtr);
		};
		}
        } else if (gotoit == 'Applications' || gotoit == 'HDD/Applications') {
		thisis[actT.x].response2 = goto2.responseText;
		thisis[actT.x].response = JSON.parse(goto2.responseText);
		var k = window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].children.length;
		for(var i=1; i < k; i++)
		{
			window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].removeChild(window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].children[1]);
		}
		if(thisis[actT.x].response.files){
		for(var i=0; i < thisis[actT.x].response.files.length; i++)
		{
			var temp = thisis[actT.x].response.files[i].substring(thisis[actT.x].response.files[i].indexOf(".") + 1);
			if(temp == 'png' || temp == 'jpg' || temp == 'jpeg' || temp == 'gif'){
				var type = 'image';
			} else if (temp == 'blu') {
                                var type = 'application';
                        } else {
				var type = 'undefined';
			}
			var newtr = document.createElement('tr');
			newtr.innerHTML = '<td style="text-align:left;" class="name"><a onclick="thisis[actT.x].openapp((this.innerText));">'+thisis[actT.x].response.files[i]+'</a></td><td style="text-align:left;" class="type">'+type+'</td>';
			window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].appendChild(newtr);
		};
		}
        }
        window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[1].innerText = thisis[actT.x].response.location;
        window.actT.children[1].children[2].children[thisis[actT.x].cdivs].removeChild(window.actT.children[1].children[2].children[thisis[actT.x].cdivs].lastChild);
		MainTools.scrollV(thisis[actT.x].children[1].children[2].children[thisis[actT.x].cdivs], thisis[actT.x], thisis[actT.x].children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0]);	
				
	};
	};
goto2.send(sendit);
};
thisis[actT.x].goto = function(gotoit){
var goto2 = new XMLHttpRequest();
thisis[actT.x].gotoit=gotoit;
	if(gotoit.substring(0, 4) != "HDD/"){
	sendit = 'goto=HDD/'+gotoit;
	} else {
	sendit = 'goto='+gotoit;
	}
	goto2.open('POST', 'users/<? echo $user; ?>/sysapps/FileNet/goto.php', true);
	goto2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	//goto2.setRequestHeader("Content-length", sendit.length);
	goto2.onreadystatechange = function() {
	if (goto2.readyState==4) {
        if(thisis[actT.x].cdiv == thisis[actT.x].innerdivs && thisis[actT.x].listview != true) {
        window.actT.children[1].children[2].appendChild(window.actT.children[1].children[2].children[thisis[actT.x].innerdivs].cloneNode(true));
        thisis[actT.x].innerdivs+=1;
        window.actT.children[1].children[2].children[thisis[actT.x].innerdivs].id = thisis[actT.x].innerdivs;
        thisis[actT.x].cdivs = thisis[actT.x].innerdivs;
        } else if(thisis[actT.x].cdiv < thisis[actT.x].innerdivs && thisis[actT.x].listview != true) {
        for(var i=0; i < (thisis[actT.x].innerdivs-(thisis[actT.x].cdiv+1)); i++) {
        	window.actT.children[1].children[2].removeChild(window.actT.children[1].children[2].children[i+thisis[actT.x].innerdivs]);
        }        
        thisis[actT.x].innerdivs-=(thisis[actT.x].innerdivs-(thisis[actT.x].cdiv+1));
        thisis[actT.x].cdivs = thisis[actT.x].cdiv+1;
        } else if(thisis[actT.x].listview == true) {
        thisis[actT.x].cdivs = 0;
        };
        if (gotoit != 'Applications' && gotoit != 'HDD/Applications'){
		thisis[actT.x].response2 = goto2.responseText;
		thisis[actT.x].response = JSON.parse(goto2.responseText);
		var k = window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].children.length;
		for(var i=1; i < k; i++)
		{
			window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].removeChild(window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].children[1]);
		}
		if(thisis[actT.x].response.dirs){
		for(var i=0; i < thisis[actT.x].response.dirs.length; i++)
		{
			var newtr = document.createElement('tr');
			newtr.innerHTML = '<td style="text-align:left;" class="name"><a onclick="thisis[actT.x].click(this.parentNode.parentNode);thisis[actT.x].goto((thisis[actT.x].response.location+\'/\'+this.innerText));">'+thisis[actT.x].response.dirs[i]+'</a></td><td style="text-align:left;" class="type">Size</td>';
			window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].appendChild(newtr);
		};
		}
		if(thisis[actT.x].response.files){
		for(var i=0; i < thisis[actT.x].response.files.length; i++)
		{
			var temp = thisis[actT.x].response.files[i].substring(thisis[actT.x].response.files[i].indexOf(".") + 1);
			if(temp == 'png' || temp == 'jpg' || temp == 'jpeg' || temp == 'gif'){
				var type = 'image';
			} else {
				var type = 'undefined';
			}
			var newtr = document.createElement('tr');
			newtr.innerHTML = '<td style="text-align:left;" class="name"><a onclick="void(0);">'+thisis[actT.x].response.files[i]+'</a></td><td style="text-align:left;" class="type">'+type+'</td>';
			window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].appendChild(newtr);
		};
		}
        } else if (gotoit == 'Applications' || gotoit == 'HDD/Applications') {
		thisis[actT.x].response2 = goto2.responseText;
		thisis[actT.x].response = JSON.parse(goto2.responseText);
		var k = window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].children.length;
		for(var i=1; i < k; i++)
		{
			window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].removeChild(window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].children[1]);
		}
		if(thisis[actT.x].response.files){
		for(var i=0; i < thisis[actT.x].response.files.length; i++)
		{
			var temp = thisis[actT.x].response.files[i].substring(thisis[actT.x].response.files[i].indexOf(".") + 1);
			if(temp == 'png' || temp == 'jpg' || temp == 'jpeg' || temp == 'gif'){
				var type = 'image';
			} else if (temp == 'blu') {
                                var type = 'application';
                        } else {
				var type = 'undefined';
			}
			var newtr = document.createElement('tr');
			newtr.innerHTML = '<td style="text-align:left;" class="name"><a onclick="thisis[actT.x].openapp((this.innerText));">'+thisis[actT.x].response.files[i]+'</a></td><td style="text-align:left;" class="type">'+type+'</td>';
			window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].appendChild(newtr);
		};
		}
        }
        window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[1].innerText = thisis[actT.x].response.location;
        window.actT.children[1].children[2].children[thisis[actT.x].cdivs].removeChild(window.actT.children[1].children[2].children[thisis[actT.x].cdivs].lastChild);
window.actT.children[1].children[2].children[thisis[actT.x].cdivs].style.width = window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].clientWidth+'px';
		MainTools.scrollV(thisis[actT.x].children[1].children[2].children[thisis[actT.x].cdivs], thisis[actT.x], thisis[actT.x].children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0], -(parseInt(window.actT.children[1].children[2].children[thisis[actT.x].cdivs].offsetLeft)+150));				
	};
	};
goto2.send(sendit);
};
var goto = new XMLHttpRequest();
	goto.open('GET', 'users/<? echo $user; ?>/sysapps/FileNet/goto.php', true);
	goto.onreadystatechange = function() {
	if (goto.readyState==4) {
	thisis[actT.x].testit=function(objectit){
	};
		var response = JSON.parse(goto.responseText);
                thisis[actT.x].response = response;
		for(var i=0; i < response.dirs.length; i++)
		{
			var newtr = document.createElement('tr');
			newtr.innerHTML = '<td style="text-align:left;"><a onclick="thisis[actT.x].click(this.parentNode.parentNode);thisis[actT.x].goto(this.innerText);">'+response.dirs[i]+'</a></td><td style="text-align:left;">Size</td>';
			window.actT.children[1].children[2].children[0].children[0].children[0].appendChild(newtr);
		};
		for(var i=0; i < response.files.length; i++)
		{
			var newtr = document.createElement('tr');
			newtr.innerHTML = '<td style="text-align:left;"><a onclick="thisis[actT.x].goto(this.innerText);">'+response.files[i]+'</a></td><td style="text-align:left;">Size</td>';
			window.actT.children[1].children[2].children[0].children[0].children[0].appendChild(newtr);
		};
        thisis[actT.x].response.location = "HDD/";
        window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[1].innerText = thisis[actT.x].response.location;
window.actT.children[1].children[2].children[thisis[actT.x].cdivs].style.width = window.actT.children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0].clientWidth+'px';
		//MainTools.mscroll(thisis[actT.x].children[1].children[0].children[2].children[0]);
		MainTools.scrollV(thisis[actT.x].children[1].children[2].children[thisis[actT.x].cdivs], thisis[actT.x], thisis[actT.x].children[1].children[2].children[thisis[actT.x].cdivs].children[0].children[0], (parseInt(window.actT.children[1].children[2].children[thisis[actT.x].cdivs].offsetLeft)+150*(-1)));	
				
	};
	};
goto.send();
window.mousedownN = function(node, e){
     if(!e){ e=window.event; };
     document.onmousemove = function(e){
     	document.getElementsByClassName(node.parentNode.id)[0].style.width = e.pageX-node.parentNode.offsetLeft-150+'px';
     	}
node.onmouseup = function(){
     document.onmousemove = null;
};
};
thisis[actT.x].listviewt = function() {
       var temp = false;
       if(thisis[actT.x].listview == false) {
for(var i=thisis[actT.x].innerdivs; i > 0; i--) {
        	window.actT.children[1].children[2].removeChild(window.actT.children[1].children[2].children[i]);
        }        
          thisis[actT.x].listview = true;
        thisis[actT.x].innerdivs=0;
       var temp = true;
       } else if(temp != true && thisis[actT.x].listview == true) {
          thisis[actT.x].listview = false;
       };
};
thisis[actT.x].click = function(node) {
            for(var i=0; i < node.parentNode.children.length; i++)
            {
                 node.parentNode.children[i].style.background = '';
            };
       node.style.background='-webkit-linear-gradient(top, #b5bdc8 0%,#828c95 52%,#676868 100%)';
};
</script>
<style>
html{
}
tr {
position:relative;
}
tr:hover {
background:-webkit-linear-gradient(top, #b5bdc8 0%,#828c95 52%,#676868 100%);
}
#back {
width: 20px;
height: 40px;
position: relative;
overflow: hidden;
box-shadow: 0 16px -10px -15px rgba(0, 0, 0, 0.5);
}
#back:after {
content: "";
position: absolute;
width: 20px;
height: 20px;
background: #999;
transform: rotate(45deg);
-ms-transform: rotate(45deg);
-moz-transform: rotate(45deg);
-webkit-transform: rotate(45deg);
-o-transform: rotate(45deg);
top: 10px;
left: 10px;
box-shadow: -1px -1px 8px 0px rgba(0, 0, 0, 0.5);
}​
</style>
<div style="position:absolute;left:0px;top:0px;right:0px;height:35px;background: -moz-linear-gradient(top, rgba(206,220,231,1) 0%, rgba(89,106,114,1) 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(206,220,231,1)), color-stop(100%,rgba(89,106,114,1)));">
<div id="back" onclick="thisis[actT.x].back(thisis[actT.x].response.location.split((thisis[actT.x].response.location.split('/')[(thisis[actT.x].response.location.split('/')).length-1]))[0].substring(0, thisis[actT.x].response.location.split((thisis[actT.x].response.location.split('/')[(thisis[actT.x].response.location.split('/')).length]))[0].length-1));"></div>
</div>
<div id="0" style="position:absolute;left:0px;top:35px;width:150px;bottom:0px;background:#A19FA0;border-right:1px solid black;box-shadow:inset -3px 0px 3px gray;" onmouseover="thisis[actT.x].cdiv=parseInt(this.id);">
<table style="width:100%;">
<tr style="background:-webkit-linear-gradient(top, #b5bdc8 0%,#828c95 52%,#676868 100%);">
<td onclick="thisis[actT.x].click(this.parentNode);thisis[actT.x].back(this.innerText+'/');thisis[actT.x].cdiv=parseInt(-1);">HDD</td>
</tr>
<tr>
<td onclick="thisis[actT.x].click(this.parentNode);thisis[actT.x].goto(this.innerText);">Documents</td>
</tr>
<tr>
<td onclick="thisis[actT.x].click(this.parentNode);thisis[actT.x].goto(this.innerText);">Applications</td>
</tr>
<tr>
<td onclick="thisis[actT.x].click(this.parentNode);thisis[actT.x].goto(this.innerText);">MyPictures</td>
</tr>
</table>
</div>
<div style="position:absolute;left:150px;top:35px;right:0px;bottom:0px;background:#C2E3FF;background:#C2E3FF;border-left:1px solid black;">
<div id="0" style="position:relative;height:100%;float:left;box-shadow: -3px 0px 3px gray;border-left: 1px solid black;padding-right:10px;" onmouseover="thisis[actT.x].cdiv=parseInt(this.id);">
<table id="content" align="left" style="position:relative;top:20px;left:0px;width:auto;height:100%;">
<tbody  style="position:absolute;overflow:hidden;height:100%;width:auto;">
<tr>
<td class="name" id="name" style="position:relative;width:100;background:grey;text-align:left;">name<div style="position: absolute; right: 0px; top: 0px; width: 10px; height: 100%; background: green;" onmousedown="window.mousedownN(this);"></div></td>
<td class="type" id="type" style="position:relative;width:100;background:red;text-align:left;">type<div style="position: absolute; right: 0px; top: 0px; width: 10px; height: 100%; background: green;" onmousedown="window.mousedownN(this);"></div></td>
</tr>
</tbody>
</table>
<div style="position: absolute;top: 0px;left: 0px;width: 100%;height: 20px;font-size: 15px;font-weight: bold;white-space:nowrap;overflow:hidden;" onmouseover="var node=this;window.rep2=window.setInterval(function(){node.scrollLeft=(node.scrollLeft+1);}, 90);" onmouseout="clearInterval(window.rep2);this.scrollLeft=0;"></div>
</div>
</div>