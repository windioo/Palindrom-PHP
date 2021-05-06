<?php

function isPalindromeRecursive($value, $i){
            if($i < strlen($value)/2){ // dibagi 2 agar tidak semua dicek tapi hanya sampai tengah
                $indexAwal = $i;
                $indexAkhir = strlen($value) - $i - 1;
                echo $indexAwal;
                echo "=";
                echo $indexAkhir;
                echo "<br>";
                if ($value[$indexAwal] != $value[$indexAkhir]) {
                    return "Bukan Palindrome";
                }  else{
                    return isPalindromeRecursive($value,$i+1);
                }
            }else{
                return "Palindrome";
            }
}

function isPalindrome($value){
    return isPalindromeRecursive($value,$i=0);
}

echo isPalindrome("kakak");
?>