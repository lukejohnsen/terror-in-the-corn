<?php /* Template Name: FAQs */ ?>
<?php  get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/faq.css" />
</head>

<body>
<div class="header">

    <div class="titc-logo-container">
        <img class="titc-logo" src="/wp-content/uploads/2022/09/titc-logo.png">
    </div>

    <div class="full-nav">
        <div class="social-media-nav">
            <a class="social-media-links" href='https://twitter.com/terror1nthecorn' target='_blank'><img
                    id='twitter-image' src="/wp-content/uploads/2022/09/1.png"></a>
            <a class="social-media-links" href='https://www.facebook.com/Terror1ntheCorn' target='_blank'><img
                    id='facebook-image' src="/wp-content/uploads/2022/09/2.png"></a>
            <a class="social-media-links" href='https://www.instagram.com/terrorinthecorn/' target='_blank'><img
                    id='instagram-image' src="/wp-content/uploads/2022/09/3.png"></a>
            <a class="social-media-links" href='https://www.youtube.com/channel/UCOWtPHUlsHzmc2giMJTCHTQ'
                target='_blank'><img id='youtube-image' src="/wp-content/uploads/2022/09/5.png"></a>
            <a class="social-media-links" href='https://www.tiktok.com/@tucsonterrorinthecorn' target='_blank'><img
                    id='tiktok-image' src="/wp-content/uploads/2022/09/4.png"></a>
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

<div class="faq-container">
    <div class="faq-hero">
        <div class="blur-container">
            <h2 class="faq-heading">faq</h2>
            <p class="faq-text">Need more info on dates, directions, or other details, we've tried to answer your
                Terror In the Corn related questions here.</p>
        </div>
    </div>

    <div class='faq-accordion'>
        <div class="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        FAQ <p class='faq-text'>What is Terror In the Corn exactly?</p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        Sure, you've been to a “haunted house” - but can you imagine the frightening possibilities of a
                        haunted cornfield? Tucson’s Terror In the Corn is Southern Arizona’s scariest and most unique
                        Halloween attraction - a variety of “haunts” and Halloween fun all connected by a totally
                        immersive and terrifying cornfield. When darkness falls and the moon comes out, so do the
                        scares, screams and surrounding terror!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        FAQ <p class='faq-text'>When is Terror In the Corn open and what are the hours of operation?</p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        Our haunted attraction starts on Friday 9/30 and, weather permitting, is open weekend nights
                        throughout October, as well as Halloween night and special Thursday and Sunday night events as
                        well. Weekend nights we stay open until midnight and weeknights (including Halloween night) we
                        close at 10pm.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFour">
                        FAQ <p class='faq-text'>How much does Terror In the Corn cost?</p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body">
                        CLICK HERE for ticket prices and admission information. Unless advertised, there are no
                        discounts for children or any other groups at this time - all tickets are the same price.
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFive">
                        FAQ <p class='faq-text'>Do you accept credit cards?</p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingFive">
                    <div class="accordion-body">
                        Yes. We accept Visa & Mastercard. Purchase your tickets online by CLICKING HERE.
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseSeven">
                        FAQ <p class='faq-text'>Do you charge for parking?</p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingSeven">
                    <div class="accordion-body">
                        General parking is free. We do have VIP parking that gets you closer to the gate, for $10 per
                        car.
                    </div>
                </div>
</div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            FAQ <p class='faq-text'>What is Terror In the Corn exactly?</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            Sure, you've been to a “haunted house” - but can you imagine the frightening possibilities
                            of a haunted cornfield? Tucson’s Terror In the Corn is Southern Arizona’s scariest and most
                            unique Halloween attraction - a variety of “haunts” and Halloween fun all connected by a
                            totally immersive and terrifying cornfield. When darkness falls and the moon comes out, so
                            do the scares, screams and surrounding terror!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            FAQ <p class='faq-text'>When is Terror In the Corn open and what are the hours of operation?
                            </p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            Our haunted attraction starts on Friday 9/30 and, weather permitting, is open weekend nights
                            throughout October, as well as Halloween night and special Thursday and Sunday night events
                            as well. Weekend nights we stay open until midnight and weeknights (including Halloween
                            night) we close at 10pm.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFour">
                            FAQ <p class='faq-text'>How much does Terror In the Corn cost?</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            CLICK HERE for ticket prices and admission information. Unless advertised, there are no
                            discounts for children or any other groups at this time - all tickets are the same price.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFive">
                            FAQ <p class='faq-text'>Do you accept credit cards?</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body">
                            Yes. We accept Visa & Mastercard. Purchase your tickets online by CLICKING HERE.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSeven">
                            FAQ <p class='faq-text'>Do you charge for parking?</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingSeven">
                        <div class="accordion-body">
                            General parking is free. We do have VIP parking that gets you closer to the gate, for $10
                            per car.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEight">
                            FAQ <p class='faq-text'>Do you offer refunds?</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingEight">
                        <div class="accordion-body">
                            No. Terror in the Corn tickets are non-refundable for any reason and will not be replaced if
                            lost, stolen or unused.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseNine">
                            FAQ <p class='faq-text'>Do I need to print my tickets at home</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingNine">
                        <div class="accordion-body">
                            To prevent people gathering, adhere to social distancing concerns and keep the lines moving,
                            we strongly recommend printing out your tickets prior to showing up. However, if you do have
                            a smartphone, we are able to scan the tickets from your phone.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTen">
                            FAQ <p class='faq-text'>How many times can I go through the haunted attractions at Terror In
                                the Corn?</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTen">
                        <div class="accordion-body">
                            Each ticket is good for one (1) person and grants access to each of three (3) haunted
                            attractions within Terror In the Corn one time. One time through per customer. If you’d like
                            to experience the haunted attractions again, you will have to purchase another ticket.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTen">
                            FAQ <p class='faq-text'>Will food and drinks be available at Terror In the Corn?</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTen">
                        <div class="accordion-body">
                            We will have an array of food and drink options available for purchase including hamburgers,
                            hot dogs, popcorn, candy, sodas and more - however as per City of Marana rules for our
                            outdoor event this season, there will not be any alcoholic beverages this year.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEleven">
                            FAQ <p class='faq-text'>Do you sell alcohol at Terror In the Corn?
                            </p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingEleven">
                        <div class="accordion-body">
                            Yes, beer and alcohol sales are back! (Although anything can change - as we must adhere to
                            city ordinances and COVID-related mandates.)
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwelve">
                            FAQ <p class='faq-text'>What if Terror In the Corn is too scary for me?
                            </p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwelve">
                        <div class="accordion-body">
                            Yes, beer and alcohol sales are back! (Although anything can change - as we must adhere to
                            city ordinances and COVID-related mandates.)
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEight">
                            FAQ <p class='faq-text'>Do you offer refunds?</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingEight">
                        <div class="accordion-body">
                            No. Terror in the Corn tickets are non-refundable for any reason and will not be replaced if
                            lost, stolen or unused.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseNine">
                            FAQ <p class='faq-text'>Do I need to print my tickets at home</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingNine">
                        <div class="accordion-body">
                            To prevent people gathering, adhere to social distancing concerns and keep the lines moving,
                            we strongly recommend printing out your tickets prior to showing up. However, if you do have
                            a smartphone, we are able to scan the tickets from your phone.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTen">
                            FAQ <p class='faq-text'>How many times can I go through the haunted attractions at Terror In
                                the Corn?</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTen">
                        <div class="accordion-body">
                            Each ticket is good for one (1) person and grants access to each of three (3) haunted
                            attractions within Terror In the Corn one time. One time through per customer. If you’d like
                            to experience the haunted attractions again, you will have to purchase another ticket.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThirteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThirteen">
                            FAQ <p class='faq-text'>Will food and drinks be available at Terror In the Corn?</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThirteen">
                        <div class="accordion-body">
                            We will have an array of food and drink options available for purchase including hamburgers,
                            hot dogs, popcorn, candy, sodas and more - however as per City of Marana rules for our
                            outdoor event this season, there will not be any alcoholic beverages this year.
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseEleven">
                            FAQ <p class='faq-text'>Do you sell alcohol at Terror In the Corn?
                            </p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingEleven">
                        <div class="accordion-body">
                            Yes, beer and alcohol sales are back! (Although anything can change - as we must adhere to
                            city ordinances and COVID-related mandates.)
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwelve">
                            FAQ <p class='faq-text'>What if Terror In the Corn is too scary for me?
                            </p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwelve">
                        <div class="accordion-body">
                            <p class=faq-text'>Yes, beer and alcohol sales are back! (Although anything can change - as
                                we must adhere to city ordinances and COVID-related mandates.)</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFourteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFourteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFourteen">
                            FAQ <p class='faq-text'>Is there an age limit at Terror In the Corn?
                            </p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFourteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFourteen">
                        <div class="accordion-body">
                            While our attraction is for all ages, due to the graphic nature of the content, Terror In
                            the Corn is not recommended for small children, toddlers or babies. Children 12 years and
                            under WILL NOT be admitted without an adult and parental discretion is strongly advised. A
                            good rule of thumb is: if you wouldn't bring your child to a horror film or a PG-13 rated
                            movie, it's probably not a good idea to bring them to Terror In the Corn.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFifteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFifteen" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFifteen">
                            FAQ <p class='faq-text'>Is Terror In the Corn appropriate for everyone?
                            </p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFifteen" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFifteen">
                        <div class="accordion-body">
                            No, Terror In The Corn isn't for everyone! Please be aware that there WILL be continuous
                            scares, bright lights, loud noises, lasers, smoke, screams and related stimuli. Pregnant
                            women or those suffering from anxiety, heart conditions, sensitivity to light or sound, or
                            suffering from any condition that is not conducive to experiencing a haunted house are urged
                            to avoid Terror In the Corn.
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSixteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSixteen" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseSixteen">
                        FAQ <p class='faq-text'>How long is the expected wait in line?
                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSixteen" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingSixteen">
                    <div class="accordion-body">
                        It depends. We appreciate your patience this year as we all adjust for COVID-related safety
                        concerns and social distancing. The more people at the attraction, the longer the wait times. As
                        it gets closer to Halloween, specifically on Friday and Saturday nights, the wait can be longer.
                        The closer you come to opening time (6:00 pm) the shorter the wait, typically. We do offer a
                        Fast Pass, however, that allows you to “skip the line” and is typically a much shorter wait, if
                        any.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSeventeen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSeventeen" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseSeventeen">
                        FAQ <p class='faq-text'>Is Terror In the Corn handicap accessible?
                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSeventeen" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingSeventeen">
                    <div class="accordion-body">
                        While we can and will work to accommodate all guests, no, Terror In the Corn is an outdoor event
                        built into and around the natural terrain, so it is NOT handicap accessible at this time. Our
                        attraction does include uneven grounds, small loose obstacles in the corn field, natural
                        landscape like trees, corn and rocks and dark, tight spaces that can affect the experience for
                        some customers throughout Terror in the Corn.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingEighteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseEighteen" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseEighteen">
                        FAQ <p class='faq-text'>Will there be strobe lights, fog, lasers, black lights, etc. in the
                            Terror In the Corn?
                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseEighteen" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingEighteen">
                    <div class="accordion-body">
                        Yes. All of these are included throughout the entire attraction. Our event is not recommended
                        for people that have epilepsy, asthma, heart issues and related health concerns. We strongly
                        recommend that pregnant women do not go through the haunted attractions. You can always ask your
                        physician if Terror In the Corn is okay for you, but please use good judgement and do what’s
                        best for you. Safety is a primary concern of ours and we don't want anyone to get hurt. </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingNineteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseNineteen" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseNineteen">
                        FAQ <p class='faq-text'>What should I wear to the Terror in the Corn?

                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseNineteen" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingNineteen">
                    <div class="accordion-body">
                        Keep in mind that Terror in the Corn is in an outdoor environment and built through an actual
                        cornfield with natural elements like weather and terrain. We recommend no flip-flops, sandals or
                        open-toed shoes and strongly urge that guests wear sneakers, boots or close-toed shoes.
                        Depending on weather or your own comfortability, we recommend clothing or footwear based on the
                        above information and current weather conditions.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwenty">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwenty" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwenty">
                        FAQ <p class='faq-text'>Will the actors or “scarers” touch us, or can we touch the actors?

                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwenty" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwenty">
                    <div class="accordion-body">
                        No. Actors will not touch you. Please be respectful and do not touch them either. Incidental and
                        unintentional contact may occur, but we will do our best to maintain a safe distance and adhere
                        to current distancing measures.error in the Corn is in an outdoor environment and built through
                        an actual cornfield with natural elements like weather and terrain. We recommend no flip-flops,
                        sandals or open-toed shoes and strongly urge that guests wear sneakers, boots or close-toed
                        shoes. Depending on weather or your own comfortability, we recommend clothing or footwear based
                        on the above information and current weather conditions.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwentyOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwentyOne" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwentyOne">
                        FAQ <p class='faq-text'>Will Terror In the Corn be open if it’s raining?

                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwentyOne" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwentyOne">
                    <div class="accordion-body">
                        We will stay open if there is a light sprinkle, as light rain does not affect the attraction,
                        however, if there are severe storms or lightning we may be forced to close due to mud in the
                        fields or weather-related safety issues. We will update our Facebook page with weather
                        information, as needed, but it is very rare that we have to close the event due to inclement
                        weather. If we do have to close early due to inclement weather, your purchased ticket will be
                        valid on a future night - the only exception to our no refund policy. </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwentyTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwentyTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwentyTwo">
                        FAQ <p class='faq-text'>Can we be denied access to Terror In the Corn?

                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwentyTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwentyTwo">
                    <div class="accordion-body">
                        Yes. We will not allow any threatening or foul language, fighting or violence of any kind,
                        obscene gestures or behavior, or any weapons, alcohol, drugs or related contraband. We reserve
                        the right to refuse admittance or remove anyone we deem us undesirable, who is affecting the
                        experience for other patrons or who may be in violation of our rules in any way. Refunds will
                        not be given to those who have been removed or who’ve been asked to leave for the aforementioned
                        reasons. Please be smart, stay safe and have fun.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwentyThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwentyThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwentyThree">
                        FAQ <p class='faq-text'>Is there security on site at Terror In the Corn?

                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwentyThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwentyThree">
                    <div class="accordion-body">
                        Yes. We will have security on site at Terror in the Corn and on most busy nights there are
                        police officers at the event. </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwentyFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwentyFour" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwentyFour">
                        FAQ <p class='faq-text'>Do you have a lost and found?

                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwentyFour" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwentyFour">
                    <div class="accordion-body">
                        While Terror In the Corn is not responsible for any lost items under any circumstances, any
                        items we do find will be collected and kept in our Lost & Found. While we make no guarantees
                        that your item will be found, if you’ve lost an item please contact a staff member on site
                        or email us at info@tucsonterrorinthecorn.com, and we will do our best to help you locate
                        it.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwentyFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwentyFive" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwentyFive">
                        FAQ <p class='faq-text'>Can we have a group, corporate event, private party or custom event
                            at Terror In the Corn?

                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwentyFive" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwentyFive">
                    <div class="accordion-body">
                        Yes. We love private groups! For available dates and details, please email
                        info@tucsonterrorinthecorn.com with your questions or any information you’d like answered,
                        and any pricing or personalization of your private event, and we will do our best to respond
                        promptly.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwentySix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwentySix" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwentySix">
                        FAQ <p class='faq-text'>For media-related needs, sponsorship questions or articles/stories
                            on Terror In the Corn, who should I contact?

                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwentySix" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwentySix">
                    <div class="accordion-body">
                        For any non-guest related issues, information or ideas, please email us
                        info@tucsonterrorinthecorn.com and we will do our best to respond quickly.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwentySeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwentySeven" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwentySeven">
                        FAQ <p class='faq-text'>I want to work at Terror In the Corn - how do I apply?

                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwentySeven" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwentySeven">
                    <div class="accordion-body">
                        Please visit our jobs link HERE for details and information on working for Terror In the
                        Corn.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwentySeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwentySeven" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwentySeven">
                        FAQ <p class='faq-text'>I still have questions! How do I contact you?

                        </p>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwentySeven" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwentySeven">
                    <div class="accordion-body">
                        Please email us at info@tucsonterrorinthecorn.com or call us at (520) 307-1405 and leave us
                        a message, but please note that due to the large volume of calls we receive, email is the
                        ideal way to get a hold of us or messaging us via our Facebook page by CLICKING HERE.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class='button-container'>
<div class="get-tickets-button">
    <a class='get-tickets-text'>Get Tickets</a>
</div>
</div>



<div class="footer">
    <div class="mailing-list-section">
        <div class="ads-container">
            <div class="ads-section">
                <a href='https://www.tucsonhauntedhouses.com/' target="_blank"><img
                        src="/wp-content/uploads/2022/09/Rate-Our-Haunt-1.png" class="hh-ads" /></a>
                <a href='https://www.azhauntedhouses.com/' target="_blank"> <img
                        src="/wp-content/uploads/2022/09/AZ-Haunted-Houses-1.png" class="hh-ads" /></a>
                <a href='https://www.haunts.com/' target="_blank"><img src="/wp-content/uploads/2022/09/Haunts-1.png"
                        class="hh-ads"></a>
                <a href='https://www.hauntedcornmazes.com/' target="_blank"><img
                        src="/wp-content/uploads/2022/09/Haunted-Corn-Mazes-1.png" class="hh-ads" /></a>
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
                <li id="buckelew-farm">Buckelew Farm</li>
                <li id="titc">Terror in the Corn</li>
                <li id="fireworks-stands">Fireworks Stands</li>
                <li id="christmas-tree-lots">Christmas Tree Lots</li>
            </ul>
            <p id="contact-info"> I-10 & Tangerine Exit 240 • 9312 W Rillito Village Trail Tucson, AZ 85653 • <a
                    href="/" id="email-address">info@buckelewfarm.com</a></p>
        </div>

        <div class="mobile-social-media-nav">
            <a href='https://tucsonterrorinthecorn.com/' target='_blank'><img
                    src='/wp-content/uploads/2022/09/Buckelew-Farm.png' class="bf-logos" id="buckelew-farm"></a>
            <a href='https://www.buckelewfarm.com/' target='_blank'><img src='/wp-content/uploads/2022/09/titc-logo.png'
                    class="bf-logos" id="titc"></a>
            <a href='https://buckelewfireworks.com/' target='_blank'><img
                    src='/wp-content/uploads/2022/09/Fireworks-Stands.png' class="bf-logos" id="fireworks-stands"></a>
            <a href='https://buckelewchristmastrees.com/' target='_blank'><img
                    src='/wp-content/uploads/2022/09/BuckelewFarm-ChristmasTrees-Logo.png' class="bf-logos"
                    id="christmas-tree-lots"></a>
        </div>
    </div>

    <div class='gjj-footer'>
        <img src="/wp-content/uploads/2022/09/GoodJuJu-Bloody.png" id="gjj-logo">
    </div>
</div>
</body>

</html>