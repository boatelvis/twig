<?php

require_once '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../views/');
$twig = new Environment($loader);

$name = 'Alex Bearman';
$age = 45;

echo $twig->render('formatfilter.twig', ['name' => $name, 'age' => $age]);

?>