<?php

require_once '../conexao.php'; //verifica se foi feito require em outro arquivo que vc ta fazendo require

$id = preg_replace('/\D/','',$_POST['id']);

var_dump($id);

if( isset($_POST['tarefa']) ) {

    $stmt = $database->prepare('UPDATE tarefas SET descricao = :descricao WHERE id = :id');
    $stmt->bindParam(':descricao', $_POST['tarefa']);
    $stmt->bindParam(':id', $id);

    if( $stmt->execute() )
        echo 'tarefa atualizada';
    else
        echo 'erro ao atualizar a tarefa';
}



$stmt = $database->query("SELECT descricao FROM tarefas WHERE id = $id");
$stmt->execute();
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);

echo "

    <form method='POST'>

        <label for='tarefa'>Tarefa</label>

        <input type='text' id='tarefa' name='tarefa' value='{$tarefa['descricao']}'>

        <input type='hidden' name='id' value='$id'>

        <input type='submit' value='Atualizar'>

    </form>

    <a href='select.php'>Voltar</a>
";
