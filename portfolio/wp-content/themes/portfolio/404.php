<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'whpPortfolio' ); ?></h1>
				<div style="display: flex; justify-content: center;">
					<img src="<?php echo get_template_directory_uri(); ?>/img/404-page.png" alt="404 page not found"/>
				</div>
				<div type="button" class="btn btn-secondary">
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'whpPortfolio' ); ?></a>
				</div>
				
			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
