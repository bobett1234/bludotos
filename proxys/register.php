<?PHP
ob_start();

$user_name = "vios_admin";
$password = "qlalsldl";
$database = "vios_chat";
$server = "127.0.0.1";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
$subemail = $_GET[pass];
$username = $_GET[user];
$level = $_GET[level];
$username = addslashes($username);
      $q = "SELECT * FROM users WHERE username = '$username'";
      $resulted = mysql_query($q);
         
         $subemail = stripslashes($subemail);
      if (mysql_numrows($resulted) > 0) {
	echo 'username already taken';
      } else {

$SQL = "INSERT INTO users (username, password, level) VALUES ('$_GET[user]', '$_GET[pass]', '$_GET[level]')";
$result = mysql_query($SQL);
print "Records added to the database";

};
mysql_close($db_handle);
//header("location: http://bludot.tk/register.php?code=".$_GET[betacode]."");
}
else {
print "Database NOT Found ";
mysql_close($db_handle);
}
?>