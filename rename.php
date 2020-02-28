<?php

$currentFormat = $argv[1];
$pageName   = 'A';

if (isset($argv[2])) {
	$pageName = $argv[2];
}

$files = glob("{*.$currentFormat}", GLOB_BRACE);

$pg = 1;
foreach($files as $img){
	$renamed = str_replace($img, $pageName.$pg.".".$currentFormat, $img);

	$move = "mv '$img' renamed/$renamed";

	`$move`;
	
	$pg++;

	echo "Renamed $img ==> $renamed\n";
}
