<?php

/**
 * true -1
 * false -0 
 * && (va) and ( * ko'paytirish)
 * || (yoki) or (+ qo'shish)
 * ! bekorlash
 * xor (ikkisidan biri true bo'lishi kerak)
 */

 if (! ((20 <= 115) and ! ("abs" > "ab"))) {
    print (true);
 } else {
    print (false);
 }
 
 echo "<br>";
 echo "<br>";

#echo ( bool ) 20 % 3 == 1;
echo (bool) (100 <=> 501);

echo "<br>";
echo "<br>";

var_dump(( bool) (50 <=> 100));  // -1

echo "<br>";
echo "<br>";

var_dump(( bool) (50 <=> 50)); # -0

echo "<br>";
echo "<br>";

var_dump(( bool) (50 <=> 40));

echo "<br>";
echo "<br>";

if ((100 <=> 501) xor (20 % 3 == 1)) {
    print(true);
} else {
    print (false);
}
echo "<br>";
echo "<br>";

var_dump( 20 > 15 )  xor ( "" == "");

echo "<br>";
echo "<br>";
if ((20 < 15) xor ( "" == "")) {
    print(true);
} else {
    print (false);
}