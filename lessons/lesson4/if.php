<?php

$a = 1; 

if ($a == 1) {
    echo "teng";
}else {
    echo "teng emas";
}

echo "<br>";
echo "<br>";

$appleCount = 100;

if ($appleCount == 0) {
    echo "olma yo'q";
}else if ($appleCount >10) {
    echo "olmalar soni 10 dan ko'p";
}else if ($appleCount <= 10) {
    echo "olmalar soni 10 yoki undan kam";
}

echo "<br>";
echo "<br>";

var_dump($appleCount == 10);


if (false) {
    echo  "true";
} else {
    echo "false";
}

echo "<br>";



$num =13;
if ($num % 2 == 0) {
    echo "juft son";
}else {
    echo "toq son";
}
echo "<br>";

echo "<br>";


echo 100 <=> - 55 + 100 + 55;
echo "<br>";
echo "<br>";    


$bool = (bool) "-1123";
if ($bool) {
    echo "true";
}else {
    echo "false";
}