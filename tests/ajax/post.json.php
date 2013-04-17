<?php 
$test = $_POST["test"];
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