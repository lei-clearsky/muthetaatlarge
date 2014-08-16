<?php
/**
 * Template Name: Calendar - MTAL
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Mu Theta At Large
 */

get_header(); ?>

		<div class="sixteen columns">
			<div class="banner-holder" style="background-color:#fff;">

			<h1 style="color:#40024f; text-align:center;"><?php the_title(); ?> </h1>
			<?php 
			$page_summary = get_field('page_summary');
			while ( have_posts()&& !empty($page_summary) ) : the_post(); ?>   
				<h3 style="margin:20px 60px;"><?php the_field('page_summary'); ?></h3>
			<?php endwhile?>     
			</div>
				

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if( dynamic_sidebar( 'upcoming_events' )): ?>

			    <?php else: ?>
			      <h3>Upcoming Events</h3>
			      <p>Install Event Organizer Plugin.</p>
			    <?php endif; ?>

			<?php endwhile; // end of the loop. ?>

		</div>
	</div>

<?php get_footer(); ?>
