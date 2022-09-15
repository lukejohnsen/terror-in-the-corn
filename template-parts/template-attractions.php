<?php /* Template Name: Attractions Main */ ?>
<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/attractions.css" />
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
                    <a id="get-tickets-link">Get Tickets</a>
                </div>
            </div>

            <div class="mobile-nav">
                <img src="/wp-content/uploads/2022/09/mobile-hamburger.png" class="nav-hamburger">
            </div>
        </div>
    </div>

    <div class="attractions">
        <div class="video-hero">
            <h2 class="hero-heading">Attractions</h2>
            <p class="hero-text">With all new attractions, updated scenes, more scares and a new location closer to town
                on Tangerine & I-10, Terror In the Corn is gearing up for the greatest, most ghastly Halloween yet!</p>
                <div class='blur-container'>
                <video controls autoplay muted src='/wp-content/uploads/2022/09/Attractions-Page-Hero-Video.mp4' type='video/mp4' id="attractions-video">
</div>
        </div>

        <div class="get-tickets-button">
            <a class='get-tickets-text'>Get Tickets</a>
        </div>

        <div class="mobile-attraction-title">
            <p class="mobile-attraction-heading">The Pirate's Plague</p>
        </div>
        <div class="pirates-plague-container">
            <div class="border-container">
                <div class="inner-hero">
                    <h2 class="attraction-heading">The Pirate's Plague</h2>
                    <p class="attraction-text">An unholy plague has infested this undead pirate crew, and they don't want treasure...they want terror!
                    </p>

                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt'>Read More</a>
                    </div>
                </div>
            </div>
            <div class="mobile-arrow-container">
                <img src='/wp-content/uploads/2022/09/arrow.png' class="mobile-arrow">
            </div>
        </div>

        <div class="mobile-attraction-title">
            <p class="mobile-attraction-heading">Shady Acres Asylum</p>
        </div>
        <div class="shady-acres-asylum-container">
            <div class="border-container-alt">
                <div class="inner-hero">
                    <h2 class="attraction-heading">Shady Acres Asylum</h2>
                    <p class="attraction-text">Will you survive or, like the previous “patients” who lost their minds, will you succumb to its insanity?</p>

                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt'>Read More</a>
                    </div>
                </div>
            </div>
            <div class="mobile-arrow-container">
                <img src='/wp-content/uploads/2022/09/arrow.png' class="mobile-arrow">
            </div>
        </div>

        <div class="mobile-attraction-title">
            <p class="mobile-attraction-heading">WE'RE ALL MAD HERE</p>
        </div>
        <div class="all-mad-here-container">
            <div class="border-container">
                <div class="inner-hero">
                    <h2 class="attraction-heading">WE'RE ALL MAD HERE</h2>
                    <p class="attraction-text">Follow Alice down the rabbit hole of horror...and pray you return unscathed.</p>

                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt'>Read More</a>
                    </div>

                </div>
            </div>

            <div class="mobile-arrow-container">
                <img src='/wp-content/uploads/2022/09/arrow.png' class="mobile-arrow">
            </div>

        </div>

        <div class="mobile-attraction-title">
            <p class="mobile-attraction-heading">Axe Throwing</p>
        </div>
        <div class="axe-throwing-container">
            <div class="border-container-alt">
                <div class="inner-hero">
                    <h2 class="attraction-heading">Axe Throwing</h2>
                    <p class="attraction-text">Where else are you actually encouraged to play with sharp objects? Come split some timber at Terror In the Corn.
<br>
<br>
<a class='special-text' href='https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055'> (Not included in price; CLICK HERE to purchase Axe Throwing tickets in advance.)</a></p>

                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt'>Read More</a>
                    </div>
                </div>
            </div>
            <div class="mobile-arrow-container">
                <img src='/wp-content/uploads/2022/09/arrow.png' class="mobile-arrow">
            </div>
        </div>

        <div class="mobile-attraction-title">
            <p class="mobile-attraction-heading">Escape Room</p>
        </div>
        <div class="escape-room-container">
            <div class="border-container">
                <div class="inner-hero">
                    <h2 class="attraction-heading">Escape Room</h2>
                    <p class="attraction-text">Choose your Escape Room experience and see if you can make it out alive before your time runs out!
                    <a class='special-text' href='https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055'> (Not included in price; CLICK HERE to purchase Axe Throwing tickets in advance.)</a>
                    </p>

                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt'>Read More</a>
                    </div>
                </div>
            </div>

            <div class="mobile-arrow-container">
                <img src='/wp-content/uploads/2022/09/arrow.png' class="mobile-arrow">
            </div>
        </div>

        <div class="mobile-attraction-title">
            <p class="mobile-attraction-heading">Zombie Gellyball Shootout</p>
        </div>
        <div class="zombie-paintball-container">
            <div class="border-container-alt">
                <div class="inner-hero" id="zb-hero">
                    <h2 class="attraction-heading">Zombie Gellyaball Shootout</h2>
                    <p class="attraction-text">Shoot live zombies and save the day! Can you handle the walking dead before they attack? 
                    <a class='special-text' href='https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055'> (Not included in price; CLICK HERE to purchase Axe Throwing tickets in advance.)</a>
                    </p>

                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt'>Read More</a>
                    </div>
                </div>
            </div>

            <div class="mobile-arrow-container">
                <img src='/wp-content/uploads/2022/09/arrow.png' class="mobile-arrow">
            </div>
        </div>

        <div class="mobile-attraction-title">
            <p class="mobile-attraction-heading">Midway Area</p>
        </div>
        <div class="midway-container">
            <div class="border-container">
                <div class="inner-hero">
                    <h2 class="attraction-heading">Midway Area</h2>
                    <p class="attraction-text">In addition to the three haunted attractions included in your ticket price, plus the Zombie GellyBall, Escape Room, and Axe Throwing (for additional fees), there’s much more to see and do at Terror In the Corn!</p>


                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt'>Read More</a>
                    </div>
                </div>
            </div>
            <div class="mobile-arrow-container">
                <img src='/wp-content/uploads/2022/09/arrow.png' class="mobile-arrow">
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
                    <a href='https://www.tucsonterrorinthecorn.com/' target='_blank'><img src='/wp-content/uploads/2022/09/Buckelew-Farm.png' class="bf-logos" id="buckelew-farm"></a>
                    <a href='https://www.buckelewfarm.com/'> <img  src=/wp-content/uploads/2022/09/titc-logo.png class="bf-logos" id="titc"></a>
                    <a href='https://www.buckelewfireworks.com/'> <img src='/wp-content/uploads/2022/09/Fireworks-Stands.png' class="bf-logos" id="fireworks-stands"></a>
                    <a href='https://www.buckelewchristmastrees.com/'> <img src='/wp-content/uploads/2022/09/BuckelewFarm-ChristmasTrees-Logo.png' class="bf-logos" id="christmas-tree-lots"></a>
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