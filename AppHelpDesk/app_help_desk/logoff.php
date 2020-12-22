<?php 

    session_start();
    /*
    //remover índices do array de sessão
    //unset()

    //destruir a variavel de sessão
    //session_detroy()
    */

    session_destroy();
    header('Location: index.php');

?>