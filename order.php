<!DOCTYPE html>
<html>
<head>
    <title>Project Cafe</title>
    <link rel="stylesheet" href="styles.css">
    <!--parisienne-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <!--pathway gothic one-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="topnav" id="topnav">
                <a href="/points.html">Points</a>
                <a href="./order.php">Order</a>
                <a href="#popular" id="section3">Popular</a>
                <a href="#about" id="section2">About</a>
                <a href="./index.php" id="section1">Home</a>  
        </div>


        <!--Whole page hasn't even started yet. Will work on it soon. And probably redesign it overall.-->
        <div class="Placeholder" id="Placeholder">
            <h2> Hello World</h2>
            <h2> Lol</h2>
            <h2> Lmao</h2>
        </div>


        
        <script>
        const divs = document.querySelectorAll('.home, .about, .popular');

        const navbar = document.getElementById('topnav');

        window.addEventListener('scroll', () => {
  
        divs.forEach((div) => {
          const divTop = div.offsetTop;
          const divHeight = div.clientHeight;
          const scrollPos = window.scrollY;

          //offset by 15 because navbar
        if (scrollPos + 15 >= divTop && scrollPos < divTop + divHeight) {
        navbar.querySelectorAll('a').forEach((link) => {
          link.classList.remove('active');
        });

        const correspondingLink = navbar.querySelector(`a[href="#${div.id}"]`);

        if (correspondingLink) {
            correspondingLink.classList.add('active');
        }
    }
  });
});
        </script>
    </body>
</html>