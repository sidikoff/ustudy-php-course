<?php
  
  /**
   * konkitansiyada biz " . " belgisidan foydalanamiz
   */

   $a = 'a';
   $b = 'b';
   $c = 'c';

   echo $a . $b . $c ;

   echo "<br>";
   echo "<br>";
    echo $a . "-" . $b . "-" . $c;

    echo "<br>";
    echo "<br>";

    echo $a . 1;

    echo "<br>";
    echo "<br>";

    $name = "O'lmas";
    $surname = "Siddiqov";
    $birthday = "09.02.2005";
    $phone = '+(' . 93 . ')' . 777 . '-' . 58 . '-' . 49 ;
    $age = 20;

    // O'zim haqimda ma'lumot
    echo " men " . $name . ' ' . $surname . ' ' .  $birthday . " yili tug'ilganman. yoshim" .  $age . " da . mening telifon raqamim" . $phone . ' .  ';
    echo '<br>';
    echo '<br>';

    echo " men $name $surname $birthday yili tug'ilganman. yoshim $age da. mening telifon raqamim $phone";

    echo "<br>";
    echo "<br>";

  ?>