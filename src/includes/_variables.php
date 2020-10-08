<?php 
$siteTitle = 'Grid test';
// cache buster
$styleID = '';
$scriptID = '';


if($styleID){
	$stylesheet = '<link rel="stylesheet" href="/css/'.$styleID.'">';
	
}
else {
	$stylesheet = '<link rel="stylesheet" href="/css/main.css">';
	
}

$script = '';

if($scriptID) {
	$script .= '<script src="/js/'.$scriptID.'"></script>';
} else {
	$script .= '<script src="/js/main.js"></script>';
}
	

if(isset($_GET["design"])) {
	$design = $_GET["design"];
}

if(isset($_GET["widget"])) {
	$widget = $_GET["widget"];
}

if(isset($_GET["component"])) {
	$component = $_GET["component"];
}
if(isset($_GET["lead-paragraph"])) {
	$leadParagraph = $_GET["lead-paragraph"];
}

if(isset($_GET["images"])) {
	$images = true;
}

if(isset($_GET["fact"])) {
	$fact = true;
}

if(isset($_GET["wallpaper"])) {
	$wallpaper = true;
}