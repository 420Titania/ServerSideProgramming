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
$itemimg = $_POST['image'];
$itemtype = $_POST['category'];

require_once('config.php');

if ($itemimg) {

    $sql = "INSERT INTO menu VALUES (?,?,?,?,default)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('siss',$itemname,$itemprice,$itemtype,$itemimage);
    $result = $stmt->execute();

    if ($result == true) {
        echo "Item added with image!<br>";
    } else {
        echo "Something went wrong, the table has not been updated.<br>";
    }

    echo "<meta http-equiv='refresh' content='2;url=view_data.php'>";

} else {

    $sql = "INSERT INTO menu VALUES (?,?,?,default,default)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sis',$itemname,$itemprice,$itemtype);
    $result = $stmt->execute();

    if ($result == true) {
        echo "Item added with placeholder!<br>";
    } else {
        echo "Something went wrong, the table has not been updated.<br>";
    }
    $stmt->close();
    $conn->close();
    echo "<meta http-equiv='refresh' content='2;url=view_data.php'>";

}