<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("demo");
$page->pageTitle("Manipulator demonstration");


$page->header();
$page->template("pages/demo.php");
$page->footer();

?>