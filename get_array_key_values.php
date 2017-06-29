getting value in array without using for or foreach

<?php
$arraydata = array(["type"=>"a"],["type"=>"b"],["type"=>"c"]);
$type = array_column($arraydata, 'type');

?>

For getting a array key uppercode
$type = array_keys($arraydata);
