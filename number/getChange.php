<?php

require "../learnlogic.php";

$case = new transaction();

// Challenge 1
$result = $case->getChange(7200, 10000);
var_dump($result);