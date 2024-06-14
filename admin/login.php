<?php
session_start();

require_once('config.php');

$name = $_POST['name'];
$pword = $_POST['pword'];

if (empty($name) || empty($pword)) {
    die("Login failed because one or more required fields were not filled!");
}

$sql = "SELECT pass FROM admins WHERE user=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('s',$name);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {

} else {
    die("Invalid username or password");
}

if ($user && password_verify($pword, $user['pass'])) {
    $_SESSION['login'] = true;
    echo "Login success! Redirecting...";
    echo "<meta http-equiv='refresh' content='2;url=view_data.php'>";
} else {
    die("Invalid username or password");
}

$stmt->close();
$conn->close();