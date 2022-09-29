<?php
/*
CONDICIONAIS
*IF
*ELSE
*ELSEIF
*/

$numero  = 10;

if($numero == 10 ):
    echo"É igual a 10";
elseif($numero <= 9):
    echo"É menor ou igual a 9";
else:
    echo"É diferente de 10";
endif;

echo "<hr>";

$media = 7;

echo ($media >= 7) ? "Aprovado" : "Reprovado";

/*
Condicionais 
switch
case
*/

$cor = "Vermelho";

switch ($cor) :
    case"Vermelho";
    echo"Sua cor preferida é o vermelho";
    break;
    case"Verde";
    echo"Sua cor preferida é o verde";
    break;
    case"Azul";
    echo"Sua cor preferida é o azul";
    break;

    default:
    echo "Não tem cor preferida nos casa";
    
endswitch;


?>