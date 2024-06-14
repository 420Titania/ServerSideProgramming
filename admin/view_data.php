<!DOCTYPE html>
<head>
    <title>View Data</title>
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
        table, th, td {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <header>
        <a href="logout.php" class="button">Logout</a>
        <a href="add_data.php" class="button">Add Data</a>
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
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>';


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo '
      <tr>
          <td>'.$row['name'].'</td>
          <td>'.$row['price'].'</td>
          <td>$'.$row['type'].'</td>
      </tr>';
    }
  } else {
    echo 'No data found';
  }


?>