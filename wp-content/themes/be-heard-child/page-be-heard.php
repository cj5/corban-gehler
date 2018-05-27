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
Template Name: Be Heard
*/

get_header('custom');
?>

<section>
	<div class="heading">
		<div class="container">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>
	
	<div class="container">		
		<article class="mw mg-tp-xl mg-bt-xl">
			<p>To produce the results we want to see we must be bold and courageous in taking action but also we must be generous to listen to the viewpoint of others. Not long ago in Wisconsin the words conservative or liberal were not words of insult or used to separate you from your friends and family. There are those in this current administration that use them as a way to not to be responsible and as a way to justify not listening. They use those words to divide us. We are Wisconsinites and experience the same challenges and wish good for our neighbors regardless of who they are or what they believe. We come from a rich heritage of great ideas that were developed here in our state such as Social Security and Unemployment Insurance, and prioritizing family and education. You have a lot to be proud of Wisconsin, and we have a lot to do to prepare us for the challenges ahead. We must do this together! We need people in office that offer real leadership and that acknowledges and hears you! Do you feel heard?</p>
			<p>As your Lt. Governor it matters to me that you are heard. I want to hear from you, your friends and your families. I want to listen to what truly matters to you! Whether you consider yourself conservative or liberal or something in between, whether you are Black, White, Native American, or Asian, whether you are pretty or plain, whether you are fat or thin, whether you are gay, straight or trans, woman, man, adult or young person, whether you are Christian, Jew, Muslim or don’t call on god at all, whether you speak English, American Sign Language, Hmong or Spanish, whether you are single or vowed; I want to listen and partner with you as we create and declare what is possible for this great state. Your Voice Matters! Let’s have the courageous conversations together; let’s create the ideas that moves us forward together while honoring our rich heritage such as the Wisconsin Idea, Wisconsin’s beautiful landscape, our ingenuity, and hospitality for which this this state is renowned all over the world. With as your Lt. Governor, you are not alone Wisconsin! I invite you to come meet me and let your voice #beheard Wisconsin! Join #teamwisconsin #teamcorban!</p>
		</article>
	</div>
</section>

<?php
// get_sidebar();
get_footer('custom');
