<?php

require "../learnlogic.php";

$case = new transaction();
$input = "()()()";

// Challenge 3
$result = $case->isValidBrackets($input);
var_dump($result);