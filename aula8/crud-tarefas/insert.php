<?php

include '../conexao.php';

$descricao = $_POST['descricao']; //dado inseguro

$stmt = $database->prepare('INSERT INTO tarefas (descricao)
                            VALUES (:tarefa)');

$stmt->bindParam(':tarefa', $descricao);



if ( $stmt->execute() ){
    echo 'INSERIDO COM SUCESSO';
} else {
    echo 'NÂO INSERIDO';
}



echo '<br><a href="form.html">Voltar</a>';