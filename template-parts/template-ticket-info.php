<?php /* Template Name: Ticket Info */ ?>
<?php  get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../css/ticket-info.css'>
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
    
    <div class="ticket-info-container">
        <div class="ticket-info-hero">
            <div class="blur-container">
                <h2 class="ticket-hero-heading">Ticket Information</h2>
                <p class="ticket-hero-text">Terror In the Corn is three haunted attractions in one and can be experienced with General Admission tickets or with our upgraded Fast Pass that allows you to skip the line.</p>
            </div>
        </div>

        <div class="pricing-promotion-container">
            <div class="pricing-container">
                <h2 class="pricing-promotion-heading">Pricing</h2>
                <p class="pricing-info">
                    General Admission: Starting @ $28.00 + tax
                    <br>
                    <br>FastPass: Starting @ $38.00 + tax
                    <br>
                    <br> <a id='no-refunds-text'>No Refunds. All sales final</a>
                </p>
            </div>

            <div class="promotion-container">
                <h2 class="pricing-promotion-heading">Details</h2>
                <h3 class="promotion-info">Open weekend nights in October + Halloween
                    <br>Hours: 6pm - Midnight*
                    <br>
                    <br>
                    Closes at 10pm on OCT. 6, 10, 13, 20, 27 & 30
                </h3>
            </div>

        </div>

        <div class="get-tickets-button" id='fear-ticket'>
            <a href="https://tucsonterrorinthecorn.fearticket.com" target='_blank'> <img src="https://cdne1.fearticket.com/includes/images/fearticket/buyticket_hor.jpg" alt="Buy Ticket" /> </a>
            </div>

        <div class="admission-info-container">
            <h2 class="admission-heading">Admission</h2>
            <h3 class="admission-top-info">Terror In the Corn is a variety of haunted attractions and Halloween fun all
                connected by a totally immersive and terrifying cornfield. Each ticket is good for one (1) person and
                grants access to the general areas of our event plus each of the three (3) haunted attractions within
                Terror In the Corn, one time through per customer. (No discounts or different pricing for kids, seniors
                or any special groups unless otherwise noted.)</h3>

            <div class="admission-bullets-container">
                <div class="admission-bullets-left">
                    <div class="admission-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info"><a class="links-text" href="https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055">General Admission</a>: tickets starting at $28.00 + tax (all ages, general
                            public line)</p>
                    </div>

                    <br>

                    <div class="admission-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info"><a class="links-text" href="https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055">Fast Pass</a>: tickets starting at $38.00 + tax (all ages, skip the lines!)
                        </p>
                    </div>

                    <br>

                    <div class="admission-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">General Parking: FREE</p>
                    </div>

                    <br>

                    <div class="admission-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">VIP Parking: $10.00 per vehicle</p>
                    </div>

                    <br>

                    <div class="admission-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Zombie Gellyball Shootout: $10.00 for one "hopper" full of paintballs
                            (approx. 140 rounds)</p>
                    </div>
                </div>

                <div class="admission-bullets-right">
                    <div class="admission-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Escape Room Experience: $10.00 for a 10-12 minute horror-themed escape
                            room experience</p>
                    </div>

                    <br>

                    <div class="admission-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Axe Throwing: $10.00 for 8 throws</p>
                    </div>

                    <br>

                    <div class="admission-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Group Rates & Special Events: Email <a class="links-text" href='mailto: info@tucsonterrorinthecorn.com'>info@tucsonterrorinthecorn.com</a> for
                            more information on groups of 50+ or for any custom events.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="refund-policy-container">
            <h2 class="refund-heading">Refund Policy</h2>
            <h3 class="refund-info">Terror in the Corn tickets are non-refundable and will not be replaced if lost,
                stolen or unused. Like sporting events and other large attractions, if you decide it’s not for you upon
                entering, we do not give refunds under any circumstances. Refunds or rain checks are not given as a
                result of inclement weather. Some attractions may close temporarily until rain, lightning, or high winds
                have passed and then will reopen if conditions permit. If we do have to completely close early due to
                inclement weather, your purchased ticket will be valid on a future night - the only exception to our no
                refund policy. Terror in the Corn tickets are not date specific and are valid during hours of operation
                during the same year only.</h3>
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
                <input type="text" id="email-input" placeholder="Email">
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