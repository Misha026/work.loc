<?php
$age = -1;

if ($age >= 60) {
    echo "старческий возраст";
} elseif ($age > 18) {
    echo "средний возраст";
} elseif ($age <= 18 && $age > 0) {
    echo "школьный возраст";
} elseif ($age <= 0) {
    echo "введите другой возраст";
}