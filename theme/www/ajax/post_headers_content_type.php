<?php 
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}


// get headers
$headers = apache_request_headers();

$post = file_get_contents("php://input");
$vars = explode("&", $post);
//print_r($vars);

if(count($vars) == 2) {

	$_test = urldecode(preg_replace("/test=/", "", $vars[0]));
	$_headers = urldecode(preg_replace("/headers=/", "", $vars[1]));
	// print $_test."<br>\n";
	// print $_headers."<br>\n";
//
// print_r($headers);

	list($header, $value) = explode(",", $_headers);

//	print $header ." , ". $value;
	if($_test && (
			(isset($headers[$header]) && $headers[$header] == $value) || 
			(isset($headers[strtolower($header)]) && $headers[strtolower($header)] == $value) || 
			(isset($headers[ucwords(strtolower($header))]) && $headers[ucwords(strtolower($header))] == $value)
		)
			) {
?>
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