<?php


function linearSearch ($myArray, $num): ?int
{
    $count = count($myArray);

    for ($i=0; $i < $count; $i++) {
        if ($myArray[$i] == $num) return $i;
        elseif ($myArray[$i] > $num) return null;
    }
    return null;
}
