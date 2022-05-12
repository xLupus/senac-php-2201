<?php

require_once 'conexao.php';

$metodo = $_SERVER['REQUEST_METHOD'];

if( $metodo == 'GET' ){//Se o requisitante usar o metodo Get

    $str_sql = '';

    if( isset($_GET['id']) ){

        $id = preg_replace('/\D/', '', $_GET['id']);
        $str_sql = "WHERE id = $id";
    }

    $stmt = $database->query('SELECT id, descricao, imagem, apagado FROM tarefas ' . $str_sql); 
    $stmt->execute(); 

    $saida = [];

    while($reg = $stmt->fetch(PDO::FETCH_ASSOC) ){

        if($reg['apagado'] == 1){

            if(isset($_GET['id'])) exit(http_response_code(204));

            continue; //continua no looping
        }

        $saida[] = $reg;
    }

    if(count($saida) <= 0){
        http_response_code(404);
        exit();
    }

    echo json_encode($saida);

    http_response_code(200);
    exit();
}

if($metodo == 'POST' || $metodo == 'PUT'){

    echo 'POST ou PUT';
    
    exit(http_response_code(200));
}





//Retorna codigo de erro
http_response_code(405);


/*
    json_encode() transforma em json
*/