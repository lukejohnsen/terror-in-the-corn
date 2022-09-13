<?php /* Template Name: Dates */ ?>
<?php  get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dates.css" />
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

    <div class="dates-container">
        <div class="dates-hero">
            <div class="blur-container">
                <h2 class="dates-heading">Dates</h2>
                <p class="dates-text">Our haunted attraction is open every Friday & Saturday night throughout October,
                    as well as Halloween night and special Thursday night events on the 14th, 21st and 28th. Check the
                    calendar on this page for exact dates and details, but we open the first Friday evening of October
                    and (weather permitting) will be open every weekend through Halloween.</p>
            </div>
        </div>

        <div class="info-container">
            <div class="calendar-container">
                <h2 class="heading">Calendar</h2>
                <img src="/wp-content/uploads/2022/09/calendar.png" class="calendar-visual">
            </div>

            <div class="time-container">
                <h2 class="heading">Dates</h2>
                <p class="info-text">Open from 6pm - Midnight every Friday & Saturday in October.
                    <br>
                    <br>
                    Open from 6pm - 10:00 pm on Thursday the 14th, 21st and 28th, as well as Halloween night.
                </p>

                <div class="get-tickets-button">
                    <a class='get-tickets-text'>Get Tickets</a>
                </div>
            </div>
        </div>

        <div class="promotions-container">
            <h2 class="heading">Promotions</h2>
            <p class="promotions-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                justo duo dolores et ea rebum.</p>
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