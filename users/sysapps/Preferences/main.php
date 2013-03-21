<? 
$user=$_GET['userN'];
?>
<div id="topbar" style="left:0px; top: 0px; position:absolute; height:50px; width:150%; background:-webkit-linear-gradient(bottom, rgb(59,58,58) 25%, rgb(140,140,138) 63%, rgb(184,186,185) 82%);">
<img src="images/Prefs_All.png" style="position:absolute;top:0px;left:0px;padding:5px 5px 5px 5px;width:40px; height:40px;" onclick="clickicon(this, 'Main');"/>
</div>
<div id="Main" style="left:0px; top: 50px; position:absolute;right:0px;bottom:0px; background:rgb(235,235,235);">
<div style="left:0px; top: 0px; position:absolute;right:0px;height:80px;border-bottom:1px solid black;margin-left: 30px;margin-right: 30px;box-shadow: inset -0px -5px 6px -6px #030303;">
	<div style="position:relative;left:0px;width:80px; height:80px;float:left;" onclick="clickicon(this.children[0], 'Display');">
	<img id="Display" src="images/Prefs_Display.png" style="position:relative;left:0px;padding:8px 8px 3px 8px;width:50px; height:50px;" />
	<font style="font-weight:bold;font-size:10px;color:black;width:auto;height:15px;left:0px;padding:5px 5px 5px  5px;top:0px;position:relative;">Display</font>
	</div>
	<div style="position:relative;left:0px;width:80px; height:80px;float:left;">
	<img id="Windows" src="images/Prefs_Windows.png" style="position:relative;left:0px;padding:8px 8px 3px 8px;width:50px; height:50px;" />
	<font style="font-weight:bold;font-size:10px;color:black;width:auto;height:15px;left:0px;padding:5px 5px 5px  5px;top:0px;position:relative;">Windows</font>
	</div>
</div>
<div style="left:0px; top: 80px; position:absolute;right:0px;height:80px;border-bottom:1px solid black;margin-left: 30px;margin-right: 30px;box-shadow: inset -0px -5px 6px -6px #030303;">
	<div style="position:relative;left:0px;width:80px; height:80px;float:left;" onclick="clickicon(this.children[0], 'Themes');Themes();">
	<img id="Display" src="images/Prefs_Themes.png" style="position:relative;left:0px;padding:8px 8px 3px 8px;width:50px; height:50px;" />
	<font style="font-weight:bold;font-size:10px;color:black;width:auto;height:15px;left:0px;padding:5px 5px 5px  5px;top:0px;position:relative;">Themes</font>
	</div>
</div>
<div style="left:0px; top: 160px; position:absolute;right:0px;height:80px;border-bottom:1px solid black;margin-left: 30px;margin-right: 30px;box-shadow: inset -0px -5px 6px -6px #030303;">
	<div style="position:relative;left:0px;width:80px; height:80px;float:left;">
	<img id="Display" src="images/Prefs_Display.png" style="position:relative;left:0px;padding:8px 8px 3px 8px;width:50px; height:50px;" />
	<font style="font-weight:bold;font-size:10px;color:black;width:auto;height:15px;left:0px;padding:5px 5px 5px  5px;top:0px;position:relative;">Display</font>
	</div>
</div>
<div style="left:0px; top:240px; position:absolute;right:0px;height:80px;border-bottom:1px solid black;margin-left: 30px;margin-right: 30px;box-shadow: inset -0px -5px 6px -6px #030303;">
	<div style="position:relative;left:0px;width:80px; height:80px;float:left;" onclick="clickicon(this.children[0], 'EditUser');useredit();">
	<img id="Display" src="images/Prefs_User.png" style="position:relative;left:0px;padding:8px 8px 3px 8px;width:50px; height:50px;"/>
	<font style="font-weight:bold;font-size:10px;color:black;width:auto;height:15px;left:0px;padding:5px 5px 5px  5px;top:0px;position:relative;">User Settings</font>
	</div>
</div>
</div>
<div id="Display" style="left:0px; top: 50px; position:absolute;right:0px;bottom:0px; background:rgb(235,235,235);display:none;">
<div style="left:0px; top: 0px; position:absolute;right:0px;height:300px;border-bottom:1px solid black;margin-left: 30px;margin-right: 30px;box-shadow: inset -0px -5px 6px -6px #030303;">
	<select id="dropchoose" style="position:absolute;left:0px;width:auto;top:0px;height:20px;float:left;box-shadow: inset 0px 0px 3px #030303;" onchange="selectpic('HDD/'+this.value);">
	  <option value="Wallpapers">Wallpapers</option>
	  <option value="MyPictures">MyPictures</option>
	</select>
	<div id="wallpaper" style="position:absolute;left:0px;width:400px;top:50px;height:300px;float:left;box-shadow: inset 0px 0px 3px #030303;overflow:hidden;"><div style="position:absolute;left:0px;width:400px;top:0px;height:300px;float:left;box-shadow: inset 0px 0px 3px #030303;overflow:hidden;"></div></div>
	
</div>
</div>
<div id="EditUser" style="left:0px; top: 50px; position:absolute;right:0px;bottom:0px; background:rgb(235,235,235);display:none;">
<div style="left:0px; top: 0px; position:absolute;right:0px;height:300px;border-bottom:1px solid black;margin-left: 30px;margin-right: 30px;box-shadow: inset -0px -5px 6px -6px #030303;">
	<div style="left:0px; top: 0px; position:absolute;right:0px;height:300px;border-bottom:1px solid black;margin-left: 30px;margin-right: 30px;box-shadow: inset -0px -5px 6px -6px #030303;">
	
		
</div>
</div>
</div>
<div id="Themes" style="left:0px; top: 50px; position:absolute;right:0px;bottom:0px; background:rgb(235,235,235);display:none;">
<div style="left:0px; top: 0px; position:absolute;right:0px;height:90%;border-bottom:1px solid black;margin-left: 30px;margin-right: 30px;box-shadow: inset -0px -5px 6px -6px #030303;">
	<div style="left:0px; top: 0px; position:absolute;right:0px;height:100%;border-bottom:1px solid black;margin-left: 30px;margin-right: 30px;box-shadow: inset -0px -5px 6px -6px #030303;">
<div style="background: green;position: relative;top: 10px;bottom: 10px;left: 20px;height: 90%;width: 300px;float: left;margin-right: 10px;margin-left: 10px;">
<font>Windows</font>
<ul>
</ul>
</div>
<div style="background: green;position: relative;top: 10px;bottom: 10px;left: 20px;height: 90%;width: 300px;float: left;margin-right: 10px;margin-left: 10px;">
<font>Taskbar</font>
<ul>
</ul>
</div>
<div style="background: green;position: relative;top: 10px;bottom: 10px;left: 20px;height: 90%;width: 300px;float: left;margin-right: 10px;margin-left: 10px;">
<font>Dock</font>
<ul>
</ul>
</div>
</div>
</div>