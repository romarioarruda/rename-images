<?php

$formatoAtual = $argv[1];
$nomePagina   = 'A';

if (isset($argv[2])) {
	$nomePagina = $argv[2];
}

$arquivos = glob("{*.$formatoAtual}", GLOB_BRACE);

$pg = 1;
foreach($arquivos as $img){
	$nova = str_replace($img, $nomePagina.$pg.".".$formatoAtual, $img);

	$move = "mv '$img' renomeadas/$nova";

	`$move`;
	
	$pg++;

	echo "Renomeando $img ==> $nova\n";
}