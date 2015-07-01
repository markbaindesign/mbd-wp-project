<?php
/**
 * Related Post function
 *
 * Loaded via functions.php
 *
 */

if ( ! function_exists( 'mbdmaster_related_posts' ) ) :
/**
 * Show a set of related posts based on tags
 */

function mbdmaster_related_posts() {
	global $post;  
 	$orig_post = $post;  
	$tags = wp_get_post_tags($post->ID);  
	
	if ($tags) { 
		$tag_ids = array();  
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
	 
		$args=array(  
			'tag__in' 				=> $tag_ids,  
			'post__not_in'			=> array( $post->ID ),  
			'posts_per_page'		=> 3, 
			'ignore_sticky_posts' 	=>1
		);  
	
		$my_query = new wp_query( $args );

		if  ( $my_query->have_posts() ):  ?>
	    <?php while( $my_query->have_posts() ) : ?>
	    	<?php $my_query->the_post(); ?>
 		    <?php get_template_part('content', 'archive' ); ?>
		<?php endwhile; ?>
		<?php $post = $orig_post; wp_reset_query(); ?> 
	<?php else :
	 _e( 'Sorry, but there are no related posts at this time.', '_mbdmaster' );
	endif;

	} else {
		_e( 'Sorry, but there are no related posts at this time.', '_mbdmaster' );
	}

	
}
endif;