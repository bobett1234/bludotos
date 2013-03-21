<?php 
$array = array (
  'trash' => 'empty',
  'homepage' => 'http://apple.com',
  'theme' => 'Apfelsine',
  'Dockapps' => 
  array (
    0 => 'DevCenter',
    1 => 'FileNet',
  ),
  'Dockfunc' => 
  array (
    0 => 'DevCenter()',
    1 => 'FileNet()',
  ),
  'wallpaper' => 'http://bludot.tk/users/admin/sysapps/FileNet/wallpaper/background.jpg',
  'version' => '0.60',
  'dockmag' => 'false',
  'dock' => 
  array (
    0 => 'default',
    1 => 'white',
    2 => 'style',
    3 => 'script',
  ),
  'taskbar' => 
  array (
    0 => 'default',
    1 => 'win7',
    2 => 'check',
    3 => 'script',
  ),
  'windows' => 
  array (
    0 => 'default',
    1 => 'default',
    2 => 'check',
    3 => 'check',
  ),
);
echo json_encode($array);