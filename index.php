<?php
/*
Plugin Name: Plugin Creator
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Boilerplate Plugin Creator
Author: Richard Miles
Version: 0 
Author URI: http://richymiles.wordpress.com
*/

add_action('admin_menu', 'plugin_creator_admin_menu');

function plugin_creator_admin_menu() {
	add_options_page('My Options', 'Plugin Creator', 'manage_options', plugin_dir_path( __FILE__ ) . 'admin.php');
}

?>
<?php
function enqueue_admin() {
	wp_enqueue_style( 'custom-css', plugins_url('assets/css/style.css', __FILE__) );
	wp_enqueue_style( 'code-mirror-css', plugins_url('lib/code-mirror/lib/codemirror.css', __FILE__) );
	wp_enqueue_script( 'code-mirror', plugins_url('lib/code-mirror/lib/codemirror.js', __FILE__) );
	wp_enqueue_script( 'code-mirror-xml', plugins_url('lib/code-mirror/mode/xml/xml.js', __FILE__) );
	wp_enqueue_script( 'code-mirror-js', plugins_url('lib/code-mirror/mode/javascript/javascript.js', __FILE__) );
	wp_enqueue_script( 'code-mirror-css-js', plugins_url('lib/code-mirror/mode/css/css.js', __FILE__) );
	wp_enqueue_script( 'code-mirror-mixedhtml', plugins_url('lib/code-mirror/mode/htmlmixed/htmlmixed.js', __FILE__) );
	wp_enqueue_script( 'code-mirror-matchbrackets', plugins_url('lib/code-mirror/addon/edit/matchbrackets.js', __FILE__) );
    wp_enqueue_script( 'backbone' );
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin' , 0); 
