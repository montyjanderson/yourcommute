<?php
if(!$debug) {
	$debug = true;

}

if($debug == true) {
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
}
?>