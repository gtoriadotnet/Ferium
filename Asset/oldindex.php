<?php
$id = (int)$_GET["id"];
$file = $id . ".signed";
if (!file_exists($file)) {
	$file = "https://www.roblox.com/asset/?id=" . $id;
	header("location:" . $file);
}
header("content-type:text/plain");
readfile($file);
?>