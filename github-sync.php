<?php 

//if ( isset($_POST['payload']) && $_POST['payload'] ) {

$output = shell_exec('git pull origin master');

echo "<pre>$output</pre>";

//}

