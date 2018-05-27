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
Template Name: Contact
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

<section class="contact paddings">
  <div class="container">
		<div class="form-wrapper">
		<h3 class="mg-tp-lg">Email Corban</h3>	
			<?php echo do_shortcode('[wpforms id="34" title="false" description="false"]') ?>
			<h4 class="mg-tp-lg mg-bt-sm">Mailing Address:</h4>
			<p class="mg-bt-xl">6516 Monona Drive Num 172 Monona, WI 53716</p>
			<h3 class="mg-tp-lg">Volunteer Sign-up</h3>
				<?php echo do_shortcode('[wpforms id="44" title="false" description="false"]') ?>
		</div>
  </div>
</section>

<?php
// get_sidebar();
get_footer('custom');
