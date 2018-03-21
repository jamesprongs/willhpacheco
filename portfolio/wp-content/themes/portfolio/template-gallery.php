<?php
/*
Template Name: Gallery/Portfolio
*/
?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<?php
				$args = array(
					'numberposts' => -1, // Using -1 loads all posts
					'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
					'order'=> 'ASC',
					'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
					'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
					'post_status' => null,
					'post_type' => 'attachment'
				);
				
				$images = get_children( $args );
				// continued below ...
				?>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php //comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'whpPortfolio' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
