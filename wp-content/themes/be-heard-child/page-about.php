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
Template Name: About
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
	
	<div class="container">		
		<article class="mw mg-tp-xl">
			<p>I am here today by the grace and generosity of friends, family and community that helped me grow into the man I am today. These experiences instilled in me values such as integrity and responsibility. I will uphold those values in the office of Lieutenant Governor for the State of Wisconsin.</p>
			<p>My story is one not likely to be unfamiliar to many across our great state. My parents, who have been together for more than 45 years, were the owners of a small tire shop and worked tirelessly to provide for their six children. However, at the age of six, my family’s world changed when my father suffered a brain injury due to an accident in the shop. Undeterred, my father fought to provide for my mother, brothers, and sisters, including my sister with Down Syndrome, in any way that he could. Due to his limitations and disabilities we relied on Social Security Disability payments, and public housing, and at times putting meals on the table using the foodshare program. My father did what he could to manage for his family within his limitations. Moreover, this meant that we relied on our friends, family, and community for support. </p>
			<p>I know what it is like to live and work through adversity, and I also realize how important support and being given dignity is to success. I also know what it is like trying to make ends meet while supporting myself by holding two, sometimes three jobs. At 17 years old I was diagnosed with Crohn’s Disease, and I fought my way through life’s struggles, attempting to improve and better myself with an education, and all the while being concerned how am I going to manage if I get really sick since I wasn’t able to pay for health insurance. Most services are cut off after you earn a certain amount. As it is true for me and my family, these are challenges many Wisconsinites and their families face. Health care costs should not be in competition with the grocery bill. This is not just about being able to survive; it is about having an opportunity to thrive.</p>
			<p><strong>That’s why it matters I am the next Lt. Governor! I am committed to ensuring that individuals, families, small businesses and communities in this state thrive!</strong> I will take my rural and small town values I learned growing up in Eau Claire to Madison. My vision for Wisconsin takes us to the next level and includes leadership that is guided by the values of <strong>Integrity, Responsibility</strong>, and <strong>Generosity</strong>. These values generate equity, and there is great economic opportunity created by equity and equality. I am committed to include all voices at the table.</p>
		</article>
	</div>
</section>

<?php
// get_sidebar();
get_footer('custom');
