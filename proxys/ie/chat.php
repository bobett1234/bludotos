<html>
<head>
<script src="json2.js"></script>
<script src="math.js"></script>
<script>
function sendm(urlc, callback) {
urlb = 'proxy.php'+'?'+'url='+encodeURIComponent(urlc)+'&mode=native&full_headers=1';
if(window.XMLHttpRequest){
var getb = new XMLHttpRequest();
} else {
var getb = new ActiveXObject("Microsoft.XMLHTTP")
};
getb.open('get', urlb, true);
getb.onreadystatechange = function() {
if (getb.readyState==4) {
// console.log('BOT?');
var datad = getb.responseText;
//window.data=JSON.parse(datad);
//if (data.messages && window.login == 'false') {
window.parsed = JSON.parse(datad);
var parsed2 = JSON.parse(datad);
if (callback) {
callback(parsed2);
};
}
}
getb.send();
};
function get(urlc, callback) {
urla = 'proxy.php'+'?'+'url='+encodeURIComponent(urlc)+'&mode=native&full_headers=1';
if(window.XMLHttpRequest){
var getx = new XMLHttpRequest();
window.getx = getx;
} else {
var getx = new ActiveXObject("Microsoft.XMLHTTP");
window.getx = getx;
};
getx.open('get', urla, true);
getx.onreadystatechange = function() {
if (getx.readyState==4) {
var datad = getx.responseText;
//window.data=JSON.parse(datad);
//if (data.messages && window.login == 'false') {
window.parsed = JSON.parse(datad);
if (!window.token) {
window.token = parsed.token;
} ;
if (window.login == 'true') {
window.parsedu = JSON.parse(datad);
window.userdiv = document.getElementById('users');
for (var i=0; i < parsedu.users.length; i++) {
userdiv.innerHTML+='<font class="users">'+parsedu.users[i].username+'</font>';
};
};
if (parsed.username) {
window.username = parsed.username;
};
//if (!window.time) {
window.time = parsed.time;
//};
if (window.login == 'false' && parsed.messages) {
//if (window.login == 'false') {
for (var i=0; i < parsed.messages.length; i++) {
if (parsed.messages[i].message.substr(0, 7) == 'http://') {
window.paste = document.getElementById('paste');
window.paste.innerHTML+='<div style="border-right:1px solid black;text-align:right;width:12em;">'+parsed.messages[i].from+' </div><font>'+parsed.messages[i].message+'</font>';

window.time=parsed.time;
document.getElementById('pastediv').scrollTop = document.getElementById('paste').scrollHeight;
};
};
};
window.messaging = 'false';
//if (window.token) {
if (window.history == 'true') {
//get('amoeba.im/api/Messages?token='+token+'&since='+new Date().getTime()+'&history=true');
window.history = 'false';
window.login = 'false';
window.messaging = 'false';
startMessagePolling();
}
if (window.history == 'false' && window.finish == 'true') {
// console.log('api/messages', parsed.success, parsed.messages);
window.this_time = new Date().getTime();
//window.tempurl =
//window.this_time = parsed.time;
//setTimeout("get('amoeba.im/api/Messages?token='+token+'&since='+parsed.time+'&history=false');", 5);
//setTimeout("window.finish = 'false';get('amoeba.im/api/messages?token='+encodeURIComponent(window.token)+'&since='+window.this_time);", 5);
//get('amoeba.im/api/Messages?token='+token+'&since='+parsed.time);
window.login = 'false';
window.messaging = 'false';
//window.finish = 'false';
};
//};
if(callback) {
callback(this);
};
};
};
getx.send();
window.pollingit = 'false';
};
window.messageNotification = function(message) {
if (message.from == 'system') {
if(message.message.split(" ")[1] == 'disconnected.') {
for (var b=0; b < window.userdiv.children.length; b++) {
if (window.userdiv.children[b].innerHTML == message.message.split(" ")[0]) {
window.userdiv.removeChild(window.userdiv.children[b]);
sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(message.message.split(' ')[0]+' has left the chat room')+"&token="+window.BOTtoken);
};
};
} else if(message.message.split(" ")[1] == 'joined' && message.message.split(" ")[0] != window.username) {
window.userdiv.innerHTML+='<font class="users">'+message.message.split(" ")[0]+'</font>';
};
};
window.paste.innerHTML+='<div style="border-right:1px solid black;text-align:right;width:12em;">'+message.from+' </div><font>'+message.message+'</font>';

window.time=parsed.time;
document.getElementById('pastediv').scrollTop = document.getElementById('paste').scrollHeight;
};

var pollMessages = function(options) {
var ignoreResponse = false,
url = 'amoeba.im/api/messages?token='+encodeURIComponent(window.token);
options = options || {};
if (window.enableMessagePolling===false) {
window.isMessagePolling = false;
return true;
}
window.isMessagePolling = true;
window.messagePollingTimer = setTimeout(function() {
ignoreResponse = true;
clearTimeout(window.messagePollingTimer);
//pollMessages();
sendm('amoeba.im/api/messages?token='+encodeURIComponent(window.token)+'&since='+(window.pollerSince || ''));
}, 30*1000);
if (options.history===true) {
url += '&history=true'
}
else {
url += '&since='+(window.pollerSince || '');
}
window.pollingit = 'true';
sendm(url, function(response) {
//window.finish = 'false';
var success = response && response.success===true,
messages = success && response.messages,
i, notifyMessageFound=false;
if (ignoreResponse===true || window.enableMessagePolling===false) {
return false;
}
clearTimeout(window.messagePollingTimer);
//console.log('api/messages', success, messages);
if (messages && messages.length>0) {
for (i=0; i<messages.length; i++) {
//if (!notifyMessageFound && messages[i].from!==window.username && messages[i].type==='chat') {
window.messageNotification(messages[i]);
if (messages[i].message.split(' ')[0] == '!bot' && messages[i].message.split(' ')[1] == 'tome' && messages[i].from == window.username) {
sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent('/msg BOT quit')+"&token="+window.token);
setTimeout('hostbot("amoeba.im/api/login?username=BOT");', 5000);
};
window.BOT = 'true';
notifyMessageFound = true;
//}
if (!window.pollerSince || messages[i].id>window.pollerSince) {
window.pollerSince = messages[i].id;
}
//priv.addMessage(messages[i]);
}
}
window.lastMessagesPoll = response.time || new Date().getTime();
if (window.enableMessagePolling===false && response.reconnect!==false) {
window.isMessagePolling = false;
}
else {
window.messagePollingTimer = setTimeout(pollMessages, 5);
}
});
};
var startMessagePolling = function() {
var options;
if (window.enableMessagePolling===true) {
return true;
}
window.enableMessagePolling = true;
if (window.isMessagePolling!==true) {
clearTimeout(window.messagePollingTimer);
if (window.hasPolledEver!==true) {
window.hasPolledEver = true;
options = { history:false };
}
pollMessages(options);
}
};
var stopMessagePolling = function() {
window.enableMessagePolling = false;
if (window.messagePollingTimer) {
clearTimeout(window.messagePollingTimer);
window.isMessagePolling = false;
}
};
var cookie = {
set : function (key, value, days, domain, path, secure) {
var expires = '',
cookie = '',
date;
path = typeof(path)==='string' ? path : '';
if (days) {
date = new Date();
date.setTime(date.getTime() + days*24*60*60*1000);
expires = "; expires="+date.toGMTString();
}
cookie = key + "=" + encodeURIComponent(value) + expires + "; path=/"+path.replace(/^\//,'');
if (typeof(domain)==='string' && domain.length>0) {
cookie += '; domain=' + domain.replace(/[\;\,]/,'');
}
if (secure===true) {
cookie += '; secure';
}
document.cookie = cookie;
},
get : function (key) {
var c, i, ca = document.cookie.split(';');
for (i=0; i<ca.length; i++) {
c = ca[i].replace(/^\s+/gim,'');
if (c.indexOf(key+"=")===0) {
return decodeURIComponent(c.substring(key.length+1,c.length));
}
}
return null;
},
remove	: function (key) {
this.set(key, "", -1);
}
};
function processit() {

if (document.getElementById('url').value == '/quit') {
window.login = 'true';
get("amoeba.im/api/logout?token="+encodeURIComponent(window.token));
stopMessagePolling();
//sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(window.username+' has left the chat room')+"&token="+window.BOTtoken);
//window.login = 'false';
//delete window.token;
};
if (!window.login)  {
window.login = 'true';
window.isMessagePolling = false
get("amoeba.im/api/login?username="+document.getElementById('url').value);
document.getElementById('url').value = '';
document.getElementById('url').style.display='none';
setTimeout('get("amoeba.im/api/rooms/join?room="+encodeURIComponent(\'#lobby\')+"&token="+encodeURIComponent(token))', 1000);
window.history = 'true';
window.loggedin = 'true';
//startMessagePolling();
cookie.set("authusername", window.parsed.username);
} else if (window.loggedin=='true')  {
window.messaging = 'true';
sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(document.getElementById('url2').value)+"&token="+token);
document.getElementById('url').value = '';
};
};
window.addEventListener('keypress', function(event) {
if (event.target==document.getElementById('url')) {
if (event.keyCode==13) {
processit();
};
};
}, true);
function sendmessage() {
sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(document.getElementById('url2').value)+"&token="+token);
document.getElementById('url2').value = '';
};
//window.onblur = function() {startMessagePolling();};
//window.onfocus = function() {stopMessagePolling();window.isMessagePolling = false;};
//<input type="button" style="position:fixed;bottom:0px;right:0px;width:40px;height:20px;z-index:2;" value="Send" onclick="processit();"/>
</script>
<script>
//parsedt.messages[1].from
</script>
<style>
.users {
float:left;
width:100%;
}
</style>
</head>
<body onload="document.getElementById('url').focus();document.onclick=function(){document.getElementById('url').focus();};">
<div id="pastediv" style="width:100%;top:0px;left:0px;position:absolute;overflow-y:scroll;">
<div style="position:relative;top:0px;bottom:0px;width:500px;height:500px;left:0px;overflow-y:scroll;z-index:1;background:green;" id="paste"></div>
</div>
<div id="users" style="width:100px;top:0px;right:0px;position:absolute;height:100%;background:#D0D6DF;bottom:0px;z-index:5;">
</div>
<input style="position:absolute;bottom:0px;left:0px;width:100%;z-index:10;display:block;" id="url" type="textbox" />
<input style="position:absolute;bottom:0px;left:0px;width:100%;z-index:9;" id="url2" type="textbox" />
<input type="button" value="login" onclick="processit();" style="position:absolute;bottom:20px;right:50px;z-index:20;" />
<input type="button" value="send" onclick="sendmessage();" style="position:absolute;bottom:20px;right:0px;z-index:20;" />
<script>
window.onmousemove = function() {
document.getElementById('pastediv').style.height = (parseInt(document.body.clientHeight)-parseInt(document.getElementById('url').clientHeight)-15)+'px';
};
</script>
</body>
</html>
