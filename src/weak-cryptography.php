<?php

// Weak Cryptography
// MD5 and SHA1 are not suitable for password hashing — use password_hash() instead
$password = $_POST['password'] ?? '';

$hashed_md5 = md5($password);
$hashed_sha1 = sha1($password);

// Insecure random number for security-sensitive operation — use random_bytes() instead
$token = rand(0, 9999);
