<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Validações
        Funções(filter-input - filter_var)
        FILTER_VALIDATE_INT
        FILTER_VALIDATE_EMAIL
        FILTER_VALIDATE_FLOAT
        FILTER_VALIDATE_IP
        FILTER_VALIDATE_URL
        */
    ?>
     <?php
        if(isset($_POST['enviar-formulario'])): // verifica se clicou no botao
            $erros = array();

            if(!$year = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)): //filtra se o input é um inteiro 
                $erros[] = "Idade precisa ser um inteiro"; // adiciona item ao array erros 
            endif;  

            if(!empty($erros)): // verifica se o array ñ esta vazio, se ss vms percorrer ele e exibir uma mensagem  
                foreach($erros as $erro):
                    echo "<li>$erro</li>";
                endforeach;
                else:
                    echo"Parabens"; // se tiver vazio signifca q n tem erro 
            endif;
            
            
        endif;
   
    ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        idade: <input type="text" name = "idade"> <br>
        Email: <input type="text" name = "email"> <br>
        Peso: <input type="text" name = "peso">  <br>
        Ip: <input type="text" name = "ip">  <br>
        URL: <input type="text" name = "url">  <br>
        <button type="submit" name="enviar-formulario"> Enviar </button>     <br>
        </form>




















</body>
</html>