<?php

require 'TocadorMusica.php';

//Classe padrão para array no PHP
//@param tamnho do array
$musicas = new SplFixedArray(2);

$musicas[0] = "One Dance";
$musicas[1] = "Closer";

//Aumentando o  tamanho do Array
$musicas->setSize(4);

$musicas[2] = "Rock Star";
$musicas[3] = "Love Your Self";

$tocador = new TocadorMusica();

$tocador->adicionarMusica($musicas);

$tocador->tocarMusica();
/*
$tocador->adicionarMusica('Havana');

$tocador->avancarMusica();

$tocador->tocarMusica();
*/