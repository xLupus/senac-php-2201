<?php

require_once 'conexao.php';

if( $_SERVER['REQUEST_METHOD'] == 'GET' ){//Se o requisitante usar o metodo Get

    $stmt = $database->query('SELECT id, descricao, imagem FROM tarefas WHERE apagado = 0'); 
    $stmt->execute(); 

    $saida = [];

    while( $reg = $stmt->fetch(PDO::FETCH_ASSOC) ){

        $saida[] = $reg;
    }

    echo json_encode($saida);

    http_response_code(200);
    exit();
}

//Retorna codigo de erro
http_response_code(405);


/*
    json_encode() transforma em json
*/