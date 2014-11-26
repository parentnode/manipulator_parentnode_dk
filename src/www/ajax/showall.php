<?
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

print "GET:<br>\n";
print_r($_GET);

print "POST:<br>\n";
print_r($_POST);

print "FILES:<br>\n";
print_r($_FILES);

?>