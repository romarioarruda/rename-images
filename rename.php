<?php

$currentFormat = $argv[1];
$pageName   = 'A';
$pg = 1;

if (!empty($argv[2])) $pageName = $argv[2];

if (!empty($argv[3])) $pg = $argv[3];

$files = glob("{*.$currentFormat}", GLOB_BRACE);


foreach($files as $img){
	$renamed = str_replace($img, $pageName.$pg.".".$currentFormat, $img);

	exec("mv '$img' renamed/$renamed");
	
	$pg++;

	echo "Renamed $img ==> $renamed\n";
}
