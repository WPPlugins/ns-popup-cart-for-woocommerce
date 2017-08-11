<?php
/*
Plugin Name: NS Custom view cart popup
Plugin URI: https://wordpress.org/plugins/ns-popup-cart-for-woocommerce/
Description: This plugin allow to create a new menu item linked to a modal popup
Version: 1.0.2
Author: NsThemes
Author URI: http://www.nsthemes.com
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! defined( 'VIEWCART_NS_PLUGIN_DIR' ) )
    define( 'VIEWCART_NS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

if ( ! defined( 'VIEWCART_NS_PLUGIN_DIR_URL' ) )
    define( 'VIEWCART_NS_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );



/* *** plugin options *** */
require_once( VIEWCART_NS_PLUGIN_DIR.'/ns-popup-view-option.php');

require_once( plugin_dir_path( __FILE__ ).'/ns-admin-options/ns-admin-options-setup.php');


function ns_view_add_modal() {?>
<!-- Trigger/Open The Modal -->
<div id="viewcart_modal" class="modal">
<!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo strtoupper ( get_option("ns_view_cart_popup_title", ""));?></h4>
    </div>
    <div class="modal-body">
	    <?php echo do_shortcode('[woocommerce_cart]'); ?>
    </div>
  </div>
</div>
<?php }

add_action ('wp_head', 'ns_view_add_modal');

function ns_view_add_menu_item($items, $args) {
      if (get_option('ns_view_cart_popup_title') == ''){
        $ns_print = 'Popup';
      }else{
        $ns_print = get_option('ns_view_cart_popup_title', 'Popup');
      }
     $items .= '<li id="cartlink-modal"><a href="#" role="button" data-toggle="modal" data-target="#viewcart_modal">'. ucfirst($ns_print).'</a></li>';
    return $items;
}
add_filter('wp_nav_menu_items','ns_view_add_menu_item', 10, 2 );
