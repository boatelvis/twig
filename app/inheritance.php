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

$title = 'The Design Company';
$heroMessage = 'We are a creative design company';
$services = ['ecommerce', 'web applications', 'websites', 'mobile applications'];
$footer = 'Designed by a creative design company';

echo $twig->render('derived.twig', ['navLinks' => $navLinks, 'title' => $title, 'heroMessage' => $heroMessage, 'services' => $services, 'footer' => $footer]);

?>