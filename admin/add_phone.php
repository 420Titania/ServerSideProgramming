<!DOCTYPE html>
<head>
    <title>Add Phone</title>
    <link rel="stylesheet" href="adminshared.css">
</head>
<body>
    <header>
        <a href="logout.php" class="button">Logout</a>
        <a href="view_data.php" class="button">View Data</a>
    </header>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SESSION['login'] == true || isset($_COOKIE['php_remember'])) {

} else {
    header("Location: login.html");
    die();
}
?>
<br>
<form action="data_phoned.php" target="_self" method="POST">
        <label for="number">Number:</label><br>
        &nbsp&nbsp&nbsp<input type="number" id="number" name="phone" required><br>
        <label for="points">Points to add:</label><br>
        &nbsp&nbsp&nbsp<input type="number" id="points" name="points" required><br>
        <br><br>
        <input type="submit" value="Add Data">
    </form>