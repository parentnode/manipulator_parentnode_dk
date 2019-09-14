<?php 
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}


// get headers
$headers = apache_request_headers();

$_test = isset($_POST["test"]) ? $_POST["test"] : "";
$_headers = isset($_POST["headers"]) ? $_POST["headers"] : "";

if($_test && $_headers) {

	list($header, $value) = explode(",", $_headers);

	if($_test && (
			(isset($headers[$header]) && $headers[$header] == $value) || 
			(isset($headers[strtolower($header)]) && $headers[strtolower($header)] == $value) || 
			(isset($headers[ucwords(strtolower($header))]) && $headers[ucwords(strtolower($header))] == $value)
		)
	) { ?>
<div class="test"><?= $_test ?></div>
<?
	exit();
	}
}

// show error
?>
<div class="test">error</div>
<? 
?>