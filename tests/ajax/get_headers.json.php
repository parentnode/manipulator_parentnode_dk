<?php 
// get headers
$headers = apache_request_headers();

$test = $_GET["test"];

if($test && $headers["test"] == "value") {
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