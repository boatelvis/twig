<?php

require_once '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../views/');
$twig = new Environment($loader);

$navLinks = [
    ['link' => '#home', 'text' => 'home'],
    ['link' => '#about', 'text' => 'about'],
    ['link' => '#services', 'text' => 'services'],
    ['link' => '#testimonials', 'text' => 'testimonials'],
    ['link' => '#contact', 'text' => 'contact']
];

echo $twig->render('looping.twig', ['navLinks' => $navLinks]);

?>