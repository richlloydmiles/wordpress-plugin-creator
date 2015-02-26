<?php
/*
Plugin Name: Boilerplate
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Boilerplate Plugin Creator
Author: Richard Miles
Version: 0
Author URI: http://richymiles.wordpress.com
*/
add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page() {

	add_menu_page( 'Miles Dev', 'Miles Dev', 'manage_options', 'miles_tmp/admin.php', '', '', 6 );

}

?>
<?php
function enqueue_backbone() {
    wp_enqueue_script( 'backbone' );
}
add_action( 'admin_enqueue_scripts', 'enqueue_backbone' , 0); 
?>

<link rel=stylesheet href="lib/code-mirror/lib/codemirror.css">
<script src="lib/code-mirror/lib/codemirror.js"></script>
<script src="lib/code-mirror/lib/jquery.min.js"></script>
<script src="lib/code-mirror/mode/xml/xml.js"></script>
<script src="lib/code-mirror/mode/javascript/javascript.js"></script>
<script src="lib/code-mirror/mode/css/css.js"></script>
<script src="lib/code-mirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="lib/code-mirror/addon/edit/matchbrackets.js"></script>