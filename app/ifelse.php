<?php

require_once '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../views/');
$twig = new Environment($loader);

$words = ['', null, 'rock', ' ', 'forest'];

echo $twig->render('ifelse.twig', ['words' => $words]);

?>