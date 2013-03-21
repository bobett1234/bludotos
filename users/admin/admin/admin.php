<script>
window.sendmail = function (users, message) {
	var forms = new XMLHttpRequest();
						var sendit = 'email='+users+'&message='+message;
						forms.open('POST', 'admin/adminnotify.php', true);
						//Send the proper header information along with the request
						forms.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						forms.setRequestHeader("Content-length", sendit.length);
						forms.setRequestHeader("Connection", "close");
						forms.onreadystatechange = function() {
							if (forms.readyState==4) {
								admingoto('admin.php');
							};
						};
						forms.send(sendit);
						
};
var ajax = new XMLHttpRequest();
	ajax.open('GET', 'admin/admin.php', true);
	ajax.onreadystatechange = function() {
		if (ajax.readyState==4) {
			document.getElementById('AdminC').children[1].children[0].innerHTML = ajax.responseText;
			document.getElementById('AdminC').children[1].children[0].onload = MainTools.scrollV(document.getElementById('AdminC').children[1], document.getElementById('AdminC'), document.getElementById('AdminC').children[1].children[0]);
document.getElementById('AdminC').children[1].children[0].getElementsByTagName('form')[0].onsubmit = function(){
				if (this.upduser.value.length > 0) {
					var forms = new XMLHttpRequest();
						var sendit = 'subupdlevel='+this.subupdlevel.value+'&updlevel='+this.updlevel.value+'&upduser='+this.upduser.value;
						forms.open('POST', 'admin/adminprocess.php', true);
						//Send the proper header information along with the request
						forms.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						//forms.setRequestHeader("Content-length", sendit.length);
						//forms.setRequestHeader("Connection", "close");
						forms.onreadystatechange = function() {
							if (forms.readyState==4) {
								admingoto('admin.php');
							};
						};
						forms.send(sendit);
				};
			};
			document.getElementById('AdminC').children[1].children[0].getElementsByTagName('form')[1].onsubmit = function(){
				if (this.deluser.value.length > 0) {
					var forms = new XMLHttpRequest();
						var sendit = 'subdeluser='+this.subdeluser.value+'&deluser='+this.deluser.value;
						forms.open('POST', 'admin/adminprocess.php', true);
						//Send the proper header information along with the request
						forms.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						//forms.setRequestHeader("Content-length", sendit.length);
						//forms.setRequestHeader("Connection", "close");
						forms.onreadystatechange = function() {
							if (forms.readyState==4) {
								admingoto('admin.php');
							};
						};
						forms.send(sendit);
				};
			};
		};
	};			
	ajax.send();
admingoto=function(place){
	var ajax = new XMLHttpRequest();
	ajax.open('GET', 'admin/'+place, true);
	ajax.onreadystatechange = function() {
		if (ajax.readyState==4) {
			document.getElementById('AdminC').children[1].children[0].innerHTML = ajax.responseText;
			document.getElementById('AdminC').children[1].children[0].onload = MainTools.scrollV(document.getElementById('AdminC').children[1], document.getElementById('AdminC'), document.getElementById('AdminC').children[1].children[0]);
			document.getElementById('AdminC').children[1].children[0].getElementsByTagName('form')[0].onsubmit = function(){
				if (this.upduser.value.length > 0) {
					var forms = new XMLHttpRequest();
						var sendit = 'subupdlevel='+this.subupdlevel.value+'&updlevel='+this.updlevel.value+'&upduser='+this.upduser.value;
						forms.open('POST', 'admin/adminprocess.php', true);
						//Send the proper header information along with the request
						forms.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						//forms.setRequestHeader("Content-length", sendit.length);
						//forms.setRequestHeader("Connection", "close");
						forms.onreadystatechange = function() {
							if (forms.readyState==4) {
								admingoto('admin.php');
							};
						};
						forms.send(sendit);
				};
			};
			document.getElementById('AdminC').children[1].children[0].getElementsByTagName('form')[1].onsubmit = function(){
				if (this.deluser.value.length > 0) {
					var forms = new XMLHttpRequest();
						var sendit = 'subdeluser='+this.subdeluser.value+'&deluser='+this.deluser.value;
						forms.open('POST', 'admin/adminprocess.php', true);
						//Send the proper header information along with the request
						forms.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						//forms.setRequestHeader("Content-length", sendit.length);
						//forms.setRequestHeader("Connection", "close");
						forms.onreadystatechange = function() {
							if (forms.readyState==4) {
								admingoto('admin.php');
							};
						};
						forms.send(sendit);
				};
			};
		};
	};			
	ajax.send();
};
</script>
<div style="position: absolute;top: 0px;overflow: hidden;bottom: 0px;right: 0px;left: 0px;width: auto;background:white;">
</div>