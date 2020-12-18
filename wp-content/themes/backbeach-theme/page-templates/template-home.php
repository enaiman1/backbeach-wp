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

<?php
get_footer();
