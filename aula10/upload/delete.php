<?php

require_once '../cadastro/conexao.php';


$id = preg_replace('/\D/','', $_POST['id']);

$delete = $database->exec("UPDATE tarefas SET apagado = 1 WHERE id = $id");

//SOFT DELETE

if($delete)
    echo 'tarefa apagada com sucesso';
else
    echo 'Não foi possivel apagar a tarefa';

echo "<br><br><a href='select.php'>Voltar</a>";