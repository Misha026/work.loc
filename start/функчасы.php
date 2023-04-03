<?php

function days($a,$b)
{
    $s = $b * $a;
    echo $b . " дюйм ". $s . " см  <br>";
}

days(2.5, 100);

function hour ($a,$b)
{
    $s = $b / $a;
    echo $b . " Часов  ". $s . " Дней  <br>";
}

hour(24, 48);

function dney ($a,$b)
{
    $s = $b * $a;
    echo $b . " Дней  ". $s . " Часов  <br>";
}

dney(24, 12);

function uslovie ($a,$b)
{
    $s = $b / $a;
    echo $b . " часов  ". $s . " дней  <br>";
}

uslovie(24, 48);



function pl($a,$b)
{
    $s= $a*$b;
    if ($s >= 1000){
        echo 'Введите число меньше 1000';
        exit();
    } elseif ($s <= 0 || $b <= 0) {
        echo 'Введите число больше 0';
    } else {
        echo "  " . $s ."<br> ";
    }}
    pl( 11,0);








