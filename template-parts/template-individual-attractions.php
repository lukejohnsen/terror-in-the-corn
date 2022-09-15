<?php /* 
* Template Name: Attractions Individual
Template Post Type: attractions
 */ ?>
<?php  get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/attraction-info.css" />

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
    ); ?>
        <div class="get-tickets-container">
            <a id="get-tickets-link">Get Tickets</a>
        </div>
    </div>

    <div class="mobile-nav">
        <img src="/wp-content/uploads/2022/09/mobile-hamburger.png" class="nav-hamburger">
    </div>
</div>
</div>

<?php 
$wp_query;
$postid = get_the_ID(); 
$post = get_post($postid);
$posttitle = get_post_meta($postid, 'title', true);
$posthero = get_post_meta($postid, 'hero', true);
$postdes = get_post_meta($postid, 'des', true);
$postimage = get_post_meta($postid, 'hero_image', true);

;?>



    <div class="attraction-info-container">
        <div class="video-hero">
            <h2 class="hero-heading"><?php echo ($posttitle); ?></h2>
            <div class='hero-image'><?php ($postimage); ?></div>
            
            <p class="hero-text"><?php echo ($posthero); ?></p>
            
        </div>

        <div class="get-tickets-button">
            <a class='get-tickets-text'>Get Tickets</a>
        </div>

        <div class="sub-hero">
            <p class="sub-hero-text"><?php echo ($postdes); ?></p>
                
        </div>

        <div class="info-container">
            <div class="pricing-container">
                <h2 class="heading">Pricing</h2>
                <p class="info-text">
                    General Admission: Starting @ $25.00 + tax
                    <br>
                    Fast Pass: Starting @ $35.00 + tax
                    <br>
                    <br>
                    NO REFUNDS. ALL SALES FINAL
                </p>
            </div>

            <div class="time-container">
                <h2 class="heading">Time</h2>
                <p class="info-text">Open from 6pm - Midnight every Friday & Saturday in October.
                    <br>
                    <br>
                    Open from 6pm - 10:00 pm on Thursday the 14th, 21st and 28th, as well as Halloween night.
                </p>
            </div>
        </div>

        <div class="sponsors-container">

            <h2 class="sponsors-heading">Sponsors</h2>
            <h3 class="sponsors-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                justo duo dolores et ea rebum.</h3>



            <div class="sponsor-logos-container">
                <div class="level-1-sponsors">
                    <img src="/wp-content/uploads/2022/09/Dusk-logo.png" id="dusk-logo" class="top-row">
                    <img src="/wp-content/uploads/2022/09/HSL-logo.png" id="hsl-logo" class="top-row">
                    <img src="/wp-content/uploads/2022/09/CTI-logo.png" id="cti-logo" class="top-row">
                    <img src="/wp-content/uploads/2022/09/Depaendable-Health-Services-Logo.png" id="dependable-health-services-logo"
                        class="top-row">
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
            <img src="/wp-content/uploads/2022/09/GoodJuJu-Bloody.png" id="gjj-logo">
        </div>
    </div>
</body>

</html>