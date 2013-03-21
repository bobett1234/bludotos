<html>
<body>
<script>
var xmlhttp;
try {
xmlhttp = new XMlHttpRequest();
} catch (e) {
var XMLHTTP_IDS = new Array('MSXML2.XMLHTTP.5.0', 'MSXML2.XMLHTTP.4.0', 'MSXML2.XMLHTTP.3.0', 'MSXML2.XMLHTTP', 'Microsoft.XMLHTTP');
var success = false;
for (var i=0;i < XMLHTTP_IDS.length && !success; i++) {
try {
xmlhttp = new ActiveXObject(XMLHTPP_IDS[i]);
alert('true');
success = true;
} catch (e) {}
}
if(!success) {
throw new Error('error');
alert('error');
}
};
alert('test');
document.body.innerHTML='test';
</script>
</body>
</html>
