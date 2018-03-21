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
			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<div class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></div>
			<!--span class="author"><?php _e( 'Published by', 'whpPortfolio' ); ?> <?php the_author_posts_link(); ?></span-->
			<!--span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'whpPortfolio' ), __( '1 Comment', 'whpPortfolio' ), __( '% Comments', 'whpPortfolio' )); ?></span-->
			<!-- /post details -->
			
			<div class="post-content-wrap">
				<?php the_content(); // Dynamic Content ?>
			</div>

			<div class="bypostauthor">
				
				<div class="postauthorimg">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-shrink.png" alt="Author Initials"/>
				</div>
				<p><?php _e( '', 'whpPortfolio' ); the_author_posts_link(); ?></p>
				<?php the_tags( __( 'Tagged in: ', 'whpPortfolio' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

				<p><?php _e( 'Categorised in: ', 'whpPortfolio' ); the_category(', '); // Separated by commas ?></p>
			</div>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
				
			<?php //comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>
	
	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'whpPortfolio' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
	<div class="container">
<?php get_sidebar(); ?>

<?php get_footer(); ?>
