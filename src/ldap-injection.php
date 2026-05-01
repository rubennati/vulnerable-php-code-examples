<?php

// LDAP Injection
// User input is used directly in LDAP filter without escaping
$username = $_GET['username'] ?? '';

$conn = ldap_connect('ldap://localhost');
$filter = '(uid=' . $username . ')';
$result = ldap_search($conn, 'dc=example,dc=com', $filter);
