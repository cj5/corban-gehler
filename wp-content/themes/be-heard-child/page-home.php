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

	<section class="hero-section">
		<div class="container">
			<div class="left ib">
				<img src="/wp-content/uploads/2018/05/corban.png" alt="">
			</div>
			<div class="left-fill ib"></div>
			<div class="right ib">
				<div class="slogan-wrapper">
					<h2>Be<br> Heard.</h2>
				</div>					
			</div>
			<a href="#learn-more">
				<div class="learn-more">
					<p class="center">Learn More<br><span class="fa fa-angle-down"></span></p>
				</div>
			</a>
		</div>		
	</section>

	<section class="join paddings center">
		<div id="learn-more"></div>
		<div class="container">
			<h2 class="mg-bt-xs">Join Our Team</h2>
			<h3 class="mg-bt-lg">Sign up to join our email list to get all of the latest updates on the campaign</h3>
			<a href="" class="btn">Join Now!</a>
		</div>
	</section>

<?php
// get_sidebar();
get_footer('custom');
