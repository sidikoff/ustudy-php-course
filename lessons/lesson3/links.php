<?Php

$a = 4;
$b = & $a;

echo $b ;
echo "<br>";
$b = 6;
 
echo $a ;