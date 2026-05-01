<?php

// Type Juggling — Type Casting
// Casting user input to int silently truncates non-numeric strings to 0
$user_id = (int) ($_GET['user_id'] ?? 0);

if ($user_id == true) {
    echo 'Valid user ID: ' . $user_id;
}
