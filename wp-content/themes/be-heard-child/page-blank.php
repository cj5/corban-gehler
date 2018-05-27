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
Template Name: Home
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

<?php
// get_sidebar();
get_footer('custom');
