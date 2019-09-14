<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: content-type");

$post = file_get_contents("php://input");
$vars = json_decode($post, true);


$test = isset($vars["test"]) ? $vars["test"] : "";


if($test) {
?>
<div class="test"><?= $test ?></div>
<?
}
else {
?>
<div class="test">error</div>
<? 
} 
?>