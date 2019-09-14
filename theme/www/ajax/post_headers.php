<?php 
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}


function testHeaders($headers, $_headers) {


	foreach($_headers as $_header) {

		list($header, $value) = explode(":", $_header);

		if(
			!(isset($headers[$header]) && $headers[$header] == $value) && 
			!(isset($headers[strtolower($header)]) && $headers[strtolower($header)] == $value) && 
			!(isset($headers[ucwords(strtolower($header))]) && $headers[ucwords(strtolower($header))] == $value)
			
		) {
			return false;
		}
	}

	return true;
}

// get headers
$headers = apache_request_headers();
$_test = isset($_POST["test"]) ? $_POST["test"] : "";
$_headers = explode(",", isset($_POST["headers"]) ? $_POST["headers"] : "");


if($_test && testHeaders($headers, $_headers)) {
?>
<div class="test"><?= $_test ?></div>
<?
}
else {
?>
<div class="test">error</div>
<? 
} 
?>