<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

// test parameter forwarded as GET in redirect
$test = isset($_GET["test"]) ? $_GET["test"] : "";

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