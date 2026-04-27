<?php

// Cross-Site Request Forgery (CSRF)
// Form submits state-changing action without CSRF token validation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_email = $_POST['email'];
    // No CSRF token check — any site can trigger this request on behalf of a logged-in user
    echo 'Email updated to: ' . $new_email;
}

?>
<form method="POST">
    <input type="email" name="email" value="attacker@example.com">
    <button type="submit">Update Email</button>
</form>
