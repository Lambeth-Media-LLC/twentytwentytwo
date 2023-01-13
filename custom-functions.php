<?php

add_action('wp_head', 'hook_gtm_head_js');
function hook_gtm_head_js()
{
?>
	<!-- your gtm head script here -->
<?php
}

add_action( 'wp_body_open', 'hook_gtm_body_js' );
function hook_gtm_body_js() {
	echo '	<!-- your gtm body noscript here -->';
}
