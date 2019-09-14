<?php 
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}


$test = isset($_GET["test"]) ? $_GET["test"] : "";

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