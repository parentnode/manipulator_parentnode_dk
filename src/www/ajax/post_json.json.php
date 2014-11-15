<?php 
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}


$json = file_get_contents('php://input');
$php = json_decode($json, true);
$test = $php["test"];

if($test) {
?>
{"test":"<?= $test ?>"}
<?
}
else {
?>
{"test":"error"}
<? 
} 
?>