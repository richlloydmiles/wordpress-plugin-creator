<?php
require 'lib/handlebars-php/src/Handlebars/Autoloader.php';
Handlebars\Autoloader::register();

use Handlebars\Handlebars;

$engine = new Handlebars;

?>
<div class="wrap">
	<h1>Test</h1>
	<a href="#/page/my_apps">My Apps</a>
<script>
	jQuery(document).ready(function($) {
var AppRouter = Backbone.Router.extend({
  routes: {
    "page/:option":         "page"
  },
  page: function(option) {
  	jQuery('.route').fadeOut(300);
  	setTimeout(function() {
  		 	jQuery('#'+option).fadeIn(300);
  	}, 300);
 
  }
});
    // Initiate the router
    var app_router = new AppRouter;
    // Start Backbone history a necessary step for bookmarkable URL's
    Backbone.history.start();	
});
</script>
<div id="app">
	<div id="my_apps" class="route">
		<h2>My Apps</h2>
	<table>
		<tr>
			<th>
			Name
			</th>
			<th>
			Slug
			</th>
		</tr>
	<?php
	var_dump(get_option( 'my_apps' ));
	?>
	</table>
	<a href="#/page/create_app" class="button button-primary">Create New App</a>
	</div>

<div id="create_app" class="route">
<h2>Create App</h2>
<form action="" method="POST">
<table>
<tr>
	<th>
	Name
	</th>
	<td>
	<input type="text" name="new_app">	
	</td>
</tr>
<tr>
	<th>

	</th>
	<td>
<input type="submit" class="button button-primary" value="Submit">
	</td>
</tr>
</table>

</form>
<a href="#/page/my_apps">Back to My Apps</a>
	</div>
</div>

</div>

<?php
	if (isset($_POST['new_app'])) {
		$array = get_option( 'my_apps' );
		array_push($array, $_POST['new_app']);
		update_option( 'my_apps', $array , '', 'yes' );
	}
?>

