<?php

// Session Fixation
// Attacker-supplied session ID is accepted without regeneration after login
session_id($_GET['session_id'] ?? session_id());
session_start();

$_SESSION['user'] = $_POST['username'] ?? 'guest';
