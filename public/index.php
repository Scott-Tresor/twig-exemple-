<?php

use Twig\Environment;
use Twig\Loader\ArrayLoader;
use Twig\Loader\FilesystemLoader;

require "../vendor/autoload.php";

$page = '';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
} 

$loader = new FilesystemLoader(__DIR__ . '../../templates');

$twig = new Environment($loader, [
    'cache' => false,
]);

switch ($page) {
    case 'home':
        echo $twig->render('home.twig');
        break;
    
    default:
        Header('HTTP/1.0 404 Not Found');
        echo $twig->render('404.twig');
        break;
}