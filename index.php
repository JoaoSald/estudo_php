
<?php
   // HYPERTEXT PREPROCESSOR

    echo "<h1>Olá mundo</h1>";

  //  Variaveis
 //   $name = 'saldanha';
  //  echo $name;

   // concatenar
   // echo 'meu nome é '.$name;

 //  constantes
  //  define('NOME', 'Guilherme');
 //   echo NOME;

  //  Funções 
 //  Function somaDoisNumeros($a,$b){
  //      echo'A soma dos numeros é: '. $a + $b;
  //  }

 //   somaDoisNumeros(2,2)

  // Função que corta frase 
  //  echo substr ($frase, 0,8);

 //   laços de repetição 
  //  for($i=1; $i<=100; $i++){
   //     echo 'Saldanha' .$i;
  //      echo '<br/>';
  //  }

        session_start();     
        //  VALIDANDO FORM
        if(isset($_POST['acao'])){
         //recupero o valor do input.
         $tarefa = strip_tags($_POST['tarefa']);

         //verificar se existe seção tarefas.
         if(!isset($_SESSION['tarefas'])){
            $_SESSION['tarefas'] = array();
            $_SESSION['tarefas'][] = $tarefa;
         } else{
            $_SESSION['tarefas'][] = $tarefa ;
         }
        }   
?>
<!DOCTYPE html>
<html lang = "pt-br">
<head>
   <title>Lista de Tarefas</title>
</head>
<body>
   <form action="aula.php" method="post">
      <input type="text" name="tarefa" placeholder="digite sua tarefa...">
      <input type="submit" name="acao" placeholder="Enviar!">
  </form>
  <h3>Suas Tarefas Atuais:</h3>
  <?php
        foreach ($_SESSION['tarefas'] as $key => $value){
         echo '<p>'.$value.'</p>';
        }
   ?>
</body>
</html>