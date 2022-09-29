<?php
//superglobais
/*
 *GLOBALS
 *_SERVER
 *_REQUEST
 *_POST
 *_GET
 *_FILES
 *_ENV
 *_COOKIE
 *_SESSION
 */
    function quebrLinha(){
        echo"<br>";
     }
//   $x = 10;
//   $y = 15;

//   function soma() {
//     echo $GLOBALS['x'] + $GLOBALS['y'];
//   }
//    soma();

//    quebrLinha();

//    echo $_SERVER['PHP_SELF'].quebrLinha();
//    echo $_SERVER['SERVER_NAME'].quebrLinha();
//    echo $_SERVER['SCRIPT_FILENAME'].quebrLinha();
//    echo $_SERVER['SERVER_PORT'].quebrLinha();
//    echo $_SERVER['REMOTE_ADDR'].quebrLinha();
 
?> 
 <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
               <!-- <form action="dados.php" method ="POST">  -->
               <form action="dados.php" method ="GET">
                Nome: <input type = "text" name = "nome">
                Email: <input type = "email" name = "email">
                <input type = "submit" name = "enviar">
              </form>
   </body>
   </html>