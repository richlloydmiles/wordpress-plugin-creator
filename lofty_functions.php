<?php

function lofty_get_template($file) {
ob_start();
require 'templates/' . $file;
$temp = ob_get_contents();
ob_end_clean();
return $temp;
}

?>
