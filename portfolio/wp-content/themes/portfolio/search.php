<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper">

			<h1><?php echo sprintf( __( '%s Search Results for ', 'whpPortfolio' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<div style="margin-bottom: 20px;">
				<?php get_template_part('searchform'); ?>
			</div>
			
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<div class="post-border">
							<div class="post-wrap">
								<div class="thumbnail-wrap">
									<div class="post-description">
										<h4><?php the_title(); ?></h4>
										<div class="post-excerpt"><p><?php the_excerpt() ?></p></div>
									</div>
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								</div>
							</div>
						</div>
					</a>
				<?php $count++ ?>
				<?php endwhile; else: ?>
				<?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
			<?php endif; ?>
			
			<?php get_template_part('pagination'); ?>

						<aside class="sidebar" role="complementary">
							<div class="sidebar-widget">
								<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-instagram')) ?>
							</div>
						</aside>


		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
