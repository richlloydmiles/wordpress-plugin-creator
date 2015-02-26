<?php

// uncomment the following two lines, if you don't use composer
require 'lib/handlebars-php/src/Handlebars/Autoloader.php';
Handlebars\Autoloader::register();

use Handlebars\Handlebars;

$engine = new Handlebars;

?>
<?php

if(isset($_POST['content'])) {

echo $engine->render(
    $_POST['content'],
    array(
    	'title' => 'Planets',
        'planets' => array(
            "Mercury",
            "Venus",
            "Earth",
            "Mars"
        )
    )
);    
}


?>