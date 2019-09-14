<?
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

header("Content-Type: application/javascript");

$test = isset($_GET["test"]) ? $_GET["test"] : "";
$callback = isset($_GET["callback"]) ? $_GET["callback"] : "";
if($test && $callback) {
?>
<?= $callback ?>({test:"<?= $test ?>"});
<?
}
else {
?>
<?= $callback ?>({test:"error"});
<? 
} 
?>