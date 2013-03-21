<html>
<head>
<style>
body {
background:
linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
background-color: #131313;
background-size: 20px 20px;; background:
-webkit-linear-gradient(63deg, #151515 5px, transparent 5px) 0 5px,
-webkit-linear-gradient(-117deg, #151515 5px, transparent 5px) 10px 0px,
-webkit-linear-gradient(63deg, #222 5px, transparent 5px) 0px 10px,
-webkit-linear-gradient(-117deg, #222 5px, transparent 5px) 10px 5px,
-webkit-linear-gradient(0deg, #1b1b1b 10px, transparent 10px),
-webkit-linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
background-color: #131313;
background-size: 20px 20px;
}
h2 {
	color:grey;
}
h3 {
	color:grey;
}
h4 {
	color:grey;
}
p {
	color:grey;
}
</style>
<script>
var tab = function(node) {
	for(var i=1; i < node.parentNode.children.length; i++)
	{
		if (node.parentNode.children[i] != node) {
			node.parentNode.children[i].style.top = 20+'px';
		}
	}
	document.getElementsByClassName(node.className)[1].style.display='block';
	for(var i=1; i < document.body.children.length; i++) {
		if (document.body.children[i].className != node.className) {
			document.body.children[i].style.display = 'none';
		}
	}
};
</script>
</head>
<body onload="document.body.children[0].children[3].style.top=10+'px';tab(document.body.children[0].children[3]);">
<div id="tabs" style="width:100%;height:100px;border-top-left-radius: 30px;border-top-right-radius: 30px;position: relative;top: 0px;left: 0px;overflow: hidden;background: -webkit-radial-gradient(black 15%, transparent 16%) 0 0, -webkit-radial-gradient(black 15%, transparent 16%) 8px 8px, -webkit-radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 0 1px, -webkit-radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 8px 9px; background-color:#282828; background-size:16px 16px;; background: -webkit-radial-gradient(black 15%, transparent 16%) 0 0, -webkit-radial-gradient(black 15%, transparent 16%) 8px 8px, -webkit-radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 0 1px, -webkit-radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 8px 9px; background-color:#282828; background-size:16px 16px;box-shadow: inset 0px 5px 15px rgba(0, 0, 0, .8);">
<div id="tabs" style="width:100%;height: 10px;background: transparent;box-shadow: inset 0px -5px 5px rgba(0, 0, 0, .5);position: absolute;bottom: 0px;left: 0px;z-index: 5;"></div>
	<div class="OS" style="width: auto;height: 90px;background: white;position: relative;border-top-left-radius: 30px;border-top-right-radius: 30px;top: 20px;margin-left: 10px;text-align:center;float:left;padding: 0 8px 0 8px;box-shadow: inset 0px -1px 10px rgba(0, 0, 0, .5);" onclick="this.style.top=10+'px';tab(this);">
		<font style="font-size: 40px;top: 20px;position: relative;">
			About OS
		</font>
	</div>
	<div class="OSAPI" style="width: auto;height: 90px;background: white;position: relative;border-top-left-radius: 30px;border-top-right-radius: 30px;top: 20px;margin-left: 10px;text-align:center;float:left;padding: 0 8px 0 8px;box-shadow: inset 0px -1px 10px rgba(0, 0, 0, .5);" onclick="this.style.top=10+'px';tab(this);">
		<font style="font-size: 40px;top: 20px;position: relative;">
			OS API
		</font>
	</div>
	<div class="DEVAPI" style="width: auto;height: 90px;background: white;position: relative;border-top-left-radius: 30px;border-top-right-radius: 30px;top: 20px;margin-left: 10px;text-align:center;float:left;padding: 0 8px 0 8px;box-shadow: inset 0px -1px 10px rgba(0, 0, 0, .5);" onclick="this.style.top=10+'px';tab(this);">
		<font style="font-size: 40px;top: 20px;position: relative;" >
			DevCenter API
		</font>
	</div>
	<div style="width: auto;height: 90px;background: white;position: relative;border-top-left-radius: 30px;border-top-right-radius: 30px;top: 20px;margin-left: 10px;text-align:center;float:left;padding: 0 8px 0 8px;box-shadow: inset 0px -1px 10px rgba(0, 0, 0, .5);" onclick="this.style.top=10+'px';tab(this);">
		<font style="font-size: 40px;top: 20px;position: relative;">
			About OS
		</font>
	</div>
</div>
<div class="OS" style="display:none;">
<h2>About This OS</h2>
</div>
<div class="OSAPI" style="display:none;">
<h2>OS API</h2>
</div>
<div class="DEVAPI" style="display:none;">
<h2>DevCenter API</h2>
&nbsp;
<h3>How The DevCenter Runs</h3>
<p>The DevCenter API is custom built. It loads a div all via ajax. Then it loads the main app. You can change the name and save it as any app. What really happens is that APP.blu is unzipped and put in a temperary folder and everything is read from there.

Then you can also choose to open a app. This unzips the app from your applications folder and copies to the temp folder. You edit, save to temp folder, and debug. You can choose to build at anytime and when the DevCenter closes it automatically saves and builds the app.

Debuging the app will open the app as if it were really running. An error console is not yet avaliable but, that will come sometime later. For now one can use the developer tools of the browser.

You can close, edit and debug an app as much as you want. Once you are finished you can run the app from FileNet in the applications folder. Obiously some apps are not there because they are system apps and shoul not be touched</p>

<h3>Now The API</h3>

<p>You must know javascript to be able to create apps.</p>
<h4>thisis[actT.x]</h4>

<p>'Thisis[actT.x]' holds all the open windows. This willstore all you app functions too. Every app must start with one specification. The below code can be copied and pasted:
<textarea style="width:100%;height:490px;">
thisis[actT.x].menu = function() {
window.bar(0);
var menu = document.getElementById('menu0');
menu.innerHTML = '<li onclick="clickt(this);"><a>Mail</a></li><ul></ul><li onclick="clickt(this);"><a>File</a></li><ul><li onmouseover="movet(this.children[1], 1);" onmouseout="movet(this.children[1], 0);"><a onmouseover="movet(this.children[1], 1);" onmouseout="movet(this.children[1], 0);">new</a><ul><li><a onclick="thisis[actT.x].newaccount();">Account</a></li></ul></li></ul><li><a>Edit</a></li><ul></ul>';
}
thisis[actT.x].menu();
Doc.parentNode.onclose = function() {
    clearInterval(thisis[actT.x].push);
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
    delete window.tested;
    delete window.tester;
    delete Doc;
    thisis.pop();
    return true;
};
</p>
<br>
</textarea>
<br>
There for all functions will be written as:
<br>
thisis[actT.x].func = function(){
	};
<br>
The reason for this is because it keeps all functions strictly to the open app. acT.x is the array number of the currently open app.

<h4>Doc</h4>

<p>The Doc is the 'div' or the window that your app will be run in. You can only add elements to them. This can be done either by:
<br>
Doc.innerHTML = 'div';
<br>
or
<br>
Doc.appendChild(node);
<br>
There is not much to say on this.
</p>
<br>
<h4>Doc.ajax()</h4>
<br>
<p>Doc.ajax(url, callback, type, send, sync);
<br>
The Doc.ajax() does exactly what it says: ajax requests.
<br>
url: The url of the page you are reaching. This can be a page on another site or a local page.
<br>
callback: The callback function to be run when the ajax finishes.
<br>
type: There are three types. HTML, JSON, and TEXT. HTML will return a node. JSON will return JSON output. TEXT will return just plain text.
<br>
send: This will send variables. It is set to GET. Because the apps are only accessing BluDot, there is no need to use POST.
<br>
sync: Determine if the app will wait for ajax to finish or continue to run while ajax fetches data.
<br>
There are some notes to the callback. The callback must be:
<br>
function(obj){
};
<br>
You can put whatever you want in there.
<br>
Here is an example of how to use it correctly. This is taken from the mail app. The current mail app(still in development) full code is pasted further below.
<br>
</p>
<textarea style="width:100%;height:300px">
Doc.ajax('prefs.php', function(obj) {
    window.tested2 = obj;
    if(window.tested2.accounts.length < 1) {
        MainTools.popup(['server', 'username', 'password']);
    } else {
        thisis[actT.x].a = [];
        for (var i=0; i < window.tested2.accounts.length; i+=3)
        {
        thisis[actT.x].a[i] = window.tested2.accounts[i].server;
        thisis[actT.x].a[i+1] = window.tested2.accounts[i].username;
       thisis[actT.x].a[i+2] = window.tested2.accounts[i].password;
        }
        thisis[actT.x].callback(thisis[actT.x].a);
        thisis[actT.x].push = window.setInterval(function(){thisis[actT.x].callback(thisis[actT.x].a);}, 1000);
        MainTools.scrollV(thisis[actT.x].children[1].children[2], thisis[actT.x], thisis[actT.x].chilren[1].children[2]);
    };
}, 'json', null, false);
</textarea>
<br>
<h4>Mail.blu</h4>
<textarea style="width:100%;height:1750px;">
thisis[actT.x].menu = function() {
window.bar(0);
var menu = document.getElementById('menu0');
menu.innerHTML = '<li onclick="clickt(this);"><a>Mail</a></li><ul></ul><li onclick="clickt(this);"><a>File</a></li><ul><li onmouseover="movet(this.children[1], 1);" onmouseout="movet(this.children[1], 0);"><a onmouseover="movet(this.children[1], 1);" onmouseout="movet(this.children[1], 0);">new</a><ul><li><a onclick="thisis[actT.x].newaccount();">Account</a></li></ul></li></ul><li><a>Edit</a></li><ul></ul>';
}
thisis[actT.x].menu();
thisis[actT.x].newaccount = function () {
    MainTools.popup(['server', 'username', 'password']);
    thisis[actT.x].form = function (a)
    {
        var temps = '';
        for (var i=0; i < thisis[actT.x].a.length; i+=3)
        {
            temps+= thisis[actT.x].a[i];
            //if(i != (thisis[actT.x].a.length-4)) {
            //temp+= ',';
            //}
        }
        window.temps = temps;
           var tempu = '';
        for (var i=1; i < thisis[actT.x].a.length; i+=3)
        {
            tempu+= thisis[actT.x].a[i];
            //if(i != (thisis[actT.x].a.length-4)) {
            //temp+= ',';
            //}
        }
        window.tempu = tempu;
        var tempp = '';
        for (var i=2; i < thisis[actT.x].a.length; i+=3)
        {
            tempp+= thisis[actT.x].a[i];
            //if(i != (thisis[actT.x].a.length-4)) {
            //temp+= ',';
            //}
        }
        window.tempp = tempp;
        Doc.ajax('addaccount.php', function(obj) {alert(obj)}, 'json', 'server='+a[0]+'&user='+a[1]+'&pass='+a[2]+'&oserver='+temps+'&ouser='+tempu+'&opass='+tempp, false);
    };
};
thisis[actT.x].callback = function(a) {
Doc.ajax('html.txt', function(obj) {
    window.tester = obj;
    Doc.ajax('getmesg.php', function(obj) {
    window.tested = obj; 
    window.tester.children[2].innerHTML += window.tested.innerHTML;
    if(!thisis[actT.x].messages)
    {
        thisis[actT.x].messages = tested.children[2].children[0].children.length;
    Doc.innerHTML = tester.innerHTML; 
window.tester.children[2].innerHTML = window.tested.innerHTML;
Doc.innerHTML = tester.innerHTML;
Doc.children[2].style.cssText+='overflow:hidden;';
Doc.children[2].children[2].children[0].style.cssText+='overflow: hidden;position: absolute;bottom: 0px;height: 100%;';
MainTools.scrollV(Doc.children[2].children[2], Doc.parentNode, Doc.children[2].children[2].children[0]);
    } else {
        if(thisis[actT.x].messages < tested.children[2].children[0].children.length)
        {
            MainTools.Notify(tested.children[2].children[0].children[0].children[0].innerText+':<br>'+tested.children[2].children[0].children[0].children[1].innerText);
    //Doc.innerHTML = tester.innerHTML; 
            thisis[actT.x].messages = tested.children[2].children[0].children.length;
Doc.children[2].children[2].children[0].insertBefore(window.tested.children[2].children[0].children[0], Doc.children[2].children[2].children[0].firstChild);
Doc.children[2].children[2].children[0].insertBefore(window.tested.children[2].children[0].children[0], Doc.children[2].children[2].children[0].children[1]);
//Doc.innerHTML = tester.innerHTML;
        }
    }
}, 'html', 'server={'+a[0]+':143/novalidate-cert}INBOX&username='+a[1]+'&password='+a[2], false);
}, 'html', null, false);
Doc.parentNode.onclose = function() {
    clearInterval(thisis[actT.x].push);
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
    delete window.tested;
    delete window.tester;
    delete Doc;
    thisis.pop();
    return true;
};
};
Doc.ajax('prefs.php', function(obj) {
    window.tested2 = obj;
    if(window.tested2.accounts.length < 1) {
        MainTools.popup(['server', 'username', 'password']);
    } else {
        thisis[actT.x].a = [];
        for (var i=0; i < window.tested2.accounts.length; i+=3)
        {
        thisis[actT.x].a[i] = window.tested2.accounts[i].server;
        thisis[actT.x].a[i+1] = window.tested2.accounts[i].username;
       thisis[actT.x].a[i+2] = window.tested2.accounts[i].password;
        }
        thisis[actT.x].callback(thisis[actT.x].a);
        thisis[actT.x].push = window.setInterval(function(){thisis[actT.x].callback(thisis[actT.x].a);}, 1000);
        MainTools.scrollV(thisis[actT.x].children[1].children[2], thisis[actT.x], thisis[actT.x].chilren[1].children[2]);
    };
}, 'json', null, false);
</textarea>
</div>
</body>
</html>