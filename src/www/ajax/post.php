<?php 

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