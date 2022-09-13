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
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
                <img class="social-media-links" src="/wp-content/uploads/2022/09/social-carousel.png">
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
                    <a id="get-tickets-link">Get Tickets</a>
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

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">We need people for the following positions:
                        </p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Scare Squad (costumed actors)</p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">GellyBall "Zombies" (can earn tips!)</p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Prop Activators</p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Custodians</p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Maintinence</p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Security</p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Parking Attendants</p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Front Gate / Greeters</p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Salespeople / Support Staff</p>
                    </div>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Must be 16 years or older
                        </p>
                    </div>
                </div>

                <div class="bullets-right">
                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Must have reliable transportation</p>
                    </div>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Must be able to work every night we’re open without exception</p>
                    </div>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Must be available for virtual/online job interview after submitting application below. </p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Must provide two (2) valid forms of ID prior to interview. (Required for employment; see list of acceptable documents HERE.)</p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Those without valid ID & required paperwork will not be interviewed.</p>
                    </div>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Job Fair for Terror In the Corn's Scare Squad to be held at Barnfire Mesquite Grill (8310 N Thornydale Rd, Tucson, AZ 85741) on Saturday August 27th from 9am - 1pm.
                        </p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Must provide two (2) valid forms of ID prior to interview. (Required for employment; see list of acceptable documents HERE.)</p>
                    </div>

                    <div class="bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint">
                        <p class="bullet-info">Mandatory Scare Squad costume fitting on Saturday September 24, 2022 at 9am @ Terror In the Corn location (I-10 & Tangerine Rd, Exit 240)</p>
                    </div>

                    <div class="sub-bullet">
                        <img src='/wp-content/uploads/2022/09/fingerprint.png' class="fingerprint-alt">
                        <p class="bullet-info">Actors will be assigned a time to arrive to accommodate social distancing; exact interview times TBD and applicants will be notified by phone.</p>
                    </div>
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