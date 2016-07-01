<?php

require_once('db.php');

$db = new Database('localhost','root','','testdb');

echo "<pre>";
var_dump($db);
echo "</pre>";
?>
