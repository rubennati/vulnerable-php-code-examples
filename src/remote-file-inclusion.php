<?php

// Remote File Inclusion (RFI)
// User-supplied path is included directly — allows loading remote malicious files
$page = $_GET['page'] ?? 'home.php';

include($page);
