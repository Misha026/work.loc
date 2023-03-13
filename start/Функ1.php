<?php


function cook($ingredients, $meal)
{
    // echo "беру $ingredients <br/>";
    // echo "готовлю... <br/>";
    return "Блюдо $meal готово";
}

$meal = cook("Мясо, тесто, яйца", "Суп");
var_dump($meal);
