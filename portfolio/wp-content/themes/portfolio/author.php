<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): the_post(); ?>

			<h1><?php _e( 'Author Archives for ', 'whpPortfolio' ); echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'whpPortfolio' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

				<!-- post details -->
				<!--span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span-->
				<!--span class="author"><?php _e( 'Published by', 'whpPortfolio' ); ?> <?php the_author_posts_link(); ?></span-->
				<!--span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'whpPortfolio' ), __( '1 Comment', 'whpPortfolio' ), __( '% Comments', 'whpPortfolio' )); ?></span-->
				<!-- /post details -->

				<?php //whp_excerpt('whp_index'); // Build your custom callback length in functions.php ?>


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
