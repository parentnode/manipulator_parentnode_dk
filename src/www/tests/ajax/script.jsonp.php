<?
$test = $_GET["test"];
$callback = $_GET["callback"];
if($test && $callback) {
?>
<?= $callback ?>({"test":"<?= $test ?>"});
<?
}
else {
?>
<?= $callback ?>({"test":"error"});
<? 
} 
?>