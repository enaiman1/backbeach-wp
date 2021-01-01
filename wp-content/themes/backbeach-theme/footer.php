<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
    <div class="bg-image"></div>
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Contact</span> Send us a message below
            </h2>
        </div>
    </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-1"></div>
             <div class="col-lg-11"> 
                <?php echo do_shortcode('[contact-form-7 id="20" title="Footer"]'); ?>  
                <div class="copyright">&copy; The Backbeach Eating House - All Rights Reserver // Website by Eric Naiman </div>
             </div>
         </div>
    </div>


</div><!-- wrapper end -->
<div class="footer-warning">
    <div class="container">
       <div class="row align-items-center">
           <!-- <div class="col-md-2 col-lg-2 col-xl-1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/glass-cheers.png" alt="backbeach logo">
           </div>
           <div class="col-lg-10 col-lg-10 col-xl-11">
                <h3>WARNING, UNDER the Liquor Control Act, it is an offence:</h3>
                <p>
                    To sell or supply liquor to a person under the age of 21 year on a licensed or regulated premises; or for a person under the age of 21 to purchase, or attempt to purchase, liquor on a licenced or regulate premises.
                </p>
           </div> -->
       </div>
    </div>
</div>
</div><!-- #page we need this extra closing tag here -->

<!-- aos animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- INITIALIZE AOS: -->
<script>
  AOS.init();
</script>

<?php wp_footer(); ?>

</body>

</html>

