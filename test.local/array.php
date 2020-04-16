<?php
$arr1 = array(1, "word", 15, true, 17.8);
$arr2 = [5, 9];
$arr1[2] = $arr2[0];
echo $arr1[2] . "<br>";
$arr3 = [$ar1 = [5, 6, 2, 6], $ar2 = [6, 3, 2, 8]];
$arr4 = array(array(5, 6, 2, 6), array(6, 3, 2, 8));
echo $arr3[1][3] . "<br>";
echo $ar1[1] . "<br>";
echo $arr3[0][1] . "<br>";
echo $arr4[0][2] . $arr4[1][0] . "<br>";


$arr_5 = ["name" => "Vasya", "age" => 35]; // Ассациативный массив
echo "Name is " . $arr_5["name"] . ",  Age is " . $arr_5["age"] . "<br>";
foreach ($arr_5 as $key => $value) {
    echo $key . "<br>" . $value . "<br>";
};
