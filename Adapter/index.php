<?php

namespace Adapter;

use Adapter\Libraries\CircleAreaLib;
use Adapter\Libraries\SquareAreaLib;
use Adapter\Services\SquareAreaAdapter;
use Adapter\Services\CircleAreaAdapter;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Adapter/', '', $className);
    require_once __DIR__ . $className . '.php';
});


$square = new SquareAreaAdapter(new SquareAreaLib());
echo 'Площадь квадрата равна: ' . $square->squareArea(4) . '<br>';

$circle = new CircleAreaAdapter(new CircleAreaLib());
echo 'Площадь окружности равна: ' . $circle->circleArea(10) . '<br>';