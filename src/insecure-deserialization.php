<?php

// Insecure Deserialization
// User-supplied data is deserialized directly — allows object injection attacks
$data = $_GET['data'] ?? '';

$object = unserialize($data);
