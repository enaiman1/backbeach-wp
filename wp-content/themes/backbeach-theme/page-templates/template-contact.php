<?php
/**
 * Template Name: Template: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<header class="page-header entry-header">
	<div class="container">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<div class="contact-us-holder">
   <div class="container">
   <div class="row">
            <div class="col-lg-6">
                <?php echo do_shortcode('[contact-form-7 id="41" title="Contact Us Page Form"]'); ?>
            </div>
            <div class="col-lg-6">
                <div class="contact-us-hours">
                    <h3>Opening Hours</h3>
                    <div class="hours">
                        <div class="hour">
                            <span>Mon - Tues</span>
                            <span>7am - 4pm</span>
                            <span>(Last Orders 3pm)</span>
                        </div>
                        <div class="hour">
                            <span>Wed - Sat</span>
                            <span>7am - 9pm</span>
                            <span>(Last Orders 8pm)</span>
                        </div>
                        <div class="hour">
                            <span>Sun</span>
                            <span>7am - 8pm</span>
                            <span>(Last Orders 3pm)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
    
</div>

<?php
get_footer();
