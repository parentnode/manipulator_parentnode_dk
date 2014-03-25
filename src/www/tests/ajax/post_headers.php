<?php 
// get headers
$headers = apache_request_headers();
$test = $_POST["test"];
list($header, $value) = explode(",", $_POST["headers"]);

if($test && (
			(isset($headers[$header]) && $headers[$header] == $value) || 
			(isset($headers[strtolower($header)]) && $headers[strtolower($header)] == $value) || 
			(isset($headers[ucwords(strtolower($header))]) && $headers[ucwords(strtolower($header))] == $value)
		)
	) {
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