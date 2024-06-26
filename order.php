<!DOCTYPE html>
<html>
<head>
    <title>Order Now</title>
    <link rel="stylesheet" href="styles.css">
    <!--parisienne-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <!--pathway gothic one-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="topnav" id="topnav">
        <a href="points.html">Points</a>
        <a href="order.php" class="active">Order</a>
        <a href="index.php#popular" id="section3">Popular</a>
        <a href="index.php#about" id="section2">About</a>
        <a href="index.php" id="section1">Home</a>  
    </div>

    <div class="wholepage" id="order">
        <div class="title">
            <head2>Order Now</head2>
        </div>

        <!--This contains the menu page and their specifications-->
        <div class="menu-page">
            <div class="menu-container">
                <div class="menu">
                    <?php
                    require_once('scripts/config.php');
                    
                    $sql1 = "SELECT * FROM menu WHERE type='coffee'";
                    $coffee = mysqli_query($conn, $sql1);
                    
                    if (mysqli_num_rows($coffee) > 0) {
                        echo '<table>
                                <tr>
                                    <td colspan="2" class="menu-title">Coffees</td>
                                </tr>';
                        while($row = mysqli_fetch_assoc($coffee)) {
                            echo '<tr>
                                    <td>'.$row['name'].'</td>
                                    <td>Rp. '.$row['price'].'</td>
                                    <td><button class="plus-btn" data-name="'.$row['name'].'" data-price="'.$row['price'].'">+</button></td>
                                    <td><button class="minus-btn" data-name="'.$row['name'].'" data-price="'.$row['price'].'">-</button></td>
                                </tr>';
                        }
                        echo '</table>';
                    } else {
                        echo 'No data found';
                    }
                    ?>
                </div>
            </div>

            <div class="menu-container">
                <div class="menu">
                    <?php
                    require_once('scripts/config.php');
                    
                    $sql2 = "SELECT * FROM menu WHERE type='noncoffee'";
                    $noncoffee = mysqli_query($conn, $sql2);
                    
                    if (mysqli_num_rows($noncoffee) > 0) {
                        echo '<table>
                                <tr>
                                    <td colspan="2" class="menu-title">Non-Coffee</td>
                                </tr>';
                        while($row = mysqli_fetch_assoc($noncoffee)) {
                            echo '<tr>
                                    <td>'.$row['name'].'</td>
                                    <td>Rp. '.$row['price'].'</td>
                                    <td><button class="plus-btn" data-name="'.$row['name'].'" data-price="'.$row['price'].'">+</button></td>
                                    <td><button class="minus-btn" data-name="'.$row['name'].'" data-price="'.$row['price'].'">-</button></td>
                                </tr>';
                        }
                        echo '</table>';
                    } else {
                        echo 'No data found';
                    }
                    ?>
                </div>
            </div>

            <div class="menu-container">
                <div class="menu">
                    <?php
                    require_once('scripts/config.php');
                    
                    $sql3 = "SELECT * FROM menu WHERE type='Food'";
                    $food = mysqli_query($conn, $sql3);
                    
                    if (mysqli_num_rows($food) > 0) {
                        echo '<table>
                                <tr>
                                    <td colspan="2" class="menu-title">Pastries</td>
                                </tr>';
                        while($row = mysqli_fetch_assoc($food)) {
                            echo '<tr>
                                    <td>'.$row['name'].'</td>
                                    <td>Rp. '.$row['price'].'</td>
                                    <td><button class="plus-btn" data-name="'.$row['name'].'" data-price="'.$row['price'].'">+</button></td>
                                    <td><button class="minus-btn" data-name="'.$row['name'].'" data-price="'.$row['price'].'">-</button></td>
                                </tr>';
                        }
                        echo '</table>';
                    } else {
                        echo 'No data found';
                    }
                    
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>

        <!-- Shopping Cart -->
        <div class="cart-page">
            <div class="cart-container">
                <h2>Shopping Cart</h2>
                <table id="cart-table">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Cart items will be added here dynamically -->
                    </tbody>
                </table>
                <div class="cart-footer">
                    <input type="text" id="phone-number" placeholder="Phone Number" require>
                    <button id="order-button">Order</button>
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/cart.js"></script>
</body>
</html>