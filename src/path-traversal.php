<?php

if (PHP_SAPI === 'cli') {
    parse_str(implode('&', array_slice($argv, 1)), $_GET);
}

// Path Traversal / Local File Inclusion
// User input is used directly in file path without sanitization
$file = $_GET['file'] ?? 'default.txt';

echo file_get_contents('/var/www/uploads/' . $file);
