<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css" />
</head>

<body>

    <div class="footer">
        <div class="mailing-list-section">
            <div class="ads-container">
                <div class="ads-section">
                    <img src="../assets/Rate Our Haunt.png" class="hh-ads">
                    <img src="../assets/AZ Haunted Houses.png" class="hh-ads">
                    <img src="../assets/Haunts.png" class="hh-ads">
                    <img src="../assets/Haunted Corn Mazes.png" class="hh-ads">
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
                <!-- <ul class="buckelew-links-list">
                    <li id="buckelew-farm">Buckelew Farm</li>
                    <li id="titc">Terror in the Corn</li>
                    <li id="fireworks-stands">Fireworks Stands</li>
                    <li id="christmas-tree-lots">Christmas Tree Lots</li>
                </ul> -->
                <?php 
    wp_nav_menu( 
        array( 
            'theme_location' => 'my-custom-menu-2'
        ) 
    ); 
?>
                <p id="contact-info"> I-10 & Tangerine Exit 240 • 9312 W Rillito Village Trail Tucson, AZ 85653 • <a
                        href="/" id="email-address">info@buckelewfarm.com</a></p>
            </div>

            <div class="mobile-social-media-nav">
                <img class="social-media-links" src="../assets/social-carousel.png">
                <img class="social-media-links" src="../assets/social-carousel.png">
                <img class="social-media-links" src="../assets/social-carousel.png">
                <img class="social-media-links" src="../assets/social-carousel.png">
                <img class="social-media-links" src="../assets/social-carousel.png">
            </div>
        </div>

        <div class='gjj-footer'>
            <img src="../assets/GoodJuJu-Bloody.png" id="gjj-logo">
        </div>
    </div>
</body>

</html>