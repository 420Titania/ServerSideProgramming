<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SESSION['login'] == true || isset($_COOKIE['php_remember'])) {

} else {
    header("Location: login.html");
    die();
}

$itemname = $_POST['itemname'];
$itemprice = $_POST['itemprice'];

require_once('../scripts/config.php');

$sql = "INSERT INTO items (item_name, item_price) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param('si',$itemname,$itemprice);
$result = $stmt->execute();
if ($result == true) {
    echo "Update successful!<br>";
} else {
    echo "Something went wrong, the table has not been updated.<br>";
}

echo "<meta http-equiv='refresh' content='2;url=view_data.php'>";
