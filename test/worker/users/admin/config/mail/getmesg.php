<?
   //$ServerName = "http://mail.bludot.tk:25/imap"; // For a IMAP connection    (PORT 143)
   $ServerName = $_GET['server']; // For a POP3 connection    (PORT 110)
   //$ServerName = "{imap.gmail.com:993/imap/ssl/novalidate-cert/norsh}Inbox";
   
   $UserName = $_GET['username'];
   $PassWord = $_GET['password'];
   
   $mbox = imap_open($ServerName, $UserName,$PassWord) or die("Could not open Mailbox - try again later!");
   
   if ($hdr = imap_check($mbox)) {
	   echo "Num Messages " . $hdr->Nmsgs ."\n\n<br><br>";
   	$msgCount = $hdr->Nmsgs;
   } else {
   	echo "failed";
   }
   $MN=$msgCount;
   $overview=imap_fetch_overview($mbox,"1:$MN",0);
   $size=sizeof($overview);
   
   echo "<table border=\"0\" cellspacing=\"0\" width=\"582\">";
   
   for($i=$size-1;$i>=0;$i--){
   	$val=$overview[$i];
		$msg=$val->msgno;
   	$from=$val->from;
  		$date=$val->date;
		$subj=$val->subject;
   	$seen=$val->seen;
   
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
   
   	echo "<tr bgcolor=\"$bgColor\"><td colspan=\"2\">$from</td><td colspan=\"2\">$subj</td>
   		 <td class=\"tblContent\" colspan=\"2\">$date</td></tr>\n";
   }
	echo "</table>";
   imap_close($mbox);
?>