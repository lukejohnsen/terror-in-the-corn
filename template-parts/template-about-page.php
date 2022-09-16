<?php /* Template Name: About */ ?>
<?php  get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/about.css" />
</head>

<body>
    <div class="header">

        <div class="titc-logo-container">
            <img class="titc-logo" src="/wp-content/uploads/2022/09/titc-logo.png">
        </div>

        <div class="full-nav">
            <div class="social-media-nav">
            <a class="social-media-links" href='https://twitter.com/terror1nthecorn'><img id='twitter-image' src="/wp-content/uploads/2022/09/1.png"></a>
                <a class="social-media-links" href='https://www.facebook.com/Terror1ntheCorn'><img id='facebook-image' src="/wp-content/uploads/2022/09/2.png"></a>
                <a class="social-media-links" href='https://www.instagram.com/terrorinthecorn/'><img id='instagram-image' src="/wp-content/uploads/2022/09/3.png"></a>
                <a class="social-media-links" href='https://www.youtube.com/channel/UCOWtPHUlsHzmc2giMJTCHTQ'><img id='youtube-image' src="/wp-content/uploads/2022/09/5.png"></a>
                <a class="social-media-links" href='https://www.tiktok.com/@tucsonterrorinthecorn'><img id='tiktok-image' src="/wp-content/uploads/2022/09/4.png"></a>
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

    <div class="about-container">
        <div class="video-hero">
        <div class="blur-container">
            <h2 class="hero-heading">About</h2>
            <p class="hero-text">What dangers and devilish scares await you in the darkness of a haunted cornfield? Avoid the insane locals who lurk in the long grass. Escape the monsters of lore just waiting to snatch their next victim. 
<br>
<br>
Welcome to Terror In the Corn!
            </p>
        </div>
</div>

        <div class="about-info">
            <h2 class="about-heading">Haunting Tucson for Over 10 Years</h2>
            <p class="about-text">Sure, you’ve been to a “haunted house” - but can you imagine the frightening
                possibilities of a haunted cornfield? Voted Tucson’s best haunted attraction for years, Tucson’s
                Terror
                In the Corn is Southern Arizona’s scariest and most unique Halloween event.
                <br>
                <br>
                Enjoy a variety of “haunts” and Halloween fun, all connected by a totally immersive and terrifying
                cornfield. When darkness falls
                and the moon comes out, so do the scares, screams and surrounding terror! The corn is calling…enter
                if
                you dare.
                <br>
                <br>
                Terror In the Corn is a locally owned and operated event proudly brought to you by Buckelew
                Farm. After 30 years helping create family memories and cultivate traditions throughout the Tucson
                Community with their working farm and popular pumpkin patch at the iconic Three Points location, the
                next generation of Buckelew’s are keeping the holiday happenings going at a new location in Marana,
                Arizona.
                <br>
                <br>
                Starting with Terror In the Corn during Halloween and continuing Christmas and New Years with
                Christmas Tree lots, fireworks stands, and other fun events - your support and patronage helps
                continue
                the legacy of a true local family business and keeps our holiday traditions alive in Southern
                Arizona
                for generations to come.
            </p>
        </div>

        <div class='about-image-gallery'>
            <img src='/wp-content/uploads/2022/09/About_Page_In-Copy4.jpg' class='about-images'>
            <img src='/wp-content/uploads/2022/09/About_Page_In-Copy1.jpg' class='about-images'>
            <img src='/wp-content/uploads/2022/09/About-Page-In-Copy3-1-scaled.jpg' class='about-images'>
            <img src='/wp-content/uploads/2022/09/About-Page-In-Copy2-1.jpeg' class='about-images'>
            <img src='/wp-content/uploads/2022/09/About-Page-In-Copy5-1-scaled.jpg' class='about-images'>
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
                    <a href='https://www.tucsonterrorinthecorn.com/' target='_blank'><img src='/wp-content/uploads/2022/09/Buckelew-Farm.png' class="bf-logos" id="buckelew-farm"></a>
                    <a href='https://www.buckelewfarm.com/'> <img  src=/wp-content/uploads/2022/09/titc-logo.png class="bf-logos" id="titc"></a>
                    <a href='https://www.buckelewfireworks.com/'> <img src='/wp-content/uploads/2022/09/Fireworks-Stands.png' class="bf-logos" id="fireworks-stands"></a>
                    <a href='https://www.buckelewchristmastrees.com/'> <img src='/wp-content/uploads/2022/09/BuckelewFarm-ChristmasTrees-Logo.png' class="bf-logos" id="christmas-tree-lots"></a>
                </ul>
                <p id="contact-info"> I-10 & Tangerine Exit 240 • 9312 W Rillito Village Trail Tucson, AZ 85653 • <a
                        href="/" id="email-address">info@buckelewfarm.com</a></p>
            </div>

            <div class="social-media-nav-footer">
            <a class="social-media-links" href='https://twitter.com/terror1nthecorn'><img id='twitter-image' src="/wp-content/uploads/2022/09/1.png"></a>
                <a class="social-media-links" href='https://www.facebook.com/Terror1ntheCorn'><img id='facebook-image' src="/wp-content/uploads/2022/09/2.png"></a>
                <a class="social-media-links" href='https://www.instagram.com/terrorinthecorn/'><img id='instagram-image' src="/wp-content/uploads/2022/09/3.png"></a>
                <a class="social-media-links" href='https://www.youtube.com/channel/UCOWtPHUlsHzmc2giMJTCHTQ'><img id='youtube-image' src="/wp-content/uploads/2022/09/5.png"></a>
                <a class="social-media-links" href='https://www.tiktok.com/@tucsonterrorinthecorn'><img id='tiktok-image' src="/wp-content/uploads/2022/09/4.png"></a>
            </div>
        </div>

        <div class='gjj-footer'>
            <img src="/wp-content/uploads/2022/09/made-with-good-juju.png" id="gjj-logo">
        </div>
    </div>
</body>

</html>