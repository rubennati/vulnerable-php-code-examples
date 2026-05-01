<?php

// Type Juggling — Loose Comparison
// Loose comparison (==) allows type coercion — "0" == false == null in PHP
$token = $_GET['token'] ?? '';

if ($token == 0) {
    echo 'Access granted';
}
