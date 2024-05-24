<?php

header('Content-Type: application/json');

require_once('config.php');

$phone = $_POST['query'];

$stmt = $conn->prepare("SELECT pts FROM points WHERE phone=?");
$stmt->bind_param('s',$phone);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (empty($user)) {
    echo json_encode('ERR'); //newuser
    $stmt1->close();
    $conn->close();
    die();
} else {
    echo json_encode($user['pts']); //login
}

$stmt->close();
$conn->close();
exit();