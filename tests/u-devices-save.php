<?php
include_once("../php/config.php");

$subject = isset($_POST["subject"]) ? $_POST["subject"] : $_GET["subject"];
$message = isset($_POST["message"]) ? $_POST["message"] : $_GET["message"];

$message .= nl2br(print_r($_SERVER, true));

if($subject && $message) {
	include_once("include/notifier.php");
	notifier($subject, $message);
}

if(isset($_GET["type"]) && $_GET["type"] == "img") {
	header("Location: /documentation/img/dot_trans.gif");
	exit();
}
?>
ok mail