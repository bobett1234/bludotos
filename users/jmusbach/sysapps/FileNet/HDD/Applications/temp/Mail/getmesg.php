<?
   //include('getbody.php');
   //$ServerName = "http://mail.bludot.tk:25/imap"; // For a IMAP connection    (PORT 143)
   $ServerName = $_GET['server']; // For a POP3 connection    (PORT 110)
   //$ServerName = "{imap.gmail.com:993/imap/ssl/novalidate-cert/norsh}Inbox";
   
   $UserName = $_GET['username'];
   $PassWord = $_GET['password'];
   //$UserName = 'bobett1234@gmail.com';
   //$PassWord = 'bludotos';
   
   $mbox = imap_open($ServerName, $UserName,$PassWord) or die("Could not open Mailbox - try again later!");
   
   if ($hdr = imap_check($mbox)) {
   	$msgCount = $hdr->Nmsgs;
   } else {
   	echo "failed";
   }
   $MN=$msgCount;
   $overview=imap_fetch_overview($mbox,"1:$MN",0);
   $size=sizeof($overview);
   echo "{\"count\":\"".$msgCount."\", ";
   if(!$_GET['newm']) {
   echo "\"cur\":0, ";
   } else {
   echo "\"cur\":\"".$_GET['newm']."\", ";
   };
   echo "html:\"";
   
   if(!$_GET['newm']) {
   $i = 1;
   } else {
   $i = $_GET['newm'];
   };
   	$val=$overview[$i];
		$msg=$val->msgno;
   	$from=$val->from;
  		$date=$val->date;
		$subj=$val->subject;
   	$seen=$val->seen;
        if(!$structure) {
   		$structure = imap_fetchstructure($mbox, $i+1);
   	}
        if($structure) {
            //if($mime_type == get_mime_type($structure)) {
   			if(!$part_number) {
   				$part_number = "1";
   			}
                    $msgBody = imap_fetchbody($mbox, $i+1, $part_number);
        if($structure->encoding == 3) {
   			$body = imap_base64($msgBody);
   	} else if($structure->encoding == 4) {
   			$body = imap_qprint($msgBody);
   	} else {
   			$body = $msgBody;
        }
        //}
        }
   
	   $from = ereg_replace("\"","",$from);
   
	   // MAKE DANISH DATE DISPLAY
   	list($dayName,$day,$month,$year,$time) = split(" ",$date); 
		$time = substr($time,0,5);
   	$date = $day ." ". $month ." ". $year . " ". $time;
   	if ($bgColor == "#F0F0F0") {
   		$bgColor = "#FFFFFF";
   	} else {
			$bgColor = "#F0F0F0";
		}
   
		if (strlen($subj) > 60) {
   		$subj = substr($subj,0,59) ."...";
		}
   	echo "<font>$body</font>";
	echo "\"}";
   imap_close($mbox);
?>