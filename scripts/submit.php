<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $total = $_POST['total'];
    $phone = $_POST['phone'];

    // Divide total points by 1000
    $points = $total / 1000;

    // Check if the phone number already exists
    $stmt = $conn->prepare("SELECT pts FROM points WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        // Phone number exists, update points
        $stmt->bind_result($existing_points);
        $stmt->fetch();
        $new_points = $existing_points + $points;

        $update_stmt = $conn->prepare("UPDATE points SET pts = ? WHERE phone = ?");
        $update_stmt->bind_param("is", $new_points, $phone);

        if ($update_stmt->execute()) {
            echo 'Points updated successfully';
        } else {
            echo 'Error: ' . $update_stmt->error;
        }

        $update_stmt->close();
    } else {
        // Phone number does not exist, insert new record
        $insert_stmt = $conn->prepare("INSERT INTO points (pts, phone) VALUES (?, ?)");
        $insert_stmt->bind_param("is", $points, $phone);

        if ($insert_stmt->execute()) {
            echo 'New points record created successfully';
        } else {
            echo 'Error: ' . $insert_stmt->error;
        }

        $insert_stmt->close();
    }

    $stmt->close();
    $conn->close();
}
?>