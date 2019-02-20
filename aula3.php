<?php

require 'TocadorMusica.php';

$musicas = new SplFixedArray(4);
$musicas[0] = "One Dance";
$musicas[1] = "Closer";
$musicas[2] = "rockstar";
$musicas[3] = "Love Yourself";

$tocador = new TocadorMusica();

$tocador->adicionarMusica($musicas);

$tocador->baixarMusicas($musicas);