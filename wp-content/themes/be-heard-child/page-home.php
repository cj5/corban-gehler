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
					<p class="center">Learn More<br><span class="ib">
						<svg class="icon icon-chevron-down"><use xlink:href="#icon-chevron-down"></use></svg>
					</span></p>
				</div>
			</a>
		</div>		
	</section>

	<section class="offset paddings center">
		<div id="learn-more"></div>
		<div class="container">
			<h2 class="ft-sz-lg mg-bt-md">Corban Gehler for Lt. Governor of Wisconsin</h2>
			<p class="mw">To produce results for the benefit of all Wisconsinites, we must work together. I invite you to join our team, be heard, and vote for me in the primary on Tuesday, August 14, 2018 and in the general election on November 6, 2018.</p>
		</div>		
	</section>

	<section class="video paddings">
		<div class="container">
			<div class="video-wrapper">
			<iframe width="1425" height="591" src="https://www.youtube.com/embed/Ed6ltXbhYw0?list=PL02BC6FDF4877BFC6" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>			
		</div>
	</section>

	<section class="join paddings center">		
		<div class="container">
			<h2 class="mg-bt-xs">Join Our Team</h2>
			<h3 class="mg-bt-lg">Sign up to join our email list to get all of the latest updates on the campaign</h3>
			<a href="/contact" class="btn">Join Now!</a>
		</div>
	</section>

<?php
// get_sidebar();
get_footer('custom');
