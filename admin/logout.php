<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['login'] = false;

session_destroy();

if (isset($_COOKIE['php_remember'])) {
    setcookie('php_remember', '', time() - 3000);
}

echo "You were logged out!<br>Redirecting to sign in page...";
echo "<meta http-equiv='refresh' content='2;url=login.html'>";