<?php

include "linearSearch.php";
include "../task_1/randArray.php";
include "../task_1/bubble.php";
include "binarySearch.php";

$arraySize = 100;

//Формируем массив заданного размера
$array = _randArray($arraySize);

//Сортируем массив
$sortedArray = bubbleSort($array);

//Рандомное значение для поиска
$num =  $array[rand(MIN_RAND, $arraySize - 1)];


//Линейный поиск

echo "Количество шагов при линейном поиске: " . linearSearch($sortedArray, $num) . "</br>";

//Бинарный поиск
//Количество шагов считал по формуле k=log2(n)

echo "Количество шагов при бинарном поиске: " . round(log($arraySize,2 ), 0, PHP_ROUND_HALF_UP) . " ключ: "  . (binarySearch($sortedArray, $num));