<?php
// tanpa variabel penampung, agar tidak memakan banyak memori
function isPalindrome($value){
        for($i=0;$i<strlen($value);$i++){
            $indexAwal = $i;
            $indexAkhir = strlen($value) - $i - 1;
            echo $value[$indexAwal]."=";
            echo $value[$indexAkhir]."<br>";
            if ($value[$indexAwal] != $value[$indexAkhir]) {
                return "Bukan Palindrome";
            }  
        }
       return "Palindrome";
}



echo isPalindrome("kodok");

?>  