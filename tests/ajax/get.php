<?php 

$test = $_GET["test"];

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