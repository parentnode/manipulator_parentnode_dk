<?php 
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