<?php

$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_pass = 'admin';

$mysqli = new mysqli($db_host, $db_user, "", $db_name);

if($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}