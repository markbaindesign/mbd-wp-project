<div id="latest-posts-front" class="section latest-posts">
	<div class="container media-object-container">
		<header>
			<h2 class="home-section-title"><?php _e( 'Latest Posts', '_mbdmaster' ); ?></h2>
		</header>
		<div class="container-latest-posts">
			<?php mbdmaster_latest_posts(); ?>
		</div>
		<footer class="read-more">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php _e( 'See more posts', '_mbdmaster' ); ?>" >
				<span class="visuallyhidden"><?php _e( 'See more posts', '_mbdmaster' ); ?></span>
				<i class="fa"></i>
			</a>
		</footer>
	</div><!-- .container -->
</div><!-- .section --> 