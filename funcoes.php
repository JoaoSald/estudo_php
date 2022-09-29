<?php
//criando funções 

function quebraLinha(){
    echo "<hr>";
}

function calculaMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1+$n2+$n3+$n4) / 4;
        if($media>=7){
            echo"$nome aprovado!";
        }else{
            echo"$nome Reprovao";
        }
}

calculaMedia("saldanha", 6,7,8,7);
















?>
