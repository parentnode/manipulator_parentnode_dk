<?php
include_once("../php/config.php");
include_once("include/functions.inc.php");

$subject = getVar("subject");
$message = getVar("message");

$message .= nl2br(print_r($_SERVER, true));

if($subject && $message) {

	include_once("include/notifier.php");
	collectNotification($message);

}

header("Location: /documentation/img/dot_trans.gif");
exit();
?>
