<?php

require_once '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../views/');
$twig = new Environment($loader);

$letters = ['a', 'd', 'r', 's', 'r', 'y', 'w', 't', 'i', 'o'];

echo $twig->render('sort.twig', ['letters' => $letters]);

?>