<?php 
// get headers
$headers = apache_request_headers();
$test = $_POST["test"];

if($test && $headers["test"] == "value") {
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