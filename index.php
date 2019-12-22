<?php
session_start();

include 'load.php';


$db = new database();

$user = new  users();

 $db->getconn();
echo 'hell';

echo '<pre>';
//print_r( $db->getdata());
echo '</pre>';


echo '<pre>';
print_r($user->getuser());
echo '</pre>';
;
//$user->getdata();