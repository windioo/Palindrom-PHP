<?php
function isPalindrome($value){
        $temp = "";
        for($i=strlen($value)-1;$i>=0;$i--){
        $temp .= $value[$i];
        }
        return ($temp==$value) ? "Palindrome" : "Bukan Palindrome";
}



echo isPalindrome("kodok");

?>  