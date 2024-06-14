<!DOCTYPE html>
<head>
    <title>Add Data</title>
    <style>
        a.button {
            padding: 1px 6px;
            border: 1px outset buttonborder;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            border-radius: 3px;
            color: white;
            background-color: green;
            text-decoration: none;
        }
    </style>
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
<form action="data_inserted.php" target="_self" method="POST">
        <label for="itemname">Item Name:</label><br>
        &nbsp&nbsp&nbsp<input type="text" id="itemname" name="itemname" required><br>
        <label for="itemprice">Price:</label><br>$
        <input type="number" id="itemprice" name="itemprice" required><br>
        <br>
        <input type="submit" value="Add Data">
    </form>