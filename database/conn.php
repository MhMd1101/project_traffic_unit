<?php 

// include_once '../debug.php';

$server = 'localhost';
$user_name = 'root';
$user_pass = '';
$database_name = 'unitoffcer';

$conn = new mysqli($server, $user_name, $user_pass, $database_name);

// printData($conn);

if($conn -> error)
{
    echo 'Error on db connection';
    die();
}
