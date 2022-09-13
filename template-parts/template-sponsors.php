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
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
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
                    <a id="get-tickets-link">Get Tickets</a>
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
                <img src="/wp-content/uploads/2022/09/BuckelewFarm-ChristmasTrees-Logo.png" id="buckelew-farm-logo">
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
                <input type="text" class="input-1">
                <input type="text" class="input-2">
                <input type="text" class="input-3">
                <input type="text" class="input-1">
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
                    <img src="/wp-content/uploads/2022/09/Rate Our Haunt.png" class="hh-ads">
                    <img src="/wp-content/uploads/2022/09/AZ Haunted Houses.png" class="hh-ads">
                    <img src="/wp-content/uploads/2022/09/Haunts.png" class="hh-ads">
                    <img src="/wp-content/uploads/2022/09/Haunted Corn Mazes.png" class="hh-ads">
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
                    <li id="buckelew-farm">Buckelew Farm</li>
                    <li id="titc">Terror in the Corn</li>
                    <li id="fireworks-stands">Fireworks Stands</li>
                    <li id="christmas-tree-lots">Christmas Tree Lots</li>
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