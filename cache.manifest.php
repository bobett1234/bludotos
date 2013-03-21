<?php 
    header("Cache-Control: max-age=0, no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: Wed, 11 Jan 1984 05:00:00 GMT");
    header('Content-type: text/cache-manifest'); 
    
    $hashes = "";
    
    function printFiles( $path = './users', $level = 3 ){ 
        global $hashes;
        $ignore = array('.', '..','.htaccess','cache.manifest.php','index.html','submit.php', "video.mp4");  
 
        $dh = @opendir( $path ); 
 
        while( false !== ( $file = readdir( $dh ) ) ){ 
            if( !in_array( $file, $ignore ) ){ 
                if( is_dir( "$path/$file" ) ){ 
                    printFiles( "$path/$file", ($level+1) ); 
                } else { 
                    $hashes .= md5_file("$path/$file");
                    echo $path."/".$file."\n";
                } 
            } 
        } 
 
        closedir( $dh ); 
    }
?>
CACHE MANIFEST
<?php 
printFiles('.');
// version hash changes automatically when files are modified
echo "#VersionHash: " . md5($hashes) . "\n";
?>
 
NETWORK:
./submit.php
./video.mp4
 
FALLBACK:
./video.mp4 ./images/offline.jpg
./images/video.jpg ./images/offline.jpg