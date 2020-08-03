<?php
// Database Variables (edit with your own server information)
$server = 'localhost';
$user = 'seoulp4';

$pass = 'seoulp4';

$db = 'seoulp4';

/*
$server = 'localhost';
$user = 'project4';
$pass = 'COFFEE';
$db = 'directory';
*/
// $server = '66.147.242.186';
// $user = 'urcscon3_seoul';
// $pass = 'coffee1N/21!';
// $db = 'urcscon3_seoul';


// Connect to Database
$connection = mysqli_connect($server,$user,$pass,$db);
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
