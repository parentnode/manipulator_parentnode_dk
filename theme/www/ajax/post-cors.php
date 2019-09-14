<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

$test = isset($_POST["test"]) ? $_POST["test"] : "";
$allow_headers = isset($_POST["allow-headers"]) ? $_POST["allow-headers"] : "";
$credentials = isset($_POST["credentials"]) ? $_POST["credentials"] : "";

// If credientials are set to true (in js-request with credentials, origin cannot be *)
if($credentials && isset($_SERVER['HTTP_ORIGIN'])) {
	header("Access-Control-Allow-Origin: ".$_SERVER['HTTP_ORIGIN']);
	header("Access-Control-Allow-Credentials: true");
}
else if(!$credentials) {
	header("Access-Control-Allow-Origin: *");
}


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