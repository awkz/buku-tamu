<?php 
$hostname = 'localhost'; 
$dbname   = 'tugas';
$username = 'root';
$password = 'axbycz';

$db = mysqli_connect($hostname, $username, $password, $dbname) or DIE('Connection to host is failed, perhaps the service is down!');

?>