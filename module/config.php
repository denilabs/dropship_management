<?php  

define('host', 'localhost');
define('user', 'root');
define('ps', 'deniabi');
define('db', 'inventories');

$db = new mysqli(host, user, ps, db) or die("error");
// if ($db) {
// 	echo "ok";
// }
// else {
// 	echo "false";
// }
?>