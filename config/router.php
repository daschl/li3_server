<?php 
$webroot = $_SERVER['DOCUMENT_ROOT'];
if (file_exists('webroot/' . $_SERVER['REQUEST_URI'])) {
	return false;
} else {
	include_once 'webroot/index.php';
}
   
?>
