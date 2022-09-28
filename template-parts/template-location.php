<?php /* Template Name: Location */ ?>
<?php  get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../css/location.css'>
</head>

<body>
    <div class=shader>
    <div class="header">

        <div class="titc-logo-container">
            <img class="titc-logo" src="/wp-content/uploads/2022/09/titc-logo.png">
        </div>

        <div class="full-nav">
            <div class="social-media-nav">
            <a class="social-media-links" href='https://twitter.com/terror1nthecorn' target='_blank'><img id='twitter-image' src="/wp-content/uploads/2022/09/1.png"></a>
                <a class="social-media-links" href='https://www.facebook.com/Terror1ntheCorn' target='_blank'><img id='facebook-image' src="/wp-content/uploads/2022/09/2.png"></a>
                <a class="social-media-links" href='https://www.instagram.com/terrorinthecorn/' target='_blank'><img id='instagram-image' src="/wp-content/uploads/2022/09/3.png"></a>
                <a class="social-media-links" href='https://www.youtube.com/channel/UCOWtPHUlsHzmc2giMJTCHTQ' target='_blank'><img id='youtube-image' src="/wp-content/uploads/2022/09/5.png"></a>
                <a class="social-media-links" href='https://www.tiktok.com/@tucsonterrorinthecorn' target='_blank'><img id='tiktok-image' src="/wp-content/uploads/2022/09/4.png"></a>
            </div>

            <div class="main-nav">
                <!-- <ul class="nav-links-container">
                    <li class="nav-links">Home</li>
                    <li class="nav-links">Visit</li>
                    <li class="nav-links">Attractions</li>
                    <li class="nav-links">More</li>
                </ul> -->
                <?php 
    wp_nav_menu( 
        array( 
            'theme_location' => 'my-custom-menu'
        ) 
    ); 
?>
                <div class="get-tickets-container">
                    <a id="get-tickets-link" href='https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055' target='_blank'>Get Tickets</a>
                </div>
            </div>

            <div class="mobile-nav">
                <img src="/wp-content/uploads/2022/09/mobile-hamburger.png" class="nav-hamburger">
            </div>
        </div>
    </div>
    
    <div class="location-container">
        <div class="location-hero">
            <div class="blur-container">
                <h2 class="location-heading">Location</h2>
                <h3 class="location-text">Close to town and just off the highway, Terror In the Corn is conveniently located in Marana, AZ at I-10 & Tangerine Rd. (Exit 240)</h3>
            </div>
        </div>

        <div class="get-tickets-button">
            <a class='get-tickets-text' href='https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055' target='_blank'>Get Tickets</a>
        </div>

        <div class="info-container">
            <div class="map-container">
                <h2 class="heading">Map</h2>
                <img src="/wp-content/uploads/2022/09/map.png" class="map-visual">
            </div>

            <div class="address-directions">
                <h2 class="heading">Address</h2>
                <p class="info-text">Terror In the Corn is located at I-10 & Tangerine Rd. (Exit 240)
<br>
<br>
9312 W. Rillito Village Trail, Marana, AZ 85653
<br>
<br>
<a href='mailto: info@tucsonterrorinthecorn.com' class='email-link'>info@tucsonterrorinthecorn.com</a>
                </p>
                <h2 class="heading" id="directions-heading">Directions</h2>
                <p class="info-text">We are no longer at Buckelew Farm in Three Points! We are closer to town on the west side of I-10 at Tangerine Rd. (Exit 240). You can see the cornfield from the highway! 
                    <br>
                    <br>
                    Traveling north from Tucson or south from Phoenix, Terror In the Corn is just off the I-10 highway at Exit 240. 
                    <br>
                    <br>
Take Tangerine Rd. west and turn left on N. Rillito Village Trail. You'll see Terror In the Corn on your right - can't miss us!
                </p>
            </div>

            <div class="mobile-map-container">
                <h2 class="heading">Map</h2>
                <img src="/wp-content/uploads/2022/09/map.png" class="map-visual">
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="mailing-list-section">
            <div class="ads-container">
                <div class="ads-section">
                <a href='https://www.tucsonhauntedhouses.com/' target="_blank"><img src="/wp-content/uploads/2022/09/Rate-Our-Haunt-1.png" class="hh-ads"/></a>
                    <a href='https://www.azhauntedhouses.com/' target="_blank"> <img src="/wp-content/uploads/2022/09/AZ-Haunted-Houses-1.png" class="hh-ads"/></a>
                    <a href='https://www.haunts.com/' target="_blank"><img src="/wp-content/uploads/2022/09/Haunts-1.png" class="hh-ads"></a>
                    <a href='https://www.hauntedcornmazes.com/' target="_blank"><img src="/wp-content/uploads/2022/09/Haunted-Corn-Mazes-1.png" class="hh-ads"/></a>
                </div>
            </div>
            <div class="email-signup-container">
                <h2 id="mailing-list-text">Mailing List</h2>
                <h3 id="mailing-list-instructions">Subscribe to be part of all the holiday happenings!</h3>
                <input type="text" id="email-input">
                <p id="mailing-list-disclaimer">By submitting this form you agree to receive marketing emails from
                    Terror in the Corn. Don’t worry, you can unsubscribe at any time.</p>
                <div class="subscribe-button-container">
                    <a class="subscribe-button">Subscribe</a>
                </div>
            </div>
        </div>

        <div class="universal-section">
            <div class='buckelew-links-container'>
                <ul class="buckelew-links-list">
                <a href='https://tucsonterrorinthecorn.com/' target='_blank'><img src='/wp-content/uploads/2022/09/Buckelew-Farm.png' class="bf-logos" id="buckelew-farm"></a>
                    <a href='https://www.buckelewfarm.com/' target='_blank'><img  src='/wp-content/uploads/2022/09/titc-logo.png' class="bf-logos" id="titc"></a>
                    <a href='https://buckelewfireworks.com/' target='_blank'><img src='/wp-content/uploads/2022/09/Fireworks-Stands.png' class="bf-logos" id="fireworks-stands"></a>
                    <a href='https://buckelewchristmastrees.com/' target='_blank'><img src='/wp-content/uploads/2022/09/BuckelewFarm-ChristmasTrees-Logo.png' class="bf-logos" id="christmas-tree-lots"></a>
                </ul>
                <p id="contact-info"> I-10 & Tangerine Exit 240 • 9312 W Rillito Village Trail Tucson, AZ 85653 • <a
                        href="/" id="email-address">info@buckelewfarm.com</a></p>
            </div>

            <div class="mobile-social-media-nav">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
            </div>
        </div>

        <div class='gjj-footer'>
            <img src="/wp-content/uploads/2022/09/made-with-good-juju.png" id="gjj-logo">
        </div>
    </div>
</div>
</body>

</html>