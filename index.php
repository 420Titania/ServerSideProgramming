<!DOCTYPE html>
<html>
<head>
    <title>Pandemonium Coffee</title>
    <link rel="stylesheet" href="styles.css">
    <!--parisienne-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <!--pathway gothic one-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    <script src="header.js" defer></script>
</head>
    <body>
        <!--Top Navigation Bar. It stays on the spot.-->
        <div class="topnav" id="topnav">
                <a href="points.html">Points</a>
                <a href="order.php">Order</a>
                <a href="#popular" id="section3">Popular</a>
                <a href="#about" id="section2">About</a>
                <a href="#home" id="section1">Home</a>  
        </div>

        <!--The Welcome Page. The Background remains still-->
        <div class="home" id="home">
            <head1>Pandemonium Coffee</head1>
        </div>

        <!--The About us page. There wil be images on the right side. Soon. (From Titan)-->
        <div class="about" id="about">
            <div style="margin-left: 30px">
                <head2>About Us</head2>
                <br />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas  dictum erat in aliquam. Class aptent taciti sociosqu ad litora torquent  per conubia nostra, per inceptos himenaeos. Maecenas non tincidunt  felis. Aliquam erat volutpat. Duis dolor nisi, porta eget vulputate  pharetra, auctor ac nunc. Quisque elit nisl, tempus non tincidunt.</p>
            </div>
        </div>

        <!--Popular Section will have 3 Cards. Each card will be taken by SQL (From Titan)-->
        <div class="popular" id="popular">
            <div class="popular-title" id="popular-title">
                <head2>Popular Choices</head2>
            </div>

            <div class="popular-content" id="popular-content">
                <!--Using PHP to get the info from SQL (From Titan)-->
                <?php
                    //Connects to Database
                    require_once('scripts/config.php');

                    //Selects from Database (From Titan)
                    $sql = "SELECT name, image_url, price FROM menu_items ORDER BY order_count DESC LIMIT 3";
                    $result = $conn->query($sql);
    
                    $items = array();
                    while ($row = $result->fetch_assoc()) {
                        $items[] = $row;
                    }
    
                    //Creates cards using For Loops. It's cleaner than using normal means or something. (From Titan)
                    for ($i = 0; $i < 3; $i++) {
                        echo '<div class="popular-card" id="popular-card">';
                        echo '<div class="popular-image" id="popular-image">';
                        if (isset($items[$i])) {
                            echo '<img src="' . $items[$i]["image_url"] . '" alt="' . $items[$i]["name"] . '">';
                        }
                        echo '</div>';
                        echo '<div class="popular-text-container" id="popular-text-container">';
                        if (isset($items[$i])) {
                            echo '<div class="popular-text" id="popular-text">' . $items[$i]["name"] . '</div>';
                            echo '<div class="popular-text" id="popular-text">Rp. ' . $items[$i]["price"] . '</div>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                    $conn->close();
                ?>
            </div>
            
            <!--Button to move to Order Page. I forgot how to make it work (From Titan)-->
            <div class="popular-order" id="popular-order">
                <button class="popular-button" id="popular-button">
                    Order Now
                </button>
            </div>
        </div>
    </body>
</html>