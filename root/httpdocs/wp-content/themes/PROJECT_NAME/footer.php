<?php // get_sidebar( 'footer' ); ?>

<?php if ( has_nav_menu( 'footer' ) ) : ?>
	<div id="footer-navigation" class="section">
		<div class="container">
			<nav class="secondary-navigation">
				<?php wp_nav_menu( array( 
						'theme_location' => 'footer', 
						'container' => 'ul', 
						'container_class' => 'nav-collapse main-navigation ',
						'fallback_cb' => false
					) ); 
				?>				
			</nav>
		</div><!-- .container -->
	</div><!-- .section -->
<?php endif; ?>


<footer id="colophon" class="section site-footer" role="contentinfo">
	<div class="container">
		<div id="back-to-top" >
			<a href="#masthead" title="<?php _e('Go back to the top', '_mbdmaster'); ?>" class="">
				<span class="visuallyhidden">
					<?php _e('Go back to the top', '_mbdmaster'); ?>
				</span> 
				<i class="fa"></i>
			</a>
		</div><!-- #back-to-top -->

		<?php if ( 
			get_template_part( 'modules/module', 'social-links' ) ) { 
				get_template_part( 'modules/module', 'social-links' );
			}
		?>

	<div class="site-info">
		<div id="copyright" dir="ltr">&copy; <?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?></div> 
	<!--	<p id="tagline">
			<?php echo get_bloginfo( 'description' ); ?>
		</p> --> 
	<!-- <div id="design">Made by <a href="http://markbaindesign.com" title="Visit the website of Mark Bain Design">Mark Bain Design</a>
	</div>--><!-- #design -->

	</div><!-- .site-info -->

	</div><!-- .container -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
