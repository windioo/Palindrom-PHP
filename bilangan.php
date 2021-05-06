<?php 

function bilanganRekursif($value,$i){
    if($i <= $value){
        if($i %2 == 0){
        echo $i.". Bilangan Genap <br>";
        }else{
        echo $i.". Bilangan Ganjil <br>";
        }
        return bilanganRekursif($value,$i+1);
    }
}

function bilangan($value){
    return bilanganRekursif($value,$i=1);
}

 bilangan(10)

?>