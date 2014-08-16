<?php
/**
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

		<div class="sixteen columns">
			<div class="banner-holder" style="background-color:#fff;">

			<h1 style="color:#40024f; text-align:center;"><?php the_title(); ?> </h1>
			<?php 
				$page_summary = get_field('page_summary');
			while ( have_posts()&& !empty($page_summary) ) : the_post(); ?>  
				<h3 style="margin:30px 90px 10px 90px;"><?php the_field('page_summary'); ?></h3>
			<?php endwhile?> 
			<div style="margin:30px auto; width:15%; height:1px; background:#ccc; "></div>    
			</div>
				

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div>
	</div>

<?php get_footer(); ?>
