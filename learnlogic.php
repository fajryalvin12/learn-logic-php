<?php

class transaction {
    // Challenge 1
    function getChange(int $price, int $cash) {
        $cashbackArr = array();
        $cb_kind = array(1000, 500, 200, 100, 50);
        $cb_length = count($cb_kind);

        $cashback = $cash - $price;

        foreach ($cb_kind as $coin) {
            while ($cashback >= $coin) {
                $cashbackArr[] = $coin;
                $cashback -= $coin;
            }
        }

        return $cashbackArr;
    }

    // Challenge 2
    function getLimitChange(int $price, int $cash, array $stock) {
        $cashback_list = array();

        $cashback = $cash - $price;

        foreach($stock as $coin => $amount) {
            while ($cashback >= $coin && $amount > 0) {
                $cashback_list[] = $coin;
                $cashback -= $coin;
                $amount--;
            }
        };

        if ($cashback > 0) {
            return "Kembalian tidak bisa diberikan";
        }

        return implode(", ", $cashback_list);
    }

    // Challenge 3
    function isUnique(string $word) {
        $point = true;
        $seen = [];

        for ($i = 0; $i < strlen($word); $i++) {
            $strArr = $word[$i];

            if (in_array($strArr, $seen)) {
                $point = false;
            }

            $seen[] = $strArr;
        };

        return $point;
    }

    // Challenge 4
    function isPalindrome(string $word) {

        // 1. init array container 
        $char = [];

        // 2. do reversal string and put on array 
        for ($i = strlen($word) - 1; $i >= 0; $i--) {
            $char[] = $word[$i];
        }

        // 3. join array values into string 
        $str_char = implode("", $char);

        // 4. return boolean, regarding to the logic conditional between arg and $str_char
        return $str_char === $word ? true : false;
    }

    // Challenge 5
    function isAnagram (string $word1, string $word2) {

        // 1. Init the word length for looping conditions
        $len1 = strlen($word1);
        $len2 = strlen($word2);

        // container arr word 1
        $arrWord1 = array();
        $arrWord2 = array();

        // 2. Two-words length comparison, if identic, pass the condition to next process
        if ($len1 === $len2) {
            // looping for word 1
            for ($i = 0; $i < $len1; $i++) {
                $arrWord1[] = $word1[$i];
            }

            // looping for word 2
            for ($j = 0; $j < $len2; $j++) {
                $arrWord2[] = $word2[$j];
            }

        } else {
            return false;
        }

        // 3. Merge two arrays into a new unified array and count identic value in the array
        $arr = array_merge($arrWord1, $arrWord2);
        $check = array_count_values($arr);
 
        // 4. Validate the array by looping foreach 
        foreach ($check as $validate) {
            if ($validate !== 2) {
                return false;
            }
        }

        return true;
    }

    // Challenge 6 
    function isValidBrackets (string $input) {
        $len = strlen($input);
        $stack = array();

        for ($i = 0; $i < $len; $i++) {
            // check if the input contain "("
            if ($input[$i] === "(") {
                $stack[] = "(";
            } 
            // check if the input contain ")" 
            else if ($input[$i] === ")") {
                // check the value of stack exist or not
                if (empty($stack)) {
                    return false;
                } 
                // pop the latest stack
                array_pop($stack);
            } else {
                return false;
            }
        }
        return empty($stack);
    }

    // Challenge 7 
    function dominantDigitType (string $digits) {
        // 1. Init input length for string looping
        $len = strlen($digits);

        // 2. Init counter for odd and even numbers 
        $genap = 0;
        $ganjil = 0;

        // 3. loop the string, then convert to integer and mapping the loop number to counter 
        for ($i = 0; $i < $len; $i++) {
            if ((int) $digits[$i] % 2 === 0) {
                $genap++;
            } else {
                $ganjil++;
            }
        }

        // 4. Check the final result according to the counting loop
        if ($genap > $ganjil ) return "Genap";
        if ($genap < $ganjil ) return "Ganjil";
        if ($genap === $ganjil ) return "Seimbang";

    }

}
