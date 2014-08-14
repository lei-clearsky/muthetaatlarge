<?php
/**
 * The template for displaying search results pages.
 *
 * @package Mu Theta At Large
 */

get_header(); ?>

	<div class="sixteen columns">
			<div class="banner-holder" style="background-color:#fff;">

			<h1 style="color:#40024f; text-align:center;"><?php the_title(); ?> </h1>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h3 class="page-title"><?php printf( __( 'Search Results for: %s', 'mtal' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php mtal_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div>
	</div>

<?php get_footer(); ?>
