<!DOCTYPE html>
<head>
    <title>View Data</title>
    <link rel="stylesheet" href="adminshared.css">
</head>
<body>
    <header>
        <a href="logout.php" class="button">Logout</a>
        <a href="add_menu.php" class="button">Add Item</a>
        <a href="add_phone.php" class="button">Add Number</a>
        <a href="add_points.php" class="button">Add Points</a>
    </header>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SESSION['login'] == true) {

} else {
    header("Location: login.html");
    die();
}

require_once('config.php');

$sql = "SELECT * FROM menu";
$result = mysqli_query($conn, $sql);

echo '<br>
<table>
    <caption>Menu</caption>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Type</th>
    </tr>';


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo '
      <tr>
          <td>'.$row['name'].'</td>
          <td>Rp. '.$row['price'].'</td>
          <td>'.$row['type'].'</td>
      </tr>';
    }
  } else {
    echo 'No menu data';
  }

  $sql2 = "SELECT * FROM points";
  $result2 = mysqli_query($conn, $sql2);
  
  echo '
  <table>
  <br><br>
  <caption>Registered Numbers</caption>
      <tr>
          <th>Number</th>
          <th>Points</th>
      </tr>';
  
  
  if (mysqli_num_rows($result2) > 0) {
      while($row2 = mysqli_fetch_assoc($result2)) {
        echo '
        <tr>
            <td>'.$row2['phone'].'</td>
            <td>'.$row2['pts'].'</td>
        </tr>';
      }
    } else {
      echo 'No phone data';
    }

?>