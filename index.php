<?php
	include('./includes/config.inc.php');
	$url = $_SERVER['REQUEST_URI'];
	$stringTomb = explode("/", $url);
	$oldal = $stringTomb[count($stringTomb)-1];
	if ($oldal!="") {
		if (isset($oldalak[$oldal]) && file_exists("./templates/pages/{$oldalak[$oldal]['fajl']}.tpl.php")) {
			$keres = $oldalak[$oldal];
		}
		else { 
			$keres = $hiba_oldal;
			header("HTTP/1.0 404 Not Found");
		}
	}
	else $keres = $oldalak['/'];
	include('./templates/index.tpl.php'); 
?>