<?php


include "randArray.php";
include "bubble.php";

function getArr($int): array
{
    return _randArray($int);
}

$arraySize = 100000;

//Выполняем сортировку пузырьком
$start = microtime(true);
$array = getArr($arraySize);
echo "Формирование массива размером " . $arraySize . " элементов, заняло: " . (microtime(true) - $start) . " секунд." . "</br>";

//На моём железе, массив размером 100000 элементов сортируется пузырьком более 60 сек. до появления Fatal error :)
//Массив на 10000 элементов сортировался 58 сек.
bubbleSort($array);
echo "Сортировка пузырьком заняла: " . (microtime(true) - $start) . "</br>";

//Выполняем сортировку стандартным методом PHP
$start = microtime(true);
$array = getArr($arraySize);
echo "Формирование массива размером " . $arraySize . " элементов, заняло: " . (microtime(true) - $start) . " секунд." . "</br>";

//На моём железе, массив размером 100000 элементов сортируется пузырьком более 60 сек. до появления Fatal error :)
//Массив на 100000 элементов сортировался 0.044875144958496 сек.
$start = microtime(true);
sort($array);
echo "Сортировка стандартным методом PHP заняла: " . (microtime(true) - $start) . " секунд." . "</br>";
