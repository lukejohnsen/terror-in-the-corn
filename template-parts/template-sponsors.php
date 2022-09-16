<?php /* Template Name: Sponsors */ ?>
<?php  get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sponsors.css" />
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

    <div class="sponsors-container">
        <div class="sponsors-hero">
            <div class="blur-container">
                <h2 class="sponsors-hero-heading">Sponsors</h2>
                <p class="sponsors-hero-text">Terror In the Corn is possible thanks to support from our community and
                    local businesses in town. Thank you to our sponsors!</p>
            </div>
        </div>

        <div class="sponsor-logos-container">
            <h2 class="sponsors-secondary-heading">Sponsors</h2>
            <div class="top-level-sponsors">
                <img src="/wp-content/uploads/2022/09/HSL-logo.png" id="hsl-logo" class="premier-row">
                <img src="/wp-content/uploads/2022/09/CTI-logo.png" id="cti-logo" class="premier-row">
            </div>
            <div class="level-1-sponsors">
                <img src="/wp-content/uploads/2022/09/Dusk-logo.png" id="dusk-logo" class="top-row">
                <img src="/wp-content/uploads/2022/09/Depaendable-Health-Services-Logo.png" id="dependable-health-services-logo"
                    class="top-row">
                <img src="/wp-content/uploads/2022/09/Concord-logo.png" id="concord-logo">
                <img src="/wp-content/uploads/2022/09/Rusing-Lopez-Lizardi-logo.png" id="rusing-lopez-lizardi-logo">
            </div>

            <img src="/wp-content/uploads/2022/09/line.png" class="red-line">

            <div class="level-2-sponsors">
                <img src="/wp-content/uploads/2022/09/iHear-Radio-logo.png" id="iheart-logo" class="top-row-two">
                <img src="/wp-content/uploads/2022/09/The-Bull-logo.png" id="the-bull-logo" class="top-row-two">
                <img src="/wp-content/uploads/2022/09/KRQ-logo.png" id="krq-logo" class="top-row-two">
                <img src="/wp-content/uploads/2022/09/Fox-Sports-logo.png" id="fox-sports-logo" class="bottom-row-two">
                <img src="/wp-content/uploads/2022/09/Hot-98.3-logo.png" id="hot-983" class="bottom-row-two">
                <img src="/wp-content/uploads/2022/09/My-97.1-logo.png" id="my-971" class="bottom-row-two">
                <img src="/wp-content/uploads/2022/09/Radio-Tejano-logo.png" id="radio-tejano-logo" class="bottom-row-two">
            </div>

        </div>

        <div class="sponsor-signup">
            <h2 class="sponsors-secondary-heading">Become a Sponsor</h2>
            <p class="sponsor-signup-text">With over 15,000 people visiting us throughout October plus thousands of
                followers on social media, Terror In the Corn is a great way to gain exposure and reach a local audience
                for your brand or business!</p>

            <div class="input-container">
                <input type="text" class="input-1" placeholder='Name'>
                <input type="text" class="input-2" placeholder='Email'>
                <input type="text" class="input-3" placeholder='Phone #'>
                <textarea type="text" class="input-4" placeholder='Write you message here!'></textarea>
                <div class="submit-button-container">
                    <a class="submit-button">Submit</a>
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
            <a href='https://tucsonterrorinthecorn.com/' target='_blank'><img src='/wp-content/uploads/2022/09/Buckelew-Farm.png' class="bf-logos" id="buckelew-farm"></a>
                    <a href='https://www.buckelewfarm.com/' target='_blank'><img  src='/wp-content/uploads/2022/09/titc-logo.png' class="bf-logos" id="titc"></a>
                    <a href='https://buckelewfireworks.com/' target='_blank'><img src='/wp-content/uploads/2022/09/Fireworks-Stands.png' class="bf-logos" id="fireworks-stands"></a>
                    <a href='https://buckelewchristmastrees.com/' target='_blank'><img src='/wp-content/uploads/2022/09/BuckelewFarm-ChristmasTrees-Logo.png' class="bf-logos" id="christmas-tree-lots"></a>
            </div>
        </div>

        <div class='gjj-footer'>
            <img src="/wp-content/uploads/2022/09/made-with-good-juju.png" id="gjj-logo">
        </div>
    </div>
</body>

</html>