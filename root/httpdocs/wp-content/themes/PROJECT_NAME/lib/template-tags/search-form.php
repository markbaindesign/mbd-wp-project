<?php
/**
 * Search form
 *
 * Loaded via functions.php
 *
 */

if ( ! function_exists( 'mbdmaster_search_form' ) ) :

/**
 * Custom search form
 */

function mbdmaster_search_form( $form ) {
	$var = home_url( '/' );	
    $form = '<form role="search" method="get" class="search-form" action="' . $var . '">
				<label>
					<span class="screen-reader-text">Search for:</span	>			</label>
					<input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:">

				<input type="submit" class="search-submit" value="Search">
			</form>';

    return $form;
}
endif;