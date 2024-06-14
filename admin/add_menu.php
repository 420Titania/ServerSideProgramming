<!DOCTYPE html>
<head>
    <title>Add Data</title>
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
<form action="data_inserted.php" target="_self" method="POST">
        <label for="itemname">Item Name:</label><br>
        &nbsp&nbsp&nbsp<input type="text" id="itemname" name="itemname" required><br>        
        <label for="itemprice">Price:</label><br>
        &nbsp&nbsp&nbsp<input type="number" id="itemprice" name="itemprice" required><br>
        <label for="image">Image Link (Optional):</label><br>
        &nbsp&nbsp&nbsp<input type="number" id="image" name="image"><br>
        
        <br>This is a:<br>
          <input type="radio" id="coffee" name="category" value="coffee" required>
          <label for="coffee">Coffee</label><br>
          <input type="radio" id="noncof" name="category" value="noncoffee">
          <label for="noncof">Non-Coffee</label><br>
          <input type="radio" id="food" name="category" value="food">
          <label for="food">Food</label>
        <br><br>
        <input type="submit" value="Add Data">
    </form>