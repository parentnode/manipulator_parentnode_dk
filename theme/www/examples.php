<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("examples");
$page->pageTitle("Every good student deserves a good example");


if(is_array($action) && count($action)) {

	if(count($action) == 1) {

		$page->page(array(
			"templates" => "examples/".$action[0].".php"
		));
		exit();
	}

}


$page->page(array(
	"templates" => "examples/index.php"
));
exit();

?>
