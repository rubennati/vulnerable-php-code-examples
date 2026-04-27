<?php

// Open Redirect
// User-supplied URL is used directly in redirect without validation
$url = $_GET['url'] ?? '/';

header('Location: ' . $url);
exit();
