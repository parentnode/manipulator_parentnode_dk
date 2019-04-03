<?
$test = isset($_POST["test"]) ? $_POST["test"] : "";
header("Location: /ajax/post-redirected.php?test=$test");
?>