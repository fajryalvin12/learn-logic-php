<?php

require "../learnlogic.php";

$case = new transaction();
$number = "082140924421";

$result = $case->formatPhoneNumber($number);
var_dump($result);