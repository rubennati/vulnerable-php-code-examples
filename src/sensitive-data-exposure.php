<?php

// Sensitive Data Exposure — Hardcoded Credentials
$db_host = 'localhost';
$db_user = 'admin';
$db_pass = 'supersecret123';
$api_key = 'AIzaSyD-9tSrke72I6sHG9e2';

$pdo = new PDO('mysql:host=' . $db_host . ';dbname=myapp', $db_user, $db_pass);
