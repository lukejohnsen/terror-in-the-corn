<?php /* Template Name: Jobs */ ?>
<?php  get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../css/jobs.css'>
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
                <ul class="nav-links-container">
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

    <div class="jobs-container">
        <div class="jobs-hero">
            <div class="blur-container">
                <h2 class="jobs-heading">jobs</h2>
                <p class="jobs-text">Join our Scare Squad! We're hiring for performance and non-performance roles to
                    help us all October!</p>
            </div>
        </div>

        <div class="opportunities-container">
            <h2 class="opportunities-heading">Employment Opportunities</h2>
            <p class="opportunities-text">Do you love Halloween? Do you like dressing up as a monster, creature, or
                scary
                character? Do you enjoy scaring the sh*t out of people for fun? Do you like performing and being part of
                the show? Do you want to work outside in a fun, fast-paced environment?
                <br>
                <br>
                If you answered YES to any of these questions, we want you to help us this Halloween season!
                <br>
                <br>
                Terror In the Corn is looking to fill a variety of positions for the upcoming season. Ideal applicants
                are hard working, happy, enthusiastic, energetic, outgoing, drama-free, fun, reliable, and responsible
                people who enjoy scaring people and are not afraid of performing in front of strangers.
                <br>
                <br>
                All candidates must be physically fit, be able to stay on-site for their entire shift and be able to
                stay on-task for the duration of each performance. Most importantly - you must be available for all
                Fridays & Saturdays in October from open to close, plus designated Thursdays, Sundays and on Halloween
                night. APPLY VIA OUR FORM BELOW!
            </p>
        </div>

        <div class="job-description-container">
            <h2 class="job-description-heading">Job Description Destails</h2>

            <div class="bullets-container">
                <div class="bullets-left">
                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Terror in the Corn is hiring for a variety of positions @ $15/hour</p>
                    </div>

                    <br>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">We need people for the following positions:
                        </p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Scare Squad (costumed actors)</p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">GellyBall "Zombies" (can earn tips!)</p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Prop Activators</p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Custodians</p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Maintinence</p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Security</p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Parking Attendants</p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Front Gate / Greeters</p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Salespeople / Support Staff</p>
                    </div>

                    <br>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Must be 16 years or older
                        </p>
                    </div>

                    <br>
                </div>

                <div class="bullets-right">
                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Must have reliable transportation</p>
                    </div>

                    <br>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Must be able to work every night we’re open without exception</p>
                    </div>

                    <br>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Must be available for virtual/online job interview after submitting application below. </p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Must provide two (2) valid forms of ID prior to interview. (Required for employment; see list of acceptable documents HERE.)</p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Those without valid ID & required paperwork will not be interviewed.</p>
                    </div>

                    <br>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Job Fair for Terror In the Corn's Scare Squad to be held at Barnfire Mesquite Grill (8310 N Thornydale Rd, Tucson, AZ 85741) on Saturday August 27th from 9am - 1pm.
                        </p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Must provide two (2) valid forms of ID prior to interview. (Required for employment; see list of acceptable documents HERE.)</p>
                    </div>

                    <br>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Mandatory Scare Squad costume fitting on Saturday September 24, 2022 at 9am @ Terror In the Corn location (I-10 & Tangerine Rd, Exit 240)</p>
                    </div>

                    <br>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Actors will be assigned a time to arrive to accommodate social distancing; exact interview times TBD and applicants will be notified by phone.</p>
                    </div>

                    <br>
                </div>
            </div>
        </div>

        <div class="apply-button-container">
            <a class="apply-button">Apply</a>
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