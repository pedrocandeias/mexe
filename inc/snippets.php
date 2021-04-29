<?php 
/**
 * Multiple small snippets for personalization of WP
 */

// Remove Dashboard Widgets

add_action( 'admin_init', 'remove_dashboard_meta' );
function remove_dashboard_meta() {
remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}

//Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

//Adds a custom logo to the top left of the WordPress admin
function smartwp_custom_logo_wp_dashboard() {
  echo "<style type='text/css'>
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
      background-image: url('" . get_bloginfo('stylesheet_directory') . "/assets/img/admin-icon.png');
      background-size: contain;
      background-position: 0 0;
      color:rgba(0, 0, 0, 0);
    }
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon {
      background-position: 0 0;
    }
    </style>";
}
add_action('wp_before_admin_bar_render', 'smartwp_custom_logo_wp_dashboard');



//Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

//Remove jQuery migrate
function smartwp_remove_jquery_migrate( $scripts ) {
  if ( !is_admin() && !empty( $scripts->registered['jquery'] ) ) {
    $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, ['jquery-migrate'] );
  }
}
add_action('wp_default_scripts', 'smartwp_remove_jquery_migrate');


/**
 * Add favicon to header
 */

function add_favicon() {
	echo '<link rel="apple-touch-icon" sizes="180x180" href="'.get_template_directory_uri().'/assets/img/apple-touch-icon.png">';
	echo '<link rel="icon" type="image/png" sizes="32x32" href="'.get_template_directory_uri().'/assets/img/favicon-32x32.png">';
	echo '<link rel="icon" type="image/png" sizes="16x16" href="'.get_template_directory_uri().'/assets/img/favicon-16x16.png">';
	echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/assets/img/favicon.ico" />';
}
add_action('wp_head', 'add_favicon');
?>