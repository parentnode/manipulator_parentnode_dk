<?php 
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}


$test = $_GET["test"];
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