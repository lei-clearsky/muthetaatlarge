<?php
/**
 * Template Name: Homepage - MTAL
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Mu Theta At Large
 */

get_header(); ?>
		<!--Banner-->
		<div class="sixteen columns">
			<div class="banner-holder">
				<h2>Sigma Theta Tau International</h2>
				<h1>MUTHETA AT LARGE</h1>
				<h2>Northern New Jersey Chapter</h2>
				<h2>HONOR SOCIETY OF NURSING</h2>
			</div>
			<h4 style="text-align: center;">Make Sigma Theta Tau the First Step of Your Journey to Nursing Excellence</h4>

			<div class="promo-wrap">
			<div class="promo-red"><a href="#">Learn More</a></div>
			<div class="promo-blue"><a href="#">Join Us!</a></div>
			</div>
		</div>
		
		<div class="sixteen columns" style="margin: 30px 0;">
			<h2 style="text-align:center; margin-bottom: 20px;">News and Events</h2>
			<div class="eight columns alpha">
				<div class="news-container">
					<?php 
		    		$args = array( 'post_type' => 'news', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						the_title('<h4>','</h4>');					
						the_content();
					endwhile;
		    	?>
				</div>
			</div>

			<div class="eight columns omega">
				<div class="events-container">
					<?php 
		    		$args = array( 'post_type' => 'events', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						the_title('<h4>','</h4>');
						the_content();
					endwhile;
		    	?>
				</div>
			</div>	
			
		</div>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
