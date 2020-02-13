<?php

use Twig\Environment;
use Twig\Loader\ArrayLoader;
use Twig\Loader\FilesystemLoader;

require "../vendor/autoload.php";


$loader = new FilesystemLoader(__DIR__ . '../../templates');

$twig = new Environment($loader, [
    'cache' => false,
]);

echo $twig->render('home.twig');