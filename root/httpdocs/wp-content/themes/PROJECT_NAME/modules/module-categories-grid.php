<?php if ( function_exists ( 'mbdmaster_categories' ) ) : ?> 
	<div id="categories-front" class="section latest-posts">
		<div class="container media-object-container">
			<header>
				<h2 class="home-section-title"><?php _e( 'Work', '_mbdmaster' ); ?></h2>
			</header>

			<div class="media-object-container grid-layout">
			<?php 
				$args = array(
					'type' => 'work',
					'taxonomy' => 'type'
				);
				$categories = get_categories( $args );
				foreach ( $categories as $category ) : 
			?>				
			<div class="media-object">
				<a href="<?php echo get_category_link( $category->term_id ); ?>">
					<div class="media-object-media">
						<?php if (z_taxonomy_image_url( $category->term_id,'sq3' ) ) : ?>
							<img src="<?php echo z_taxonomy_image_url( $category->term_id,'sq3' ); ?>" />
						<?php else: ?>
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/default.jpg" alt="<?php the_title(); ?>" />
						<?php endif; ?>						
					</div><!-- .media-object-media -->
					<article class="media-object-content">
						<header><span><?php echo $category->cat_name; ?></span></header>
					</article><!-- .media-object-content -->
				</a>
			</div><!-- .media-object -->		
		<?php endforeach; ?>
	</div>
			<footer class="read-more"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php _e( 'See more posts', '_mbdmaster' ); ?>" ><span class="visuallyhidden"><?php _e( 'See more posts', '_mbdmaster' ); ?></span><i class="fa"></i></a></footer>
		</div><!-- .container -->
	</div><!-- .section --> 	
<?php endif; ?>