<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', 'cover' ); ?>
<div id="main">
	<div class="container">
		<div id="primary" class="section content-area">
			<div class="content-container">
				<?php get_template_part( 'content' ); ?>
			</div>
		</div><!-- #primary -->
	
		<?php get_sidebar(); ?>
	</div><!-- .container -->
</div><!-- #main -->
	<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
			endif;
		?>
<?php endwhile; // end of the loop. ?>
<div class="section post-navigation">
	<div class="container">
		<?php	get_template_part( 'content', 'post-list' ); ?>
	</div><!-- .container -->
</div><!-- .section -->
<?php get_footer(); ?>
