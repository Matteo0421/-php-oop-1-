<?php 
require_once __DIR__ . '/Model/Movie.php';

$avatar = new Movie ('Avatar il film', '2010', 'James Cameron');

$rocky = new Movie ('Rocky Balboa', '2006', 'Sylvester Stallone');

var_dump($avatar);

var_dump($rocky)
?>