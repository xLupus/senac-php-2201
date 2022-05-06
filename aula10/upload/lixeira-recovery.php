<?php

require_once '../cadastro/conexao.php';

$id = $_POST['id'];

$stmt = $database->prepare("UPDATE tarefas SET apagado = 0 WHERE id = :id");
$stmt->bindParam(':id', $id);

if( $stmt->execute() ){
    echo 'tarefa Recuperada com sucesso';
}else{
    echo 'erro ao Recuperar a tarefa';
}