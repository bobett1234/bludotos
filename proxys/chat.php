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
                     var datad = getbt.responseText;
			//window.data=JSON.parse(datad);
                        //if (data.messages && window.login == 'false') {                        
			//window.parsed = JSON.parse(datad);
			var parsed2 = JSON.parse(datad);
                        //window.BOTtoken = parsed2.token;
if(window.secret == 'true'){
                        get("amoeba.im/api/rooms/join?room="+encodeURIComponent('#secret')+"&token="+encodeURIComponent(parsed2.token)+"");
} else {
get("amoeba.im/api/rooms/join?room="+encodeURIComponent('#lobby')+"&token="+encodeURIComponent(parsed2.token)+"");
};
window.BOT = 'true';
if(window.secret == 'true'){
get("amoeba.im/api/postMessage?room="+encodeURIComponent('#secret')+"&message="+encodeURIComponent(window.username+' has joined the chat')+"&token="+parsed2.token);
} else {
get("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(window.username+' has joined the chat')+"&token="+parsed2.token);
};
                        startbotpoll(parsed2.token);
        if(callback) {
            callback(parsed2);
        };
        }
        }
        getbt.send();
};
function hostbot(urlc, callback) {
	urlb = 'proxy.php'+'?'+'url='+encodeURIComponent(urlc)+'&mode=native&full_headers=1';
        if(window.XMLHttpRequest){
	var getbt = new XMLHttpRequest();
        } else {
        var getbt = new ActiveXObject("Microsoft.XMLHTTP")
        };
	getbt.open('get', urlb, true);
 	getbt.onreadystatechange = function() {
		if (getbt.readyState==4) {
                     var datad = getbt.responseText;
			//window.data=JSON.parse(datad);
                        //if (data.messages && window.login == 'false') {                        
			//window.parsed = JSON.parse(datad);
			var parsed2 = JSON.parse(datad);
                        //window.BOTtoken = parsed2.token;
if(window.secret == 'true'){
                        get("amoeba.im/api/rooms/join?room="+encodeURIComponent('#secret')+"&token="+encodeURIComponent(parsed2.token)+"");
} else {
get("amoeba.im/api/rooms/join?room="+encodeURIComponent('#lobby')+"&token="+encodeURIComponent(parsed2.token)+"");
};
window.BOT = 'true';
if(window.secret == 'true'){
get("amoeba.im/api/postMessage?room="+encodeURIComponent('#secret')+"&message="+encodeURIComponent(window.username+' now hosts BOT')+"&token="+parsed2.token);
} else {
get("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(window.username+' now hosts BOT')+"&token="+parsed2.token);
};
                        startbotpoll(parsed2.token);
        if(callback) {
            callback(parsed2);
        };
        }
        }
        getbt.send();
};
function botcmd(token, users, secretu, message, callback) {
        if(window.XMLHttpRequest){
	var getbc = new XMLHttpRequest();
        } else {
        var getbc = new ActiveXObject("Microsoft.XMLHTTP")
        };
	getbc.open('get', 'botcmd', true);
 	getbc.onreadystatechange = function() {
		if (getbc.readyState==4) {
                    // console.log('BOT?');
                     var datad = getbc.responseText;
			//window.data=JSON.parse(datad);
                        //if (data.messages && window.login == 'false') {                        
			//window.parsed = JSON.parse(datad);
			//var parsed2 = JSON.parse(datad);
                        eval(datad);
                        if (callback) {
                            callback(parsed2, token);
                        };
        }
        }
        getbc.send();
};
function botmsgpoll(urlc, token, callback) {
	urlb = 'proxy.php'+'?'+'url='+encodeURIComponent(urlc)+'&mode=native&full_headers=1';
        if(window.XMLHttpRequest){
	var getbp = new XMLHttpRequest();
        } else {
        var getbp = new ActiveXObject("Microsoft.XMLHTTP")
        };
	getbp.open('get', urlb, true);
 	getbp.onreadystatechange = function() {
		if (getbp.readyState==4) {
                    // console.log('BOT?');
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
function quitbot(urlc, callback) {
	urlb = 'proxy.php'+'?'+'url='+encodeURIComponent(urlc)+'&mode=native&full_headers=1';
        if(window.XMLHttpRequest){
	var getbd = new XMLHttpRequest();
        } else {
        var getbd = new ActiveXObject("Microsoft.XMLHTTP")
        };
	getbd.open('get', urlb, true);
 	getbd.onreadystatechange = function() {
		if (getbd.readyState==4) {
                    // console.log('BOT?');
                     var datad = getbd.responseText;
			//window.data=JSON.parse(datad);
                        //if (data.messages && window.login == 'false') {                        
			window.parsed = JSON.parse(datad);
			var parsed2 = JSON.parse(datad);
                        getbot("amoeba.im/api/login?username=BOT");
                        window.BOT = 'true';
                        if (callback) {
                            callback(parsed2);
                        };
        }
        }
        getbd.send();
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
                    // console.log('BOT?');
                     var datad = getbd.responseText;
			//window.data=JSON.parse(datad);
                        //if (data.messages && window.login == 'false') {                        
			window.parsed = JSON.parse(datad);
			var parsed2 = JSON.parse(datad);
                        if (callback) {
                            callback(parsed2);
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
                        if(window.parsed.rooms){
                        window.rooms = window.parsed.rooms;
                        };
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
			window.data=datad;
                        //if (data.messages && window.login == 'false') {                        
			window.parsed = JSON.parse(datad);
                        window.rooms = JSON.parse(datad).rooms;
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
			if (window.login == 'false' && parsed.messages) {
			//if (window.login == 'false') {
			for (var i=0; i < parsed.messages.length; i++) {
			if (parsed.messages[i].message.substr(0, 7) == 'http://') {
				window.divm = document.createElement('tr');
				divm.style.cssText = 'border-top:1px solid black;position:relative;width:100%;height:auto;top:0px;left:0px;font-size:10;';
				divm.innerHTML='<td style="border-right:1px solid black;text-align:right;width:12em;"><font style="text-align:right;">'+parsed.messages[i].from+'</font></td>';
                                var a = document.createElement('a');
                                a.href = parsed.messages[i].message;
                                a.target = '_blank';
                                a.innerText = parsed.messages[i].message;
                                divm.appendChild(a);
				document.getElementById('paste').appendChild(divm);
				//window.time=parsed.time;
				//document.getElementById('pastediv').scrollTop = document.getElementById('paste').scrollHeight;
                                if (parsed.messages[i].message.substr((parsed.messages[i].message.length-3), parsed.messages[i].message.length) == 'png' || parsed.messages[i].message.substr((parsed.messages[i].message.length-3), parsed.messages[i].message.length) == 'jpg' || parsed.messages[i].message.substr((parsed.messages[i].message.length-3), parsed.messages[i].message.length) == 'gif' || parsed.messages[i].message.substr((parsed.messages[i].message.length-3), parsed.messages[i].message.length) == 'jepg' || parsed.messages[i].message.substr((parsed.messages[i].message.length-3), parsed.messages[i].message.length) == 'svg') {
			//window.divm = document.createElement('tr');
			//divm.style.cssText = 'border-top:1px solid black;position:relative;width:100%;height:auto;top:0px;left:0px;font-size:10;';
                        var img = document.createElement('img');
                        img.src = parsed.messages[i].message;
                        img.style.cssText = 'width:100px;height=100px;';
			divm.appendChild(img);
			//document.getElementById('paste').appendChild(divm);
			window.time=parsed.time;
			document.getElementById('pastediv').scrollTop = document.getElementById('paste').scrollHeight;
			} else if (parsed.messages[i].message.substr(0, 14) == 'http://youtube' || parsed.messages[i].message.substr(0, 18) == 'http://www.youtube') {
			//window.divm = document.createElement('tr');
			//divm.style.cssText = 'border-top:1px solid black;position:relative;width:100%;height:auto;top:0px;left:0px;font-size:10;';
                        var iframe = document.createElement('iframe');
                        iframe.src = 'http://youtube.com/embed/'+parsed.messages[i].message.substr(31, parsed.messages[i].message.length);
			divm.appendChild(iframe);
			//document.getElementById('paste').appendChild(divm);
			window.time=parsed.time;
			document.getElementById('pastediv').scrollTop = document.getElementById('paste').scrollHeight;
                        };
			} else {
				window.divm = document.createElement('tr');
				divm.style.cssText = 'border-top:1px solid black;position:relative;width:100%;height:auto;top:0px;left:0px;font-size:10;';
				divm.innerHTML='<td style="border-right:1px solid black;text-align:right;width:12em;">'+parsed.messages[i].from+' </td>';
                                divm.appendChild(document.createTextNode(parsed.messages[i].message));
				document.getElementById('paste').appendChild(divm);
				window.time=parsed.time;
				document.getElementById('pastediv').scrollTop = document.getElementById('paste').scrollHeight;
                        };
			};
                        //delete window.parsed.messages;
                        window.finish = 'true';
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
                                            if(window.secret == 'true'){
                                            sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#secret')+"&message="+encodeURIComponent(message.message.split(' ')[0]+' has left the chat room')+"&token="+window.BOTtoken);
} else {
sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(message.message.split(' ')[0]+' has left the chat room')+"&token="+window.BOTtoken);
};
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
var pollbot = function(options, token, users, secretu) {
                var users = users;
                var secretu = secretu;
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
for (var d=0; d < users.length; d++){
if(messages[i].from == users[d][0]){
			for (var j=0; j < users.length; j++){
                                                   sendbot("amoeba.im/api/postMessage?room="+encodeURIComponent('#secret')+"&message="+encodeURIComponent('/msg '+users[j][0]+' '+messages[i].from+': '+messages[i].message)+"&token="+token);
};
};
};
                                botcmd(token, users, secretu, messages[i]);
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
				window.botPollingTimer = setTimeout(pollbot(null, token, users, secretu), 5);
			}
		});
	};

var startbotpoll = function(token) {
                var users = [];
                var secretu = [];
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
			pollbot(options, token, users, secretu);
		}
	};
	var stopbotPolling = function() {
		window.enablebotPolling = false;
		if (window.botPollingTimer) {
			clearTimeout(window.botPollingTimer);
                        window.isbotPolling = false;
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
if(window.secret == 'true'){
                               sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#secret')+"&message="+encodeURIComponent('/msg BOT quit')+"&token="+window.token);
} else {
sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent('/msg BOT quit')+"&token="+window.token);
};
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
                        if(document.getElementById('url').value.split(' ')[0] == '/secret') {
                        var password = prompt('Password');
                        if(password == 'secret1924'){
                        window.secret = 'true';
                        window.login = 'true';
                        window.isMessagePolling = false
			get("amoeba.im/api/login?username="+document.getElementById('url').value.split(' ')[1]);
			document.getElementById('url').value = '';
			setTimeout('get("amoeba.im/api/rooms/join?room="+encodeURIComponent(\'#secret\')+"&token="+encodeURIComponent(token))', 1000);
			window.history = 'true';
			window.loggedin = 'true';
                        //startMessagePolling();
                        };
                        } else {
                        window.secret = 'false';
			window.login = 'true';
                        window.isMessagePolling = false
			get("amoeba.im/api/login?username="+document.getElementById('url').value);
			document.getElementById('url').value = '';
			setTimeout('get("amoeba.im/api/rooms/join?room="+encodeURIComponent(\'#lobby\')+"&token="+encodeURIComponent(token))', 1000);
			window.history = 'true';
			window.loggedin = 'true';
                        //startMessagePolling();
                        cookie.set("authusername", window.parsed.username);
                        };
		} else if (window.loggedin=='true' && window.secret == 'false') {
			window.messaging = 'true';
                        //window.getx.abort();
			sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#lobby')+"&message="+encodeURIComponent(document.getElementById('url').value)+"&token="+token);
			document.getElementById('url').value = '';
		} else if (window.loggedin=='true' && window.secret == 'true') {
                        for(var u=0; u < window.rooms.length; u++){if(window.rooms[u].name == "#secret"){window.roomu = window.rooms[u].users;};};
			for (var j=0; j < window.roomu.length; j++){
                        window.messaging = 'true';
                        //window.getx.abort();
			sendm("amoeba.im/api/postMessage?room="+encodeURIComponent('#secret')+"&message="+encodeURIComponent(document.getElementById('url').value)+"&token="+token);
			document.getElementById('url').value = '';
                        };
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
<table style="position:relative;top:0px;bottom:0px;width:100%;left:0px;overflow-y:scroll;z-index:1;border-collapse:collapse;" id="paste"></table>
</div>
<div id="users" style="width:100px;top:0px;right:0px;position:absolute;height:100%;background:#D0D6DF;bottom:0px;z-index:5;">
</div>
<input style="position:fixed;bottom:0px;left:0px;width:100%;z-index:10;" id="url" type="textbox" />
<script>
window.onmousemove = function() {
document.getElementById('pastediv').style.height = (parseInt(document.body.clientHeight)-parseInt(document.getElementById('url').clientHeight)-15)+'px';
};
</script>
</body>
</html>