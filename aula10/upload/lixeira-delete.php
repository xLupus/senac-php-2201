<?php

require_once '../cadastro/conexao.php';

$id = $_POST['id'];

$stmt = $database->prepare("DELETE FROM tarefas WHERE id = :id");
$stmt->bindParam(':id', $id);

if( $stmt->execute() ){
    echo 'tarefa Deletada com sucesso';
}else{
    echo 'erro ao deletar a tarefa';
}
