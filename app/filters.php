<?php

require_once '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../views/');
$twig = new Environment($loader);

$words = ['happy', 'joy', 'amazing', 'peace', 'love'];
$sentence = 'Happiness is from within';

echo $twig->render('filters.twig', ['words' => $words, 'sentence' => $sentence]);

?>