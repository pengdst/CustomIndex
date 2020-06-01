<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	$uri = 'https://';
} else {
	$uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
$dir_obj = dir($_SERVER['DOCUMENT_ROOT']);

function createCollectionItem($target, $label)
{
	echo '<a href="' . $target . '" class="collection-item hoverable">' . $label . '</a>';
}

function getFileType($name)
{
	return " <em>(" . filetype ($name) . ") </em>";
}

function reload($uri)
{
	header('Location: ' . $uri . '/');
}

include "main.php";

exit;
?>
Something is wrong with the XAMPP installation :-(