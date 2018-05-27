<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Be_Heard
 */

?>

	<!-- </div> -->
	<!-- #content -->

	<section class="tunnels paddings">
		<div class="container">
			<ul>
				<a class="tunnel ib center" href="/be-heard">
					<li>
						<div class="left">
							<div class="icon">
								<svg class="icon icon-bullhorn"><use xlink:href="#icon-bullhorn"></use></svg>
							</div>
							<div class="blurb">
								<h4>Be Heard!</h4>
								<p>Make a difference! Join #teamcorban or Write a Letter to the Editor, and Show Your Support.</p>
								<h5>#jointeamcorban</h5>
							</div>
						</div>
					</li>
				</a>
				<a class="tunnel ib center" href="https://secure.actblue.com/donate/corbanltgovernor" target="_blank">
					<li>
						<div class="mid">
							<div class="icon">
								<svg class="icon icon-coin-dollar"><use xlink:href="#icon-coin-dollar"></use></svg>
							</div>
							<div class="blurb">
								<h4>Donate Now!</h4>
								<p>By making a contribution to Corban for Lt. Governor you are joining thousands of Wisconsinites making a difference and investing in Wisconsin's future. Let yourself be heard Wisconsin!</p>
								<h5>Donate Now!</h5>
							</div>
						</div>
					</li>
				</a>
				<a class="tunnel ib center" href="/how-to-vote">
					<li>					
						<div class="right">
							<div class="icon">
								<svg class="icon icon-earth"><use xlink:href="#icon-earth"></use></svg>
							</div>
							<div class="blurb">
								<h4>How to Vote</h4>
								<p>Do you and your friends know where to vote? Make your plan and let you voice #beheard at the poles. Your vote matters Wisconsin!</p>
								<h5>Find Your Booth!</h5>
							</div>
						</div>
					</li>
				</a>
			</ul>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="column left ib desktop">
				<div class="column-wrapper">
					<p>&copy; 2018 | Corban Gehler for Lt. Governor of WI</p>
				</div>
			</div>
			<div class="column mid center ib">
				<div class="column-wrapper">
					<a href="/">
						<img src="/wp-content/uploads/2018/05/logo.png" alt="">
					</a>
				</div>
			</div>
			<div class="column right ib">
				<div class="column-wrapper">
					<ul class="social-links">
						<a href=""><li><svg class="icon icon-envelope-o"><use xlink:href="#icon-envelope-o"></use></svg></li></a>
						<a href=""><li><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></li></a>
						<a href=""><li><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></li></a>
						<a href=""><li><svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg></li></a>
					</ul>
				</div>
			</div>
			<div class="column ib mobile">
				<div class="column-wrapper">
					<p>&copy; 2018 | Corban Gehler for Lt. Governor of WI</p>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
