<?php

require "../learnlogic.php";

$case = new transaction();

$number = 1234;

// Challenge 1
$result = $case->reverseNumber($number);
var_dump($result);