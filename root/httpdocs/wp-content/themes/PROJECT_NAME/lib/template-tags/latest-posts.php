<?php
/**
 * Latest Posts
 *
 * Loaded via functions.php
 *
 */

if ( ! function_exists( 'mbdmaster_latest_posts' ) ) :
/**
 * Show the most recent posts
 */

function mbdmaster_latest_posts() {
	global $post;  
 	$orig_post = $post;  
	 
		$args=array(  
			'posts_per_page'		=> 3, 
			'ignore_sticky_posts' 	=> 1
		);  
	
		$my_query = new wp_query( $args );

	if  ( $my_query->have_posts() ) {
	   	while( $my_query->have_posts() ) {
	    	$my_query->the_post(); 
 		    get_template_part('content', 'archive' );
		}
		$post = $orig_post; 
		wp_reset_query();
	}
}
endif;