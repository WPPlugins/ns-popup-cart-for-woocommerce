<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ns_view_activate_set_options()
{
    add_option('ns_view_cart_popup_title', '');
}

register_activation_hook( __FILE__, 'ns_view_activate_set_options');



function ns_view_register_options_group()
{
    register_setting('ns_view_cart_popup_options_group', 'ns_view_cart_popup_title');   
}
 
add_action ('admin_init', 'ns_view_register_options_group');

?>