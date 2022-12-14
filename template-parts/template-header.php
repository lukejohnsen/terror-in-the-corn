<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css" />
</head>

<body>
    <div class="header">

        <div class="titc-logo-container">
            <img class="titc-logo" src="../assets/titc-logo.png">
        </div>

        <div class="full-nav">
            <div class="social-media-nav">
                <img class="social-media-links" src="../assets/social-carousel.png">
                <img class="social-media-links" src="../assets/social-carousel.png">
                <img class="social-media-links" src="../assets/social-carousel.png">
                <img class="social-media-links" src="../assets/social-carousel.png">
                <img class="social-media-links" src="../assets/social-carousel.png">
            </div>

            <div class="main-nav">
            <?php 
    wp_nav_menu( 
        array( 
            'theme_location' => 'my-custom-menu'
        ) 
    ); 
?>
                <!-- <ul class="nav-links-container">
                    <li class="nav-links">Home</li>
                    <li class="nav-links">Visit</li>
                    <li class="nav-links">Attractions</li>
                    <li class="nav-links">More</li>
                </ul> -->
                <div class="get-tickets-container">
                    <a id="get-tickets-link">Get Tickets</a>
                </div>
            </div>

            <div class="mobile-nav">
                <img src="../assets/mobile-hamburger.png" class="nav-hamburger">
            </div>
        </div>


    </div>

</body>

</html>