<?php

require "../learnlogic.php";

$case = new transaction();
$word1 = "kasur";
$word2 = "rusak";

$result = $case->isAnagram($word1, $word2);
var_dump($result);