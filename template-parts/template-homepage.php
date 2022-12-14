<?php /* Template Name: Home */ ?>
<?php  get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../css/homepage.css'>
	<script>
		function toggleMenu() {
		  var x = document.getElementById("mobile-nav-list");
		  if (x.style.display === "block") {
			x.style.display = "none";
		  } else {
			x.style.display = "block";
		  }
		}
	</script>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-556H7HX');</script>
<!-- End Google Tag Manager -->

<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-556H7HX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	<div class='shader'>
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
                <img src="/wp-content/uploads/2022/09/mobile-hamburger.png" style="width: 75px;" id="nav-hamburger" onclick="toggleMenu()">
				<div id="mobile-nav-list" style="display: none;">
					<?php
				wp_nav_menu( 
        array( 
            'theme_location' => 'my-custom-menu'
        ) 
    );
					?>
				</div>
            </div>
        </div>
</div>

    <div class="homepage">

    <script>
        $('.autoplay').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
    </script>

    <?php

$images = get_field('hero_images');

if( $images ): 

foreach( $images as $image ):
?>

        <div class="hero-container autoplay" style= "background: url('<?php echo $image['url']; ?>')">

            <div class='blur-container'>
            <h2 class="hero-title">Tucson Terror in the Corn</h2>
            <p class="hero-text">Voted Tucson???s best haunted attraction for over a decade, Terror In the Corn is Southern Arizona???s scariest and most unique Halloween experience.</p>
</div>
        </div>

        <? endforeach; endif; ?>

        <div class="sub-hero-container">
            <div class="blood-dot-container">
                <img src="/wp-content/uploads/2022/09/Blood-dot.png" class="blood-dots-alt">
                <img src="/wp-content/uploads/2022/09/Blood-dot.png" class="blood-dots">
                <img src="/wp-content/uploads/2022/09/Blood-dot.png" class="blood-dots">
                <img src="/wp-content/uploads/2022/09/Blood-dot.png" class="blood-dots">
            </div>

            <p class="sub-hero-text">With all new attractions, updated scenes, more scares and a new location closer to
                town on Tangerine & I-10, Terror In the Corn is gearing up for the greatest, most ghastly Halloween yet!
            </p>
         
            <a href="https://tucsonterrorinthecorn.fearticket.com" target='_blank' class='fear-ticket-container'> <img class='fear-ticket-image' src="https://cdne1.fearticket.com/includes/images/fearticket/buyticket_hor.jpg" alt="Buy Ticket" /> </a>
           
        </div>

        <div class="video-container">
        <video controls class="homepage-video" src="/wp-content/uploads/2022/09/TITC-Homepage-Video.mp4" type='video/mp4' id="hompage-video">  
        </div>

        <div class="calendar-location-container">
            <img src="/wp-content/uploads/2022/09/farm.png" class="bg-farm">

            <div class="calendar-location-text">
                <h2 class="calendar-location-heading">Calendar and Location</h2>
                <h2 class="mobile-calendar-location-heading">Calendar</h2>
                <div class="get-tickets-button">
                    <a class='get-tickets-text' href='https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055' target='_blank'>Get Tickets</a>
                </div>
                <h3 class="hours-text">Open weekend nights in October + Halloween
                    <br>Hours: 6pm - Midnight*
                </h3>
                <h4 class="hours-sub-text">Closes at 10pm on OCT. 6, 13, 20, 27 & 31</h4>
            </div>

            <div class="calendar-location-visuals">
                <a class='calendar-visual' href='https://tucsonterrorinthecorn.com/dates-and-prices-html/'> <img src="/wp-content/uploads/2022/09/TITC-Calendar-2022-wDiscounts.png" class="calendar-visual"></a>
                <h2 class="mobile-calendar-location-heading">Location</h2>
                <a class='map-visual' href='https://tucsonterrorinthecorn.com/location-html/'><img src="/wp-content/uploads/2022/09/map.png" class="map-visual"></a>
            </div>

            <img src="/wp-content/uploads/2022/09/scarecrow.png" class="bg-scarecrow">
        </div>

        <div class="attractions-container">
            <div class="get-tickets-button">
                <a class='get-tickets-text' href='https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055' target='_blank'>Get Tickets</a>
            </div>
            <h2 class="attractions-heading">Attractions</h2>
            <div class="attractions-cards-container">
                <div class="attractions-card" id="field-screams-card">
                    <h3 class="attractions-title">The Pirate's Plague</h3>
                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt' href='https://tucsonterrorinthecorn.com/attractions/the-pirates-plague/'>Learn More</a>
                    </div>
                </div>

                <div class="attractions-card-alt" id="shady-acres-card">
                    <h3 class="attractions-title">Shady Acres Asylum</h3>
                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt' href='https://tucsonterrorinthecorn.com/attractions/shady-acres-asylum/'>Learn More</a>
                    </div>
                </div>

                <div class="attractions-card" id="circus-horror-card">
                    <h3 class="attractions-title">We're All Mad Here</h3>
                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt' href='https://tucsonterrorinthecorn.com/attractions/were-all-mad-here/'>Learn More</a>
                    </div>
                </div>

                <div class="attractions-card-alt" id="axe-throwing-card">
                    <h3 class="attractions-title">Axe Throwing</h3>
                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt' href='https://tucsonterrorinthecorn.com/attractions/axe-throwing/'>Learn More</a>
                    </div>
                </div>

                <div class="attractions-card" id="escape-room-card">
                    <h3 class="attractions-title">Escape Room</h3>
                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt' href='https://tucsonterrorinthecorn.com/attractions/escape-room/'>Learn More</a>
                    </div>
                </div>

                <div class="attractions-card-alt" id="zombie-paintball-card">
                    <h3 class="attractions-title" id="zombie-text">Zombie Shootout</h3>
                    <div class="get-tickets-button-alt">
                        <a class='get-tickets-text-alt' href='https://tucsonterrorinthecorn.com/attractions/zombie-shootout/'>Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sponsors-container">
            <img src="/wp-content/uploads/2022/09/tools.png" class="bg-tools">

            <h2 class="sponsors-heading">Sponsors</h2>
            <h3 class="sponsors-text">Terror In the Corn is a locally owned and operated small business and couldn't happen without support from our community and other businesses in town. Thank you!</h3>



            <div class="sponsor-logos-container">
                <div class="top-level-sponsors">
                    <img src="/wp-content/uploads/2022/09/HSL-logo.png" id="hsl-logo" class="premier-row">
                    <img src="/wp-content/uploads/2022/09/CTI-logo.png" id="cti-logo" class="premier-row">
                </div>
                <div class="level-1-sponsors">
                    <img src="/wp-content/uploads/2022/09/Dusk-logo.png" id="dusk-logo" class="top-row">
                    <img src="/wp-content/uploads/2022/09/Depaendable-Health-Services-Logo.png" id="dependable-health-services-logo" class="top-row">
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
                <h3 id="mailing-list-instructions">Subscribe to be a part of all the holiday happenings!</h3>
                <input type="text" id="email-input" placeholder='Email'>
                <p id="mailing-list-disclaimer">By submitting this form you agree to receive marketing emails from
                    Terror in the Corn. Don???t worry, you can unsubscribe at any time.</p>
                <div class="subscribe-button-container">
                    <a class="subscribe-button">Subscribe</a>
                </div>
            </div>
        </div>

        <div class="universal-section">
            <div class='buckelew-links-container'>
                <ul class="buckelew-links-list">
<a href='https://www.buckelewfarm.com/' target='_blank'><img src='/wp-content/uploads/2022/09/Buckelew-Farm.png' class="bf-logos" id="buckelew-farm"></a>
                    <a href='https://tucsonterrorinthecorn.com/' target='_blank'><img  src='/wp-content/uploads/2022/09/titc-logo.png' class="bf-logos" id="titc"></a>
                    <a href='https://buckelewfireworks.com/' target='_blank'><img src='/wp-content/uploads/2022/09/Fireworks-Stands.png' class="bf-logos" id="fireworks-stands"></a>
                    <a href='https://buckelewchristmastrees.com/' target='_blank'><img src='/wp-content/uploads/2022/09/BuckelewFarm-ChristmasTrees-Logo.png' class="bf-logos" id="christmas-tree-lots"></a>
                </ul>
                <p id="contact-info"> I-10 & Tangerine Exit 240 ??? 9312 W Rillito Village Trail, Marana, AZ 85653 ??? <a
                        href="mailto:info@tucsonterrorinthecorn.com" id="email-address">info@tucsonterrorinthecorn.com</a></p>
            </div>

            <div class="social-media-nav-footer">
                <a class="social-media-links" href='https://twitter.com/terror1nthecorn' target='_blank'><img id='twitter-image' src="/wp-content/uploads/2022/09/1.png"></a>
                <a class="social-media-links" href='https://www.facebook.com/Terror1ntheCorn' target='_blank'><img id='facebook-image' src="/wp-content/uploads/2022/09/2.png"></a>
                <a class="social-media-links" href='https://www.instagram.com/terrorinthecorn/' target='_blank'><img id='instagram-image' src="/wp-content/uploads/2022/09/3.png"></a>
                <a class="social-media-links" href='https://www.youtube.com/channel/UCOWtPHUlsHzmc2giMJTCHTQ' target='_blank'><img id='youtube-image' src="/wp-content/uploads/2022/09/5.png"></a>
                <a class="social-media-links" href='https://www.tiktok.com/@tucsonterrorinthecorn' target='_blank'><img id='tiktok-image' src="/wp-content/uploads/2022/09/4.png"></a>
            </div>
        </div>

        <div class='gjj-footer'>
            <a class='gjj-footer' href='https://goodjujuagency.com/' target='_blank'><img src="/wp-content/uploads/2022/09/made-with-good-juju.png" id="gjj-logo"></a>
        </div>
    </div>
		</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
</body>

</html>