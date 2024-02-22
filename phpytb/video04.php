<?php
    $a = 7;
    $b = 10;
    
    $c = $a + $b;
    echo $c. '<br>';
    
    $c = $a - $b;
    echo $c. '<br>';
    
    $c = $a * $b;
    echo $c. '<br>';
    
    
    $c = $a / $b;
    echo floor($c). '<br>';

    $c = $a % $b;
    echo $c. '<br>';

    //OPERATOR LOGIKA
    $c = $a < $b ;
    echo $c;

    $c = $a > $b;
    echo $c;

    $c = $a == $b;
    echo $c;

    $c = $a != $b;
    echo $c;

    //INCREMENT
    $a++;
    echo $a. '<br>';

    //OPERATOR STRING
    $ibu = 'sura';
    $kota = 'baya';

    $hasil = $ibu.$kota;
    $hasil .= ' ibukota sby';
    echo $hasil
?>