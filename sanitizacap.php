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
        /*Sanitização
            Funções (filter_input - filter_var)
            FILTER_SANITIZE_ESPECIAL_CHARS
            FILTER_SANITIZE_NUMBER_INT
            FILTER_SANITIZE_EMAIL
            FILTER_SANITIZE_URL
         */
    ?>
     <?php
     if(isset($_POST['enviar-formulario'])): // verifica se clicou no botao
            $erros = array();

         $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); //filtra chars
         echo $nome."<br>";

         $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); //filtra numeros
        if(!filter_var($idade, FILTER_VALIDATE_INT)){ //validate verifica se esta correto ou nao retornando true or false 
            $erros[] = "Idade precisa ser um inteiro";
           }

         $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //filtra Email
         echo $email."<br>";

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
        Nome:<input type="text" name = "nome"><br><br>
        idade:<input type="text" name = "idade"><br><br>
        Email:<input type="text" name = "email"><br><br>
        URL:<input type="text" name = "url"> <br><br>
        <button type="submit" name="enviar-formulario"> Enviar </button><br>
        </form>




















</body>
</html>