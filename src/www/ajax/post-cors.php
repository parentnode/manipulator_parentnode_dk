<?php
// If credientials are set to true (in js-request, origin cannot be *)
header("Access-Control-Allow-Origin: ".$_SERVER['HTTP_ORIGIN']);
header("Access-Control-Allow-Credentials: true");


$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}


$test = isset($_POST["test"]) ? $_POST["test"] : "";

if($test) {
?>
'<div class="test"><?= $test ?></div>'
<?
}
else {
?>
<div class="test">error</div>
<? 
} 
?>