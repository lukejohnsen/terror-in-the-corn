<?php /* Template Name: Characters */ ?>
<?php  get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../css/homepage.css'>
</head>

<body>
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

    <div class="characters-container">
    <div class="video-hero">
        <div class="blur-container">
            <h2 class="hero-heading">Characters</h2>
            <p class="hero-text">Come meet our monsters - a creepy collection of the oddest, scariest, strangest freaks straight from Hell and into your nightmare. The Terror is real!
            </p>
        </div>
</div>

        <div class="get-tickets-button">
            <a class='get-tickets-text' href='https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055' target='_blank'>Get Tickets</a>
        </div>

        <div class="card-container">
            <div class="character-cards-container">
                <div class="character-card-bg" id='skitso'>
                    <div class='character-card-info'>
                    <h3 class="character-title">Skitso</h3>
                    <p class="character-description">This crazy, chainsaw-wielding clown is all twisted smiles and manic laughter and will stop at nothing to force a “smile" on your face.</p>
                </div>
</div>

<div class='character-card-bg'
                <div class="character-card-alt-info">
                    <h3 class="character-title">Character</h3>
                    <p class="character-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                </div>
</div>  

                <div class="character-card-bg" id='skitso'>
                    <div class='character-card-info'>
                    <h3 class="character-title">Skitso</h3>
                    <p class="character-description">This crazy, chainsaw-wielding clown is all twisted smiles and manic laughter and will stop at nothing to force a “smile" on your face.</p>
                </div>
            </div>
            
            <div class='character-card-bg'
                <div class="character-card-alt-info">
                    <h3 class="character-title">Character</h3>
                    <p class="character-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                </div>
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
                <h3 id="mailing-list-instructions">Enter your email address to subscribe*</h3>
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
</body>

</html>