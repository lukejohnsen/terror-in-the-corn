<?php /* Template Name: Events */ ?>
<?php  get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/events.css" />
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
    
    <div class="events-container">
        <div class="events-hero">
            <div class="blur-container">
                <h2 class="events-hero-heading">Events</h2>
                <p class="events-hero-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo</p>
            </div>
        </div>

        <div class="events-info">
            <h2 class="events-heading">Corporate Events</h2>
            <p class="events-text">Terror In The Corn is the perfect place for your next corporate event or custom
                outing. Whether it’s a business event, a birthday party or a cool custom event for clients, customers or
                colleagues, our attraction offers a variety of settings, seating options and scary activities from which
                to choose. Let us help you customize a Halloween haunting or fun Fall experience to fit any budget, any
                business or any age group. 
                <br>
                <br>
                Corporate and custom packages are available for parties of 50 people or more.
                Discounts are available for larger groups and we can customize a plan or party for any sized company or
                customer segment to meet your individual needs. Private tents and/or catering are available on request.
                Packages can be all-inclusive or a la carte and can include access to the haunted attractions, fun &
                games, food and beverages, pumpkins for guests and more! 
                <br>
                <br>
                In order to accommodate your needs and account
                for the current safety and social distancing concerns, we require that tickets for large groups and
                custom events be purchased at least one (1) week in advance. 
                <br>
                <br>
                For available dates and details, please
                email info@tucsonterrorinthecorn.com with your questions or any information you’d like answered, and any
                pricing or personalization of your private event, and we will do our best to respond promptly.</p>
        </div>

        <div class="events-submission-form">
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