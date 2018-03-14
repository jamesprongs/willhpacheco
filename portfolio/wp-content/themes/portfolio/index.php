<?php get_header();  ?>


	<main role="main">

		<!-- section -->
		<section class="wrapper">

			<h1><?php _e( '', 'whpPortfolio' ); ?></h1>
			
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<div class="post-wrap">
							<h4><?php the_title(); ?></h4>
							<div class="thumbnail-wrap">
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							</div>
						</div>
					</a>
				<?php endwhile; else: ?>
				<?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
			<?php endif; ?>
			
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
