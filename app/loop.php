<?php

require_once '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../views/');
$twig = new Environment($loader);

$words = ['joy', 'peace', 'love', 'sound mind', 'meekness', 'harmony', 'wisdon'];

echo $twig->render('loop.twig', ['words' => $words]);

?>