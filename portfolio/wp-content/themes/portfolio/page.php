<?php get_header(); ?>
</div>
	<main role="main">
		<!-- section -->
		<section>

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				
				<a class="popup-link" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" >
					<div class="thumbnail-wrap">
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
					</div>
				</a>
			
			<?php endif; ?>
			<!-- /post thumbnail -->
			<div class="container">	
			<h1><?php the_title(); ?></h1>

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
	<div class="container">
<?php get_sidebar(); ?>

<?php get_footer(); ?>
