<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentos Básicos</title>
</head>
<body>
    <?php 
        echo "hello !!";
     
    ?>

    <br>
    <hr>
</body>
</html>

<?php 
       // print "minha idade é 21"

       // VARIAVEIS 
       echo '<h3>VARIAVEIS</h3>';
       $nome = 'joão saldanha';
       $idade = 21;
       $altura = 1.68;

       echo "meu nome é: $nome, minha idade é: $idade e tenho $altura ";
       echo '<br>';
       //variavel variavel
       $bebida = 'refri';
       $$bebida  = 'coca';
       echo $refri;
       echo '<hr>';

       //tipos de dados 
       echo '<h3>TIPOS DE DADOS</h3>';

       /*************ESCALARES***********/
       //string
       $frasestring = "Olá mundo";
       $numeroint = 13;
       $numerofloat = 13.5;
       $varbool = false;

       var_dump($frasestring);
       echo '<br>';
       var_dump($numeroint);
       echo '<br>';
       var_dump($numerofloat);
       echo '<br>';
       var_dump($varbool);
       echo '<br>';

      /* if(is_string($frase)){
        echo "é uma string";
       } else{
        echo "não é string ";
       }
       */

            /*************COMPOSTOS***********/
        $carrosarray = array("gol","uno","camaro");
        var_dump($carrosarray);
        echo '<br>';

        // object
        class Cliente{
            public $nome;
            public function atribuirNome($nome){
                $this-> $nome = $nome;
            }
        }

        $cliente = new Cliente();
        $cliente -> atribuirNome("SALDANHA");

        var_dump($cliente);
        echo '<br>';
        echo '<hr>';












       
    ?>