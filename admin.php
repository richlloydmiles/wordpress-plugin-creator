<div class="app_body">
	
<h1>Win</h1>

<a href="#/help">go!</a>
<input type="text" id="app_name">
<div id="app"></div>
<?php
// mkdir("../wp-content/plugins/miles_tmp/test");
?>

<?php
// $myfile = fopen("../wp-content/plugins/miles_tmp/test/newfile.txt", "w") or die("Unable to open file!");
// $txt = "Mickey Mouse\n";
// fwrite($myfile, $txt);
// $txt = "Minnie Mouse\n";
// fwrite($myfile, $txt);
// fclose($myfile);

// rename("../wp-content/plugins/miles_tmp/test", "../wp-content/plugins/test");
?>
<script>
jQuery(document).ready(function($) {
	jQuery('.app_body').html('<div style="width:100%;text-align:center;"><img src="../wp-content/plugins/miles_tmp/assets/images/ajax-loader.gif"></div>');

		jQuery.ajaxSetup({
			beforeSend: function() {
				jQuery('#app').html('<div style="width:100%;text-align:center;"><img src="../wp-content/plugins/miles_tmp/assets/images/ajax-loader.gif"></div>');
			}
		});

var AppRouter = Backbone.Router.extend({
  routes: {
    "help":                 "help",    // #help
    "search/:query":        "search" // #search/kiwis
  },
  help: function() {
$.ajax({
	url: '../wp-content/plugins/miles_tmp/ajax.php',
	type: 'GET',
	data: {route: jQuery('#app_name').val()},
})
.done(function(data) {
	jQuery('#app').html(data);
	console.log("success");
})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});

},
	  search: function(query) {
	}
});
    // Initiate the router
    var app_router = new AppRouter;
    // Start Backbone history a necessary step for bookmarkable URL's
    Backbone.history.start();	
});

</script>

</div>
