<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<h1 class="h2"><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_mbbasetheme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
<div id="social-sharing">
	<?php if ( 'mbdmaster_social_sharing' ) {
		mbdmaster_social_sharing(); 
	} ?>
</div><!-- .section -->