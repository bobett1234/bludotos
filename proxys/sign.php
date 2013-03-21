<?PHP
//ob_start();

$user_name = "vios_admin";
$password2 = "qlalsldl";
$database = "vios_chat";
$server = "127.0.0.1";
$db_handle = mysql_connect($server, $user_name, $password2);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
$$password = $_GET[pass];
$username = $_GET[user];
$username = addslashes($username);
      $q = "SELECT * FROM users WHERE username = '$username'";
      $resulted = mysql_query($q);
         
      if (mysql_numrows($resulted) > 0) {
      $dbarray2 = mysql_fetch_array($resulted);
      $dbarray2['level'] = stripslashes($dbarray2['level']);
      $level = $dbarray2['level'];
$dbarray = mysql_fetch_array($resulted);
      $dbarray['password'] = stripslashes($dbarray['password']);
      $password = stripslashes($password);
if($password == $dbarray['password']){
         echo "{\"level\":$level, \"user\": \"$username\"}"; //Success! Username and password confirmed
      }
};
mysql_close($db_handle);
//header("location: http://bludot.tk/register.php?code=".$_POST[betacode]."");
}
else {
print "Database NOT Found ";
mysql_close($db_handle);
}
?>