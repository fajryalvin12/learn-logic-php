<?php

require "../learnlogic.php";

$case = new transaction();
$word = "makan";

// Challenge 3
$result = $case->isUnique($word);
var_dump($result);