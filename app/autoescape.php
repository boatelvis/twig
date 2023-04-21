<?php

require_once '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../views/');
$twig = new Environment($loader, ['autoescape' => false]);

$data = "<script src='http::/example.com/nastyscript.js'></script>";

echo $twig->render('autoescape.twig', ['data' => $data]);

?>