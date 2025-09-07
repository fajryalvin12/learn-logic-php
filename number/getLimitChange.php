<?php

require "../learnlogic.php";

$case = new transaction();

$price = 3650;
$cash = 500; 
$stock = [
    1000 => 2,
    500 => 1,
    200 => 2,
    100 => 1,
    50 => 5
];

$result = $case->getLimitChange($price, $cash, $stock);
var_dump($result);