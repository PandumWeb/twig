<?php
/**
 * Created by PhpStorm.
 * User: lor
 * Date: 21/10/14
 * Time: 17:45
 */

require __DIR__.'/vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
]);

$twig = new Twig_Environment($loader, [
    //'cache' => null,
]);

$article = [
    'name' => 'fee',
    'content' => 'huiioijkop',
];

echo $twig->render('article.html.twig',[
    'article' => $article,
]);
