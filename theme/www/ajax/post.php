<?php 
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}


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