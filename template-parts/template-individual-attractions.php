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
</head>

<body>
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

<?php 
$wp_query;
$postid = get_the_ID(); 
$post = get_post($postid);
$posttitle = get_post_meta($postid, 'title', true);
$posthero = get_post_meta($postid, 'hero', true);
$postdes = get_post_meta($postid, 'des', true);
$postpricing1 = get_post_meta($postid, 'pricing', true);
$postpricing2 = get_post_meta($postid, 'pricing_2', true);


;?>



    <div class="attraction-info-container">
    <div class="hero-container" style= "background: url('<?php the_field('hero_image', $postid); ?>')" >
            <div class='blur-container'>
            <h2 class="hero-title">Tucson Terror in the Corn</h2>
            <p class="hero-text">Voted Tucson’s best haunted attraction for over a decade, Terror In the Corn is Southern Arizona’s scariest and most unique Halloween experience. <?php echo ($postimage) ?></p>
</div>
        </div>

        <div class="get-tickets-button">
            <a class='get-tickets-text' href='https://tucsonterrorinthecorn.fearticket.com/event/orderticket/eventid/1055' target='_blank'>Get Tickets</a>
        </div>

        <div class="sub-hero">
            <p class="sub-hero-text"><?php echo ($postdes); ?></p>
                
        </div>

        <div class="info-container">
            <div class="pricing-container">
                <h2 class="heading">Pricing</h2>
                <p class="info-text">
                    <?php echo ($postpricing1); ?>
                    <br>
                    <?php echo ($postpricing2); ?>
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
            <h3 class="sponsors-text">Terror In the Corn is a locally owned and operated small business and couldn't happen without support from our community and other businesses in town. Thank you!</h3>



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
<a href='https://www.buckelewfarm.com/' target='_blank'><img src='/wp-content/uploads/2022/09/Buckelew-Farm.png' class="bf-logos" id="buckelew-farm"></a>
                    <a href='https://tucsonterrorinthecorn.com/' target='_blank'><img  src='/wp-content/uploads/2022/09/titc-logo.png' class="bf-logos" id="titc"></a>
                    <a href='https://buckelewfireworks.com/' target='_blank'><img src='/wp-content/uploads/2022/09/Fireworks-Stands.png' class="bf-logos" id="fireworks-stands"></a>
                    <a href='https://buckelewchristmastrees.com/' target='_blank'><img src='/wp-content/uploads/2022/09/BuckelewFarm-ChristmasTrees-Logo.png' class="bf-logos" id="christmas-tree-lots"></a>
                </ul>
                <p id="contact-info"> I-10 & Tangerine Exit 240 • 9312 W Rillito Village Trail, Marana, AZ 85653 • <a
                        href="mailto:info@tucsonterrorinthecorn.com" id="email-address">info@tucsonterrorinthecorn.com</a></p>
            </div>

            <div class="mobile-social-media-nav">
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
</body>

</html>