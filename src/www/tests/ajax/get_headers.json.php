<?php 
// get headers
$headers = apache_request_headers();
$test = $_GET["test"];

list($header, $value) = explode(",", $_GET["headers"]);

if($test && (
			(isset($headers[$header]) && $headers[$header] == $value) || 
			(isset($headers[strtolower($header)]) && $headers[strtolower($header)] == $value) || 
			(isset($headers[ucwords(strtolower($header))]) && $headers[ucwords(strtolower($header))] == $value)
		)
	) {
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