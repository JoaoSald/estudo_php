<?php
// Função para números

 /*
  *number_format
  *round
  *ceil
  *floor
  *rand
  */

$db = 1234.56;
$preco = number_format($db, 2, ",", "."); // formata um numero

echo round(3.6); //arredonda o numero

echo ceil(8.1); //arredonda pra cima
echo floor(9.4); //arredonda pra baixo

echo rand(1,20); // gera numeros aleatorios de 1 a 20

?>