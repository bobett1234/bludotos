<?php 
$array = array (
  'version' => '1.0',
  'accounts' => 
  array (
    0 => 
    array (
      'server' => 'imap.gmail.com:993/imap/ssl/novalidate-cert/norsh',
      'username' => 'bobett1234@gmail.com',
      'password' => 'bludotos',
    ),
  ),
);
echo json_encode($array);