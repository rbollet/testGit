<?php 

//if ( isset($_POST['payload']) && $_POST['payload'] ) {

exec('git pull origin master', $output, $return);

echo json_encode($output);

//}

