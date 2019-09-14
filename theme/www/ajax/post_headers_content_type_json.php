<?php 
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}


// get headers
$headers = apache_request_headers();

// get posted JSON
$post = file_get_contents("php://input");
$vars = json_decode($post, true);
// print_r($vars);

if(count($vars) == 2) {

	$_test = $vars["test"];
	$_headers = $vars["headers"];
	// print $_test."<br>\n";
	// print $_headers."<br>\n";

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