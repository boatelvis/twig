<?php

require_once '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../views/');
$twig = new Environment($loader);

echo $twig->render('page.twig', ['text' => 'Hello World!']);

?>