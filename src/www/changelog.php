<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("changelog");
$page->pageTitle("It's just improvements");


$page->header();
$page->template("pages/changelog.php");
$page->footer();

?>
