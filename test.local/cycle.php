<?php
$i = 100;
while ($i >= 1) {
    $i--;
    if ($i % 2 == 0) continue;
    echo $i . ",   ";
};
echo "<br>";
$i = 100;
do {
    echo $i . ",   ";
    $i--;
    if ($i == 40) {
        break;
    };
} while ($i >= 1);
echo "<br>";
$arre = [4, 6, 8, 4, "str", 18.56];
foreach ($arre as $key) {
    echo $key . ",   ";
};
echo "<br>";
for ($i = 0; $i < count($arre); $i++) {
    echo "Значение элемента:  " . $arre[$i] . "<br>";
};
