<?php
/**
 * Created by PhpStorm.
 * User: lor
 * Date: 22/10/14
 * Time: 08:50
 */
require __DIR__.'/vendor/autoload.php';
$string = "hufref fhr!çu'ço frferfrf!uçà fjfizef!u!çuç ";
$slugify = new \Cocur\Slugify\Slugify();
echo $slugify ->slugify($string,'_');