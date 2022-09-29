<?php
//While & do While

$contador = 1;
while ($contador <=10):
    echo "contador é $contador";
    $contador++;
endwhile;

echo "hr";

    do{
        echo"Contador é $contador <br>";
        $contador++;

    }while ($contador <=10);
    
//for & Foreach

for($aux = 0; $aux <=10; $aux++):
    echo"O contador é $aux ";
endfor;

echo "hr";

//Foreach utilizado para percorrer arrays
$cores = array("verde","vermelho", "azul");

foreach($cores as $indice => $valor):
    echo $indice."-". $valor. "<br>";
endforeach;









?>

