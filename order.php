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
    <style>
       .tabhead {
            font-size: 48px;
        }
        td {
            font-size: 28px;
        }
    </style>
</head>
    <body>
        <div class="topnav" id="topnav">
                <a href="points.html">Points</a>
                <a href="order.php" class="active">Order</a>
                <a href="index.php#popular" id="section3">Popular</a>
                <a href="index.php#about" id="section2">About</a>
                <a href="index.php" id="section1">Home</a>  
        </div>


        <!--Whole page hasn't even started yet. Will work on it soon. And probably redesign it overall.-->
        <div class="wholepage" id="order">

            <div class="title">
            <p>Choose from a wide variety of [REDACTED]!</p>
            </div>
            <div class="menu">

            <?php
                require_once('scripts/config.php');

                $sql1 = "SELECT * FROM menu WHERE type='coffee'";
                $coffee = mysqli_query($conn, $sql1);
                
                if (mysqli_num_rows($coffee) > 0) {
                    echo '<table style="width:40%">
                            <tr>
                                <td colspan="3" class="tabhead">Coffees</td>
                            </tr>';
                    while($row = mysqli_fetch_assoc($coffee)) {
                        echo '<tr>
                                <td>'.$row['name'].'</td>
                                <td>Rp. '.$row['price'].'</td>
                            </tr>';
                    }
                    echo '</table>';
                } else {
                    echo 'No data found';
                }

                $conn->close();
            ?>

            <!-- <table style="width:80%">
                <tr>
                    <td>one</td>
                    <td>one</td>
                    <td>one</td>
                </tr>
                <tr>
                    <td>two</td>
                    <td>two</td>
                    <td>two</td>
                </tr>
                <tr>
                    <td colspan="3">three</td>
                </tr>
            </table> -->
            </div>
        </div>

    </body>
</html>