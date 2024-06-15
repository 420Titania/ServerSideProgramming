<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SESSION['login'] == true || isset($_COOKIE['php_remember'])) {

} else {
    header("Location: login.html");
    die();
}

$phone = $_POST['phone'];
$points = $_POST['points'];

require_once('config.php');

    $sql = "UPDATE points SET pts=pts+? WHERE phone=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ii',$points,$phone);
    $result = $stmt->execute();
    

    if ($result) {
        echo "Points added!<br>";
    } else {
        echo "Something went wrong, the table has not been updated.<br>";
    }
    $stmt->close();
    $conn->close();
    echo "<meta http-equiv='refresh' content='2;url=view_data.php'>";