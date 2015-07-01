<?php
/**
 * Helper functions for use in other areas of the theme
 *
 * @package _mbbasetheme
 */

/**
 * Add capabilities for a custom post type
 *
 * @return void
 */
function mb_add_capabilities( $posttype ) {
	// gets the author role
	$role = get_role( 'administrator' );

	// adds all capabilities for a given post type to the administrator role
	$role->add_cap( 'edit_' . $posttype . 's' );
	$role->add_cap( 'edit_others_' . $posttype . 's' );
	$role->add_cap( 'publish_' . $posttype . 's' );
	$role->add_cap( 'read_private_' . $posttype . 's' );
	$role->add_cap( 'delete_' . $posttype . 's' );
	$role->add_cap( 'delete_private_' . $posttype . 's' );
	$role->add_cap( 'delete_published_' . $posttype . 's' );
	$role->add_cap( 'delete_others_' . $posttype . 's' );
	$role->add_cap( 'edit_private_' . $posttype . 's' );
	$role->add_cap( 'edit_published_' . $posttype . 's' );
}

add_filter( 'nav_menu_css_class', 'je_portfolio_menu_item_classes', 10, 2 );
/**
 * Add css classes to Portfolio CPT menu item, remove from Blog item
 *
 * Enables menu classes for CPTs.
 * Pretty fragile, as it depends on the item titles for each menu item, change as required
 * 
 * @param array  $classes CSS classes for the menu item
 * @param object $item    WP_Post object for current menu item
 * 
 * @link         http://www.josheaton.org/
 * @author       Josh Eaton <josh@josheaton.org>
 * @copyright    Copyright (c) 2013, Josh Eaton
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
function je_portfolio_menu_item_classes( $classes, $item )
{
  switch ( get_query_var('post_type') ) {
    // Only run on portfolio post type
    case 'portfolio_item':
      // Remove current_page_parent from Blog menu item
      if( $item->title == 'Blog' ) {
        $classes = array_diff( $classes, array( 'current_page_parent' ) );
      }
      // Add current_page_parent class to the portfolio menu item
      if ( $item->title == 'Books' ) {
        $classes[] = 'current_page_parent';
      }
    break;
  }
 
  return $classes;
}

// tell WordPress about our new query var
function wpse52480_query_vars( $query_vars ){
    $query_vars[] = 'my_special_query';
    return $query_vars;
}
add_filter( 'query_vars', 'wpse52480_query_vars' );

// check if our query var is set in any query
function wpse52480_pre_get_posts( $query ){
    if( isset( $query->query_vars['my_special_query'] ) )
        // do special stuff

    return $query;
}
add_action( 'pre_get_posts', 'wpse52480_pre_get_posts' );


add_action('pre_get_posts', 'mbdmaster_query_offset', 1 );
function mbdmaster_query_offset(&$query) {

    //Before anything else, make sure this is the right query...
   if( ! isset( $query->query_vars['my_special_query'] ) ) {
     return;
    }
  
    //First, define your desired offset...
    $offset = 1;
    
    //Next, determine how many posts per page you want (we'll use WordPress's settings)
    $ppp = get_option('posts_per_page');

    //Next, detect and handle pagination...
    if ( $query->is_paged ) {

        //Manually determine page query offset (offset + current page (minus one) x posts per page)
        $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

        //Apply adjust page offset
        $query->set('offset', $page_offset );

    }
    else {

        //This is the first page. Just use the offset...
        $query->set('offset',$offset);

    }
}


add_filter('found_posts', 'mbdmaster_adjust_offset_pagination', 1, 2 );
function mbdmaster_adjust_offset_pagination($found_posts, $query) {

    //Define our offset again...
    $offset = 1;

    //Ensure we're modifying the right query object...
    if( isset( $query->query_vars['my_special_query'] ) ) {
        //Reduce WordPress's found_posts count by the offset... 
      return $found_posts - $offset;
    }
    return $found_posts;
}

// Work

// tell WordPress about our new query var
function mbdcptwork_query_vars( $query_vars ){
    $query_vars[] = 'my_special_cpt_query';
    return $query_vars;
}
add_filter( 'query_vars', 'mbdcptwork_query_vars' );

// check if our query var is set in any query
function mbdcptwork_pre_get_posts( $query ){
    if( isset( $query->query_vars['my_special_cpt_query'] ) )
        // do special stuff

    return $query;
}
add_action( 'pre_get_posts', 'mbdcptwork_pre_get_posts' );

function mbdmaster_cpt_query_offset(&$query) {

    //Before anything else, make sure this is the right query...
   if( ! isset( $query->query_vars['my_special_cpt_query'] ) ) {
     return;
    }
  
    //First, define your desired offset...
    $offset = 1;
    
    //Next, determine how many posts per page you want (we'll use WordPress's settings)
    $ppp = get_option('posts_per_page');

    //Next, detect and handle pagination...
    if ( $query->is_paged ) {

        //Manually determine page query offset (offset + current page (minus one) x posts per page)
        $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

        //Apply adjust page offset
        $query->set('offset', $page_offset );

    }
    else {

        //This is the first page. Just use the offset...
        $query->set('offset',$offset);

    }
}
add_action('pre_get_posts', 'mbdmaster_cpt_query_offset', 1 );

function mbdmaster_adjust_cpt_offset_pagination($found_posts, $query) {

    //Define our offset again...
    $offset = 1;

    //Ensure we're modifying the right query object...
    if( isset( $query->query_vars['my_special_cpt_query'] ) ) {
        //Reduce WordPress's found_posts count by the offset... 
      return $found_posts - $offset;
    }
    return $found_posts;
}
add_filter('found_posts', 'mbdmaster_adjust_cpt_offset_pagination', 1, 2 );