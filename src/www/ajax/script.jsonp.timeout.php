<?
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

sleep(2);

$test = $_GET["test"];
$callback = $_GET["callback"];
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