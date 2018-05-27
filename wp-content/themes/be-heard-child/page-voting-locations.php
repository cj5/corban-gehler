<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Be_Heard
 */
 
 /*
Template Name: Voting Locations
*/

get_header('custom');
?>

<section>
	<div class="heading">
		<div class="container">
			<h2><?php the_title(); ?></h2>
		</div>
		<!-- <div class="heading-filter"></div> -->
  </div>
</section>

<section class="paddings locations-directions">
	<div class="container">
		<h3 class="no-mg">Enter your location below to display the nearest voting locations to you on the map</h3>
	</div>
</section>

<section class="ib locations">
	<div class="locations-map">
		<?php //echo do_shortcode('[wpgmza id="1"]') ?>
		<?php echo do_shortcode('[wpsl template="default"]') ?>
	</div>  
</section>

<?php
// get_sidebar();
get_footer('custom');
