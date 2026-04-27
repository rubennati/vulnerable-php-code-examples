<?php

if (PHP_SAPI === 'cli') {
    parse_str(implode('&', array_slice($argv, 1)), $_GET);
}

$file_db = new PDO('sqlite:../database/database.sqlite');

// Insecure Direct Object Reference (IDOR)
// No ownership check — any logged-in user can access any invoice by changing the ID
$invoice_id = $_GET['invoice_id'] ?? 1;

foreach ($file_db->query('SELECT * FROM customers WHERE customerId = ' . $invoice_id) as $row) {
    echo $row['LastName'] . " - " . $row['Email'] . "\n";
}
