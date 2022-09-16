<?php
    // ARRAYS
    echo '<h3> Arrays</h3>';

    $carros = array('BMW', 'Veloster', 'hilux'); // declarando um array
    echo $carros[0].', ' ;  // mostra na tela o valor 
    echo $carros[1].', ' ;// mostra na tela o valor 
    echo $carros[2].' ';    // mostra na tela o valor 
    echo '<br>';

    print_r($carros); // mostra na tela o index e os valores 
    echo '<br>';

    $clientes = ['rodrigo', 'felipe', 'Bia']; // outra forma de declarar array
    print_r($clientes);
    echo '<br>';

       // Count 
       echo  count($clientes); // conta o numero de valores do array
       echo '<br>';

       echo '<hr>';
       //Foreach
       echo'<h3>percorrendo array</h3>';

       foreach($carros as $valor) { // para cada valor do araay carros é atribuido a $valor
        echo $valor.'<br>';
       }  

       //AArrays associativos
       $pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura"=> 1.75);
       $pessoa["cidade"] = "itabuna";

       foreach($pessoa as $indice => $valor){
        echo $indice.":".$valor."<br>";
       }

       // Arrays multidimensionais
       $times = array(
        "cariocas" => array("vasco", "flamengo", "botafogo"),
        "paulistas" => array("santos","sao paulo", "palmeiras"),
        "baianos" => array("bahia", "vitoria", "itabuna")
       );
       echo $times["paulistas"][1];

    echo '<hr>';

























?>