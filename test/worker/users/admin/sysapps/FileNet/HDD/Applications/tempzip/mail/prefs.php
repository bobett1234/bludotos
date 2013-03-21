<?php 
$array = array (
    'version'=> '1.0',
    'accounts'=> array(
        0=> array(
            'server'=> 'mail.bludot.tk',
            'username'=> 'test@bludot.tk',
            'password'=> 'testit')
       )
);
echo json_encode($array);