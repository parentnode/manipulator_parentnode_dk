<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("front");
$page->pageTitle("Don't be scared - It's just JavaScript");

$page->header();
$page->template("pages/front.php");
$page->footer();

?>
