<?php

require "../learnlogic.php";

$case = new transaction();
$word = "makan";

// Challenge 3
$result = $case->isPalindrome($word);
var_dump($result);