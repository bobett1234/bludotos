<html>
<head>
<script src="json2.js"></script>
<script src="math.js"></script>
<script>
window.BOT = 'false';
function getbot(urlc, callback) {
	urlb = 'proxy.php'+'?'+'url='+encodeURIComponent(urlc)+'&mode=native&full_headers=1';
        if(window.XMLHttpRequest){
	var getbt = new XMLHttpRequest();
        } else {
        var getbt = new ActiveXObject("Microsoft.XMLHTTP")
        };
	getbt.open('get', urlb, true);
 	getbt.onreadystatechange = function() {
		if (getbt.readyState==4) {
window.userdiv = document.getElementById('users');
                     var datad = getbt.responseText;
			//window.data=JSON.parse(datad);
                        //if (data.messages && window.login == 'false') {                        
			//window.parsed = JSON.parse(datad);
			var parsed2 = JSON.parse(datad);
                        //window.BOTtoken = parsed2.token;
                        get("amoeba.im/api/rooms/join?room="+encodeURIComponent('#lobby')+"&token="+encodeURIComponent(parsed2.token)+"");
window.BOT = 'true';
get("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(window.username+' has joined the chat')+"&token="+parsed2.token);
                        startbotpoll(parsed2.token);
        if(callback) {
            //callback(parsed2);
        };
        }
        }
        getbt.send();
};
function botmsgpoll(urlc, token, callback) {
console.log('bot message poll function');
	urlb = 'proxy.php'+'?'+'url='+encodeURIComponent(urlc)+'&mode=native&full_headers=1';
        if(window.XMLHttpRequest){
	var getbp = new XMLHttpRequest();
        } else {
        var getbp = new ActiveXObject("Microsoft.XMLHTTP")
        };
	getbp.open('get', urlb, true);
 	getbp.onreadystatechange = function() {
		if (getbp.readyState==4) {
                    console.log('BOT message poll');
                     var datad = getbp.responseText;
			//window.data=JSON.parse(datad);
                        //if (data.messages && window.login == 'false') {                        
			window.parsed = JSON.parse(datad);
			var parsed2 = JSON.parse(datad);
                        if (callback) {
                            callback(parsed2, token);
                        };
        }
        }
        getbp.send();
};
function sendbot(urlc, callback) {
	urlb = 'proxy.php'+'?'+'url='+encodeURIComponent(urlc)+'&mode=native&full_headers=1';
        if(window.XMLHttpRequest){
	var getbd = new XMLHttpRequest();
        } else {
        var getbd = new ActiveXObject("Microsoft.XMLHTTP")
        };
	getbd.open('get', urlb, true);
 	getbd.onreadystatechange = function() {
		if (getbd.readyState==4) {
                    console.log('BOT send');
                     var datad = getbd.responseText;
			//window.data=JSON.parse(datad);
                        //if (data.messages && window.login == 'false') {                        
			window.parsed = JSON.parse(datad);
			var parsed2 = JSON.parse(datad);
                        if (callback) {
                            //callback(parsed2);
                        };
        }
        }
        getbd.send();
};
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
                            //callback(parsed2);
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
                             if (parsed.users[i].username == 'BOT') {
                                 window.BOT = 'true';
                             };
                        };
                        if (window.BOT.login) {
                            //window.BOTtoken = parsed.token;
                        };
                        if (window.BOT == 'false') {
                        window.temptoken = window.token;
                        getbot("amoeba.im/api/login?username=BOT");
                        window.BOT = 'true';
                        };
                        };
			if (parsed.username && parsed.username != 'BOT') {
				window.username = parsed.username;
			};
			//if (!window.time) {
				window.time = parsed.time;
			//};
			//if (window.login == 'false') {
                        if(callback) {
                               callback(this);
                        };
		};
	};
	getx.send();
                window.pollingit = 'false';
};
window.messageNotification = function(message) {
                    //get('amoeba.im/api/messages?token='+encodeURIComponent(window.token)+'&since='+(window.botpollerSince || ''));
                    if (message.from == 'system') {
                            if(message.message.split(" ")[1] == 'disconnected.') {
                                  for (var b=0; b < window.userdiv.children.length; b++) {
                                       if (window.userdiv.children[b].innerHTML == message.message.split(" ")[0]) {
                                            window.userdiv.removeChild(window.userdiv.children[b]);
                                       }
                                   }
                            } else if(message.message.split(" ")[1] == 'joined' && message.message.split(" ")[0] != window.username) {
                                     window.userdiv.innerHTML+='<font class="users">'+message.message.split(" ")[0]+'</font>';
                            }
                        }
			if (message.message.substr(0, 7) == 'http://' || message.message.substr(0, 8) == 'https://') {
				window.divm = document.createElement('tr');
				divm.style.cssText = 'border-top:1px solid black;position:relative;width:100%;height:auto;top:0px;left:0px;font-size:10;';
				divm.innerHTML='<td style="border-right:1px solid black;text-align:right;width:12em;"><font style="text-align:right;">'+message.from+'</font></td>';
                                var a = document.createElement('a');
                                a.href = message.message;
                                a.target = '_blank';
                                a.innerText = message.message;
                                divm.appendChild(a);
				document.getElementById('paste').appendChild(divm);
				//window.time=parsed.time;
				//document.getElementById('pastediv').scrollTop = document.getElementById('paste').scrollHeight;
                                if (message.message.substr((message.message.length-3), message.message.length) == 'png' || message.message.substr((message.message.length-3), message.message.length) == 'jpg' || message.message.substr((message.message.length-3), message.message.length) == 'gif' || message.message.substr((message.message.length-3), message.message.length) == 'jepg' || message.message.substr((message.message.length-3), message.message.length) == 'svg') {
			//window.divm = document.createElement('tr');
			//divm.style.cssText = 'border-top:1px solid black;position:relative;width:100%;height:auto;top:0px;left:0px;font-size:10;';
                        var img = document.createElement('img');
                        img.src = message.message;
                        img.style.cssText = 'width:100px;height=100px;';
			divm.appendChild(img);
			//document.getElementById('paste').appendChild(divm);
			window.time=parsed.time;
			document.getElementById('pastediv').scrollTop = document.getElementById('paste').scrollHeight;
			} else if (message.message.substr(0, 14) == 'http://youtube' || message.message.substr(0, 18) == 'http://www.youtube') {
			//window.divm = document.createElement('tr');
			//divm.style.cssText = 'border-top:1px solid black;position:relative;width:100%;height:auto;top:0px;left:0px;font-size:10;';
                        var iframe = document.createElement('iframe');
                        iframe.src = 'http://youtube.com/embed/'+message.message.substr(31, message.message.length);
			divm.appendChild(iframe);
			//document.getElementById('paste').appendChild(divm);
			window.time=parsed.time;
			document.getElementById('pastediv').scrollTop = document.getElementById('paste').scrollHeight;
                        };
			} else {
				window.divm = document.createElement('tr');
				divm.style.cssText = 'border-top:1px solid black;position:relative;width:100%;height:auto;top:0px;left:0px;font-size:10;';
				divm.innerHTML='<td style="border-right:1px solid black;text-align:right;width:12em;">'+message.from+' </td>';
                                divm.appendChild(document.createTextNode(message.message));
				document.getElementById('paste').appendChild(divm);
				window.time=parsed.time;
				document.getElementById('pastediv').scrollTop = document.getElementById('paste').scrollHeight;
                        };
};
var pollbot = function(options, token, users) {
                console.log('poll bot');
                var users = users;
		var ignoreResponse = false,
			url = 'amoeba.im/api/messages?token='+encodeURIComponent(token);
		options = options || {};
		if (window.enablebotPolling===false) {
			window.isbotPolling = false;
			return true;
		}
		window.isbotPolling = true;
                var token = token;
		window.botPollingTimer = setTimeout(function() {
			ignoreResponse = true;
			clearTimeout(window.botPollingTimer);
			//pollbot(null, token, users);
                          sendbot('amoeba.im/api/messages?token='+encodeURIComponent(token)+'&since='+(window.botpollerSince || ''));
		}, 30*1000);
		if (options.history===true) {
			url += '&history=true'
		}
		else {
			url += '&since='+(window.botpollerSince || '');
		}
                //window.pollingit = 'true';
		botmsgpoll(url, token, function(response, token) {
                //window.finish = 'false';
			var success = response && response.success===true,
				messages = success && response.messages,
				i, notifyMessageFound=false;
			if (ignoreResponse===true || window.enablebotPolling===false) {
				return false;
			}
			clearTimeout(window.botPollingTimer);
			//console.log('api/messages', success, messages);
			if (messages && messages.length>0) {
				for (i=0; i<messages.length; i++) {
                                        window.messageNotification(messages[i]);
                                        if (parsed.messages[i].from == 'system') {
                            if(parsed.messages[i].message.split(" ")[1] == 'disconnected.') {
                                  for (var b=0; b < window.userdiv.children.length; b++) {
                                       if (window.userdiv.children[b].innerHTML == window.parsed.messages[i].message.split(" ")[0]) {
                                            sendbot("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(window.parsed.messages[i].message.split(' ')[0]+' has left the chat room')+"&token="+token);
                                            window.userdiv.removeChild(window.userdiv.children[b]);
                                       }
                                   }
                            } else if(parsed.messages[i].message.split(" ")[1] == 'joined' && parsed.messages[i].message.split(" ")[0] != window.username) {
                                     if (parsed.messages[i].message.split(' ')[0] != 'jason') {
                                     sendbot("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(window.parsed.messages[i].message.split(' ')[0]+' has joined the chat room')+"&token="+token);
                                     } else {
                                     sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent('the jason-king has joined the chat room')+"&token="+token);
                                     };
                                     window.userdiv.innerHTML+='<font class="users">'+window.parsed.messages[i].message.split(" ")[0]+'</font>';
                            }
                        }
                                 if (messages[i].to == 'BOT' && messages[i].type == 'pm' && messages[i].message.split(' ')[0] == 'identify') {
                        //registerbot(messages[i].message.split(' ')[1], messages[i].message.split(' ')[2]);
                        window.tempmsg = messages[i].from;
                        var identify = new XMLHttpRequest();
                               var identifyd = 'user='+messages[i].from+'&pass='+messages[i].message.split(' ')[2];
                               identify.open('POST', 'sign.php', true);
                               identify.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                               identify.onreadystatechange = function() {
                               if (identify.readyState==4) {
                                       var responsetext = identify.responseText;
                                       var load = responsetext;
                                      //if(identify.responseText == "success") {
                                      sendbot("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent('/msg '+window.tempmsg+' success '+identify.responseText+' '+users)+"&token="+token);
                                      for (var t=0; t < users.length; t++) {
                                      if(window.tempmsg == users[t][0]) {
                                         var newuser = true;
                                      };
                                      };
                                      if (!newuser) {
                                          users.push([window.tempmsg, load]);
                                      };
                                      //};
                               };
                               };
                               identify.send(identifyd);
                        };
                                for (var f=0; f < users.length; f++) {
					if (messages[i].from == users[f][0]) {
                        if (messages[i].to == 'BOT' && messages[i].type == 'pm' && messages[i].message.split(' ')[0] == 'register' && users[f][1] == 9) {
                        //registerbot(messages[i].message.split(' ')[1], messages[i].message.split(' ')[2]);
                        var register = new XMLHttpRequest();
                               var registerd = 'user='+messages[i].message.split(' ')[1]+'&pass='+messages[i].message.split(' ')[2]+'&level='+messages[i].message.split(' ')[3];
                               register.open('POST', 'register.php', true);
                               register.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                               register.onreadystatechange = function() {
                               if (register.readyState==4) {
                                      sendbot("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent('/msg James success '+register.responseText)+"&token="+token);
                               };
                               };
                               register.send(registerd);
                        } else if (messages[i].to == 'BOT' && messages[i].type == 'pm' && messages[i].message.split(' ')[0] == 'say' && users[f][1] == 9) {
                        window.tempmesg = messages[i];
                            sendbot("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(messages[i].message.substr(4))+"&token="+token);
                        } else if (messages[i].to == 'BOT' && messages[i].type == 'pm' && messages[i].message.split(' ')[0] == 'quit' && users[f][1] ==9) {
                        window.tempmesg = messages[i];
                            sendbot("amoeba.im/api/logout?token="+encodeURIComponent(token));
                        } else if (messages[i].message.split(' ')[0] == '!calc' && users[f][1] == 9) {
                          sendbot("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(messages[i].message.substr(6)+'='+calculate(messages[i].message.substr(6)))+"&token="+token);
                        };
                        };
                        };
					if (!window.botpollerSince || messages[i].id>window.botpollerSince) {
						window.botpollerSince = messages[i].id;
					}
					//priv.addMessage(messages[i]);
				}
			}
			window.lastbotPoll = response.time || new Date().getTime();
			if (window.enablebotPolling===false && response.reconnect!==false) {
				window.isbotPolling = false;
			}
			else {
				window.botPollingTimer = setTimeout(pollbot(null, token, users), 5);
			}
		});
	};

var startbotpoll = function(token) {
                var users = [];
		var options;
		if (window.enablebotPolling===true) {
			return true;
		}
		window.enablebotPolling = true;
		if (window.isbotPolling!==true) {
			clearTimeout(window.botPollingTimer);
			if (window.hasbotPolledEver!==true) {
				window.hasbotPolledEver = true;
				options = { history:false };
			}
			pollbot(options, token, users);
		}
	};
	var stopMessagePolling = function() {
		window.enableMessagePolling = false;
		if (window.messagePollingTimer) {
			clearTimeout(window.messagePollingTimer);
                        window.isMessagePolling = false;
		}
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
			pollMessages();
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
				window.messagePollingTimer = setTimeout(pollMessages, 10);
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
                        sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(window.username+' has left the chat room')+"&token="+window.BOTtoken);
			//window.login = 'false';
			//delete window.token;
		};
		if (!window.login)  {
			window.login = 'true';
                        window.isMessagePolling = false
			get("amoeba.im/api/login?username="+document.getElementById('url').value);
			document.getElementById('url').value = '';
			setTimeout('get("amoeba.im/api/rooms/join?room="+encodeURIComponent(\'#lobby\')+"&token="+encodeURIComponent(token))', 1000);
			window.history = 'true';
			window.loggedin = 'true';
                        //startMessagePolling();
                        cookie.set("authusername", window.parsed.username);
		} else if (window.loggedin=='true')  {
			window.messaging = 'true';
                        //window.getx.abort();
			sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(document.getElementById('url').value)+"&token="+token);
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
//window.onblur = function() {startMessagePolling();};
//window.onfocus = function() {stopMessagePolling();window.isMessagePolling = false;};
//<input type="button" style="position:fixed;bottom:0px;right:0px;width:40px;height:20px;z-index:2;" value="Send" onclick="processit();"/>
getbot("amoeba.im/api/login?username=BOT");
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
<div id="pastediv" style="width:100%;top:0px;left:0px;position:fixed;overflow-y:scroll;">
<table style="position:relative;top:0px;bottom:0px;width:100%;left:0px;overflow-y:scroll;z-index:1;border-collapse:collapse;" id="paste"></table>
</div>
<div id="users" style="width:100px;top:0px;right:0px;position:fixed;height:100%;background:#D0D6DF;bottom:0px;z-index:5;">
</div>
<input style="position:fixed;bottom:0px;left:0px;width:100%;z-index:10;" id="url" type="textbox" />
<script>
window.onmousemove = function() {
document.getElementById('pastediv').style.height = (parseInt(document.body.clientHeight)-parseInt(document.getElementById('url').clientHeight)-15)+'px';
};
</script>
</body>
</html>