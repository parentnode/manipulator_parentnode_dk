<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("build");
$page->pageTitle("Build your Manipulator project bundle");


// current version
if(count($action) > 0) {

	// reset entire group structure
	if(count($action) == 1 && $action[0] == "reset") {

		session()->reset("detector_groups");

		header("Location: /build");
		exit();

	}
	else if(count($action) == 1 && $action[0] == "groups") {

		$detector_groups = json_decode(stripSlashes(getVar("detector_groups")));
		session()->value("detector_groups", $detector_groups);

		// return something to ensure JS has some response
		print "1";
		exit();

	}

	// // reset entire group structure
	// if(count($action) == 1 && $action[0] == "resetGroups") {
	//
	// 	session()->reset("detector_groups");
	//
	// 	header("Location: /build");
	// 	exit();
	//
	// }
	// // remove group
	// // build/removeGroup/#group#
	// else if(count($action) == 2 && $action[0] == "removeGroup") {
	//
	// 	$group = $action[1];
	// 	if(isset($detector_groups[$group])) {
	// 		unset($detector_groups[$group]);
	// 	}
	//
	// 	session()->value("detector_groups", $detector_groups);
	//
	// 	header("Location: /build");
	// 	exit();
	//
	// }
	// // remove segment
	// // build/removeSegment/#group#/#segment#
	// else if(count($action) == 3 && $action[0] == "removeSegment") {
	//
	// 	$group = $action[1];
	// 	$segment = $action[2];
	//
	// 	// remove segment from group if it exists
	// 	if(array_search($segment, $detector_groups[$group]) != -1) {
	// 		unset($detector_groups[$group][array_search($segment, $detector_groups[$group])]);
	// 	}
	//
	// 	session()->value("detector_groups", $detector_groups);
	//
	// 	header("Location: /build");
	// 	exit();
	// }
	// // add group
	// // posting group
	// else if(count($action) == 1 && $action[0] == "addGroup") {
	//
	// 	$group = getVar("_group");
	// 	$detector_groups[$group] = array();
	//
	// 	session()->value("detector_groups", $detector_groups);
	//
	// 	header("Location: /build");
	// 	exit();
	//
	// }
	// // add segment to group
	// // build/#group# - posting segment
	// else if(count($action) == 2 && $action[0] == "addSegment") {
	//
	// 	$group = $action[1];
	// 	$segment = getVar("_segment");
	//
	// 	// clean up - remove segment from group if it exists
	// 	foreach($detector_groups as $existing_group => $existing_segments) {
	// 		if(array_search($segment, $existing_segments) !== false) {
	// 			unset($detector_groups[$existing_group][array_search($segment, $existing_segments)]);
	// 		}
	// 	}
	//
	// 	// add segment to group
	// 	$detector_groups[$group][] = $segment;
	//
	//
	// 	session()->value("detector_groups", $detector_groups);
	//
	// 	header("Location: /build");
	// 	exit();
	// }

	else if($action[0] == "download") {

		$values = array();
		$values["language"] = getVar("language");
		$values["grouping"] = getVar("grouping");


		// output file name
		if($values["language"] == "php") {
			$filename = "detector.class.php";
		}
		else if($values["language"] == "javascript") {
			$filename = "detector.js";
		}
		else if($values["language"] == "java") {
			$filename = "Detector.java";
		}


		$ch = curl_init();
		curl_setopt_array($ch, array(
//			CURLOPT_URL => "http://detector-v3.api/build",
			CURLOPT_URL => "http://detector-v3.dearapi.com/build",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => 2,
			CURLOPT_POST => sizeof($values),
			CURLOPT_POSTFIELDS => $values,
			CURLOPT_ENCODING => 'gzip'
		));

		$result = curl_exec($ch);
		curl_close($ch);

		if($result != "invalid language") {
			
			header('Content-Description: File Transfer');
			header('Content-Type: text/text');
			header("Content-Type: application/force-download");
			header('Content-Disposition: attachment; filename='.$filename);
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . strlen($result));
			ob_clean();
			flush();
			print $result;

			exit();
		}
		else {

			$page->page(array(
				"templates" => "build/error.php"
			));
			exit();
			
		}

	}
}

$page->page(array(
	"templates" => "build/index.php"
));
exit();

?>