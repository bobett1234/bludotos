<html>
<head>
<script>
var test = new Worker('worker.js');
function workit() {
if(!window.resp || window.resp.cur < window.resp.count) {
    if(!window.resp) {
    window.newm = 1;
    } else if(window.resp.count && window.newm == 1) {
    window.messages = window.resp.count;
    };
};
test.postMessage('http://bludotos.com/test/mail/worker/mail.php?server={imap.gmail.com:993/imap/ssl/novalidate-cert/norsh}Inbox&username=bobett1234@gmail.com&password=bludotos&newm='+newm);
test.onmessage = function(e){
//document.body.innerHTML = e.data;
var obj = e.data;
window.objt = obj;
obj = obj.toString();
obj = obj.split(',')[0]+','+obj.split(',')[1]+'}';
window.test2 = obj;
window.resp = JSON.parse(obj);
window.test3 = e.data;
var temp = document.createElement('div');
temp.innerHTML = e.data.split('html')[1].substring(2);
var temp2 = temp.getElementsByTagName('table')[0];
document.body.appendChild(temp2);
if(parseInt(window.resp.cur) < window.messages) {
    if(!window.resp) {
    //thisis[actT.x].a[b].newm = 0;
    } else {
    //thisis[actT.x].a[b].newm = parseInt(thisis[actT.x].a[b].resp.cur)+1;
    window.newm+=1;
    };
};
    window.messages = window.resp.count;
for(var i=0; i < window.messages; i++) {
workit2(i);
};
};
};
function workit2(num) {
window.newt = num;
test.postMessage('http://bludotos.com/test/mail/worker/mail.php?server={imap.gmail.com:993/imap/ssl/novalidate-cert/norsh}Inbox&username=bobett1234@gmail.com&password=bludotos&newm='+num);
test.onmessage = function(e){
//document.body.innerHTML = e.data;
var obj = e.data;
obj = obj.toString();
obj = obj.split(',')[0]+','+obj.split(',')[1]+'}';
window.test2 = obj;
var result = JSON.parse(obj);
window.datat = result;
window.test3 = e.data;
var temp = document.createElement('div');
temp.innerHTML = e.data.split('html')[1].substring(2);


document.body.children[0].children[0].insertBefore(temp.getElementsByTagName('table')[0].children[0].children[0], document.body.children[0].children[0].firstChild);
document.body.children[0].children[0].insertBefore(temp.getElementsByTagName('table')[0].children[0].children[0], document.body.children[0].children[0].children[1]);


/*for(var b=0; b < temp.getElementsByTagName('table')[0].children[0].children.length; b++)
{
var temp2 = temp.getElementsByTagName('table')[0].children[0].children[b];
document.body.children[0].children[0].appendChild(temp2);
};*/
};
};
window.onload = function(){setTimeout(function(){workit();}, 3000);};
</script>
</head>
<body>
</body>
</html>