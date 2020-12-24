<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner">
    <div class="container">
    <h1>A Dining Experience</h1>
    </div>
</div>

<div class="home-call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                   <div class="image"></div>
                   <div class="title">Dining Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second ">
                   <div class="image"></div>
                   <div class="title">Lunch Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
                   <div class="image"></div>
                   <div class="title">Functions</div>
                  </a> 
                </div>
            
           
        </div>
    </div>
</div>

<div class="home-welcome">
    <div class="title-holder">
        <div class="container">
            <h2><span>Welcome To</span> The BackBeach Eating House</h2>
            </div>
            </div>
        <div class="container">
      <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-8">
          <p class="tagline">
        There's only one place like the Backbeach Cafe & Restaurant, located on Bunbury's Baclbeach with uninterrupted views of crip white sand and the Indian Ocean. The perfect place to eat, relax and enjoy.
        </p>
        <p>
        We are proud to support local business and local producers by sourcing as much as possible locally, including fish from Augusta, beef and chicken from Western Australia (DBC), coffee from Yallingup and wines from Ferguson Valley, Margaret River and throughout the South West.
        </p>
          </div>
          <div class="col-lg-3">
              <div class="button">
                  Read More <i class="fa fa-chevron-right"></i>
                </div>
          </div>
      </div>
        </div>
    </div>
</div>

<div class="home-news">
        <div class="bg-image"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6">
                <a href="#" class="news-img">
                   <div class="image"></div>
                   <div class="date">Sun 13 May</div>
                   <div class="category">What's On</div>
                   
                </a>
                </div>
                <div class="col-xl-1 d-none d-xl-block"></div>
                <div class="col-md-6">
                    <h2>Mother's Day </h2>
                        <p>
                        Join us to celebrate your mom this Mother;s Day. Breakfast and lunch is pretty full but we're taking dinner reservations so you can enjoy the best of our superb location right on the beach. All dinner reservations receive a complimentary box of chocolate too...
                        </p>
                    <a href="#" class="button">
                       Read More <i class="fa fa-chevron-right"></i>
                    </a>
                </div>

        </div>
    </div>
</div>

<div class="home-about">
    <div class="bg-image">
        <!-- top cutout -->
             <div class="top-overlay">
               <img src="<?php echo get_template_directory_uri(); ?>/img/about-bottom.png" alt="Cutout Top" width="100%">
        </div>
        <!-- bottom cutout -->
        <div class="bottom-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about-top.png" alt="Cutout Bottom" width="100%">
        </div>
        
    </div>
        <div class="title-holder">
         <div class="container">
                <h2><span>Served Fresh</span> From the paddock to the plate</h2>
            </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <p class="tagline">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, 
                        pulvinar facilisis justo mollis, auctor consequat urna
                    </p>
                    <p>
                        Morbi a bibendum metus.Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, in pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </p>
                </div>
                <div class="col-lg-3">
                <div class="button">
                  Read More <i class="fa fa-chevron-right"></i>
                </div>
          </div>
       </div>
    </div>
</div>

<div class="home-about-images">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                   <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second ">
                   <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
                   <div class="image"></div>
                  </a> 
                </div>
            
           
        </div>
    </div>
</div>

<div class="home-testimonials">
    <div class="container">
        <div class="bg-overlay">

        </div>
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <h2>Happy Customers</h2>
                <div class="testimonial-holder">
                    <p>
                        Ah! What a place. I could go have breakfast every single day and not get tired by the view. The staff are very kind and helpful, and the food is AMAZING! A MUST visit place if you're visiting Bunbury!
                    </p>
                    <div class="seperator"></div>
                    <div class="author">Saad Ulde</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-subscribe">
        <div class="title-holder">
         <div class="container">
                <h2><span>Sign Up</span> Subcribe to our email newsletter</h2>
            </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-11">
                   <?php echo do_shortcode('[contact-form-7 id="19" title="Newsletter Subscription"]'); ?>
                </div>
          </div>
       </div>
    </div>
</div>

<?php
get_footer();
