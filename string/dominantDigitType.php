<?php

require "../learnlogic.php";

$case = new transaction();
$digits = "221";

// Challenge 3
$result = $case->dominantDigitType($digits);
var_dump($result);