<?
header('Content-Type: text/cache-manifest');
echo "CACHE MANIFEST\n";
echo "CACHE:\n";
 
$hashes = "";
$lastFileWasDynamic = FALSE;
 
$dir = new RecursiveDirectoryIterator("users/admin");
foreach(new RecursiveIteratorIterator($dir) as $file) 
{
	if ($file->IsFile() && $file != "./manifest.php" && substr($file->getFilename(), 0, 1) != "." && substr($file->getFilename(), 0) != "error_log" && substr($file->getFilename(), 0) != "config.php" && substr($file->getFilename(), 0) != "configB.php") 
	{
		if(preg_match('/.php$/', $file)) {
			if(!$lastFileWasDynamic) 
			{
				//echo "\n\nNETWORK:\n";
			}
			$lastFileWasDynamic = FALSE;
		} 
		else 
		{
			if($lastFileWasDynamic) 
			{
				//echo "\n\nCACHE:\n";
				$lastFileWasDynamic = FALSE;
			}
		}
                $file = str_replace(" ", " ", $file);
		echo "http://bludotos.com/" . $file . "\n";
		$hashes .= md5_file($file);
	}
}
$dir = new RecursiveDirectoryIterator("users/admin");
foreach(new RecursiveIteratorIterator($dir) as $file) 
{
	if ($file->IsFile() && $file != "./manifest.php" && substr($file->getFilename(), 0, 1) != "." && substr($file->getFilename(), 0) != "error_log" && substr($file->getFilename(), 0) != "config.php" && substr($file->getFilename(), 0) != "configB.php") 
	{
		if(preg_match('/.php$/', $file)) {
			if(!$lastFileWasDynamic) 
			{
				//echo "\n\nNETWORK:\n";
			}
			$lastFileWasDynamic = FALSE;
		} 
		else 
		{
			if($lastFileWasDynamic) 
			{
				//echo "\n\nCACHE:\n";
				$lastFileWasDynamic = FALSE;
			}
		}
                $file = str_replace(" ", " ", $file);
		echo "http://bludot.tk/" . $file . "\n";
		$hashes .= md5_file($file);
	}
}
echo "./loadOS.css\n./scripts/default/maintools.js\n";
echo "\n\nNetwork:\nhttp://bludotos.com/\nhttp://bludotos.com/index.php\nhttp://bludot.tk/\nhttp://bludot.tk/index.php\nhttp://bludotos.com/users/admin/config/config.php\nhttp://bludotos.com/users/admin/config/configB.php\nhttp://bludot.tk/users/admin/config/config.php\nhttp://bludot.tk/users/admin/config/configB.php\n";
echo "# Hash: " . md5($hashes) . "\n";
?>