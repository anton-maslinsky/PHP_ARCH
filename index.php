<?php
//Задание 1. Написать аналог «Проводника» в Windows для директорий на сервере при помощи итераторов.
$iterator = new DirectoryIterator(__DIR__);


//Показать все файлы в директории на сервере
function showAllFiles(DirectoryIterator $iterator) {
    foreach ($iterator as $fileInfo) {
        if($fileInfo->isDot()) continue;
        echo $fileInfo->getType() . " " . $fileInfo->getFilename() . " " . $fileInfo->getSize() . "b" . "<br>\n";
    }
}

showAllFiles($iterator);



//Задание 2. Определить сложность следующих алгоритмов:

// поиск элемента массива с известным индексом Сложность O(n)
$array1 = [0, 3, 5, 7, 9, 4, 6];
function findByKey($array, $key) {
    echo $array[$key] . "</br>";
}
findByKey($array1, '2');

//дублирование массива через foreach Сложность O(n)

$array2 = [2, 3, 6, 3, 'g', 9];
foreach ($array2 as $item) {
    echo $item . "</br>";
    $array2[] = $item;
}

//рекурсивная функция нахождения факториала числа 5 Сложность O(n)

function fact($n) {
    if ($n <= 0) return 1;
    return $n * fact ($n-1);
}
echo fact(5) . "</br>";


//Задание 3. Определить сложность следующих алгоритмов. Сколько произойдет итераций?

$n = 100;
$array[]= [];
$counter = 0;
for ($i = 0; $i < $n; $i++) {
    for ($j = 1; $j < $n; $j *= 2) {
        $array[$i][$j]= true;
        $counter ++;
    }
    $counter ++;
}

echo $counter . "</br>"; // произойдёт 800 итераций. Сложность O(n^2)


$n2 = 100;
$array[] = [];
$counter2 = 0;
for ($i = 0; $i < $n; $i += 2) {
    for ($j = $i; $j < $n; $j++) {
        $array[$i][$j]= true;
        $counter2 ++;
    }
    $counter2 ++;
}

echo $counter2 . "</br>"; // произойдёт 2600 итераций. Сложность O(n^2)


