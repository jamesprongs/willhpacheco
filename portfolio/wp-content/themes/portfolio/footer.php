			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<nav class="nav" role="navigation">
					<?php whpPortfolio_nav(); ?>
				</nav>
				
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'whpPortfolio'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="http://html5blank.com/" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

				<?php get_template_part('searchform'); ?>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/magnific-1.1.0.js"></script>

		<script>
			$('.popup-link').magnificPopup({
			type: 'image'
			// other options
			});
			$('.gallery-link').magnificPopup({
				type: 'image',
				gallery:{
					enabled:true
				}
			});
			$('.post-wrap').hover(function() {
				$(this).find(".post-excerpt").stop().slideToggle('fast');
			});

			var headerHeight = $('header').innerHeight();
			$('.header-gap').css('height', headerHeight+'px');
			$( window ).resize(function() {
				var headerHeight = $('header').innerHeight();
				$('.header-gap').css('height', headerHeight+'px');
			});
		</script>
		<script>
			

		</script>
		<?php wp_footer(); ?>
		
		

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
