<?php
/**
 * Created by PhpStorm.
 * User: lor
 * Date: 21/10/14
 * Time: 17:45
 */

require __DIR__.'/vendor/autoload.php';
$string = "hufref fhr!çu'ço frferfrf!uçà fjfizef!u!çuç ";
$slugify = new \Cocur\Slugify\Slugify();
echo $slugify ->slugify($string,'_');