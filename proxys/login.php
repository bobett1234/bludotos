<?
$username = $_POST[user];
//$pass = md5($_POST['pass']);
$pass = $_POST[pass];

function database($user, $password
if(!get_magic_quotes_gpc()) {
	      $user = addslashes($user);
      }

      /* Verify that user is in database */
      $q = "SELECT password FROM ".TBL_USERS." WHERE username = '$user'";
      $result = mysql_query($q, $this->connection);
      if(!$result || (mysql_numrows($result) < 1)){
         return 1; //Indicates username failure
      }

      /* Retrieve password from result, strip slashes */
      $dbarray = mysql_fetch_array($result);
      $dbarray['password'] = stripslashes($dbarray['password']);
      $password = stripslashes($password);

      /* Validate that password is correct */
      if($password == $dbarray['password']){
         return 0; //Success! Username and password confirmed
      }
      else{
         return 2; //Indicates password failure
      }
};


//connect to db
$user_name = "vios_admin";
$password = "qlalsldl";
$database = "vios_chat";
$server = "127.0.0.1";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);


if ($db_found) {
$result = database($username, $pass);
if (result == 0) {
echo "success";
}
};
?>