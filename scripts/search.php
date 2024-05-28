<?php

header('Content-Type: application/json');

$response = array();

require_once('config.php');

$phone = $_POST['query'];

$stmt = $conn->prepare("SELECT pts FROM points WHERE phone=?");
$stmt->bind_param('s',$phone);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();


if ($user === null) {
    $response['error'] = "Query returned empty, this is not an error";
} else {
    $response += ['success' => true, 'user' => $user['pts']];
}
echo json_encode($response);
$stmt->close();
$conn->close();
exit();