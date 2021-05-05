<?php

$array = [1, 5, 6, 8, 2, 2, 0, 3, 4, 2, 7];
var_dump($array);

/**
 * @param $array
 * @param $value
 * @return mixed
 */
function deleteOneFromArrayByValue($array, $value)
{
 
    if (($key = array_search($value, $array)) !== false) {
        unset($array[$key]);
    }
    return $array;
}

/**
 * @param $array
 * @param $value
 * @return mixed
 */
function deleteAllFromArrayByValue($array, $value)
{

    foreach (array_keys($array, $value, true) as $key) {
        unset($array[$key]);
    }
    return $array;
}

//В этом случае удалится первое совпавшее значение
$array1 = deleteOneFromArrayByValue($array, 2);
var_dump($array1);

//В этом случае удалятся все совпавшие значения
$array2 = deleteAllFromArrayByValue($array, 2);
var_dump($array2);
