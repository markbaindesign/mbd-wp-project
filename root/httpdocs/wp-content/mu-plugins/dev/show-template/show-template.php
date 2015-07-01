<?php

function mbd_show_template() {
	global $template;
 
  echo '<pre style="position: fixed; top: 0; left: 0;width: auto; z-index: 99999999999999;background-color: rgba(0,0,0,.2);">';
	print_r( $template );
	echo '</pre>';
}
add_action( 'wp_head', 'mbd_show_template' );
