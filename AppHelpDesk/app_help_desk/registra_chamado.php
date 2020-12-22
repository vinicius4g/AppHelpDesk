<?php

    session_start();

    //montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' .  $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    
    //abrindo o arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');

    //escrevendo o texto no arquivo
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    //voltando a pagina de novas chamadas
    header('Location: abrir_chamado.php');

?>