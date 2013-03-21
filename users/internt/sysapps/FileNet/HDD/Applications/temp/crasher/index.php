<?
$user = $_GET['userN'];
$name = $_GET['name'];
?>
<script>
window.thisis = actT;
        var ajax3 = new XMLHttpRequest();
	ajax3.open('GET', 'users/<? echo $user; ?>/sysapps/FileNet/HDD/Applications/temp/<? echo $name; ?>/index.txt', true);
	ajax3.onreadystatechange = function() {
		if (ajax3.readyState==4) {
                  eval(ajax3.responseText);
thisis.window = thisis.children[1];
		};
	};			
	ajax3.send();
</script>