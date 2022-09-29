<?php
/*
funções para Strings
  *strtoupper
  *strtolower
  *substr
  *str_pad
  *str_repeata
  *strlen
  *str_replace
  *strpos
*/
$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome); // coonverte para maiúscula
// $novoNome = strtolower($nome);  //converte para minúscula
echo $novoNome;
echo "<hr>";

 $mensagem = "Ola mundo";
 echo substr($mensagem, 4, 4); // corta a string
 echo "<hr>";

 $objeto = 'mesa';
 $novoObjeto  = str_pad($objeto, 7, "*", STR_PAD_RIGHT); //Acresenta caractere na string 
 echo $novoObjeto;
 echo "<hr>";

 $string = str_repeat("sucesso!", 5); //repete a string passada por parametro 
 echo "<hr>";

 $mensagem2 = "Olá world";
 echo strlen($mensagem); //  retorna o comprimento do texto
 echo "<hr>";

 $texto = "A seleção Argentina será compeã da copa do mundo de 2018";
 $newtext = str_replace("Argentina", "Brasileira",$texto ); // troca a palavra em um texto
 echo "<hr>";

 echo strpos($texto , "copa"); //retorna a posição da palavra indicada

?>