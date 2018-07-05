<?php 
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

sleep(2);


$test = $_POST["test"];

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
