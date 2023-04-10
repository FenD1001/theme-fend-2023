<?php
/**
 *
 * The framework's functions and definitions
 */
update_option( 'woodmart_is_activated', '1' );
define( 'WOODMART_THEME_DIR', get_template_directory_uri() );
define( 'WOODMART_THEMEROOT', get_template_directory() );
define( 'WOODMART_IMAGES', WOODMART_THEME_DIR . '/images' );
define( 'WOODMART_SCRIPTS', WOODMART_THEME_DIR . '/js' );
define( 'WOODMART_STYLES', WOODMART_THEME_DIR . '/css' );
define( 'WOODMART_FRAMEWORK', '/inc' );
define( 'WOODMART_DUMMY', WOODMART_THEME_DIR . '/inc/dummy-content' );
define( 'WOODMART_CLASSES', WOODMART_THEMEROOT . '/inc/classes' );
define( 'WOODMART_CONFIGS', WOODMART_THEMEROOT . '/inc/configs' );
define( 'WOODMART_HEADER_BUILDER', WOODMART_THEME_DIR . '/inc/header-builder' );
define( 'WOODMART_ASSETS', WOODMART_THEME_DIR . '/inc/admin/assets' );
define( 'WOODMART_ASSETS_IMAGES', WOODMART_ASSETS . '/images' );
define( 'WOODMART_API_URL', 'https://xtemos.com/licenses/api/' );
define( 'WOODMART_DEMO_URL', 'https://woodmart.xtemos.com/' );
define( 'WOODMART_PLUGINS_URL', WOODMART_DEMO_URL . 'plugins/' );
define( 'WOODMART_DUMMY_URL', WOODMART_DEMO_URL . 'dummy-content-new/' );
define( 'WOODMART_TOOLTIP_URL', WOODMART_DEMO_URL . 'theme-settings-tooltips/' );
define( 'WOODMART_SLUG', 'woodmart' );
define( 'WOODMART_CORE_VERSION', '1.0.36' );
define( 'WOODMART_WPB_CSS_VERSION', '1.0.2' );

if ( ! function_exists( 'woodmart_load_classes' ) ) {
	function woodmart_load_classes() {
		$classes = array(
			'Singleton.php',
			'Api.php',
			'Googlefonts.php',
			'Config.php',
			'Layout.php',
			'License.php',
			'Notices.php',
			'Options.php',
			'Stylesstorage.php',
			'Theme.php',
			'Themesettingscss.php',
			'Vctemplates.php',
			'Wpbcssgenerator.php',
			'Registry.php',
			'Pagecssfiles.php',
		);

		foreach ( $classes as $class ) {
			require WOODMART_CLASSES . DIRECTORY_SEPARATOR . $class;
		}
	}
}

woodmart_load_classes();

new WOODMART_Theme();

define( 'WOODMART_VERSION', woodmart_get_theme_info( 'Version' ) );
/********/
/*
* Author:
 */
function itseovn_admin_menus() {
  
    remove_menu_page( 'xts_theme_settings1' ); 
    remove_menu_page( 'xts_dashboard1' ); 
 
}
add_action( 'admin_menu', 'itseovn_admin_menus' );

function remove_toolbar_items($wp_adminbar) {
  	$wp_adminbar->remove_node('updates1');
  	$wp_adminbar->remove_node('xts_dashboard');

}
add_action('admin_bar_menu', 'remove_toolbar_items', 999);
/**********************************************************************/
/*
* Author: 
 */
function hw_change_admin_footer () {
echo 'Created by <a href="https://sachnoiaz.com/" target="_blank">FenD</a></p>';
}
add_filter('admin_footer_text', 'hw_change_admin_footer');
// duong dan logo admin
function wpc_url_login(){
return "https://sachnoiaz.com/"; 
}
add_filter('login_headerurl', 'wpc_url_login');
//logo admin wordpress/
function custom_admin_logo() {
	echo '<style type="text/css">
	body.login div#login h1 a {
		background-image: url(#) !important;
		background-position: 0 !important;
	}
	</style>';
}
add_action( 'login_enqueue_scripts', 'custom_admin_logo' );

/***********************************************/
add_filter('intermediate_image_sizes_advanced','__return_false');
  
/**
 *Remove the WP Bakery Visual Composer autoupdate notice
 */

add_action( 'admin_head', 'ewallz_admin_css' );

function ewallz_admin_css(){

echo '<style>
#vc_license-activation-notice {display:none;}
 </style>';

}
/**
  
  
  
  
  