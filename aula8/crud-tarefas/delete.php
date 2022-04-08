<?php

include_once '../conexao.php';

//Expressão Regular - Regular Expression - RegExp

//Evita SQL Injection
$id = preg_replace('/\D/','', $_POST['id']); //Elimina tudo que não é numero

/*

preg_replace('pattern','replacement','subject');

pattern = O que vai ser pesquisado
replacement = o que vai substituir o que você colocar em pattern
subject = a string ou o array onde sera pesquisado e substituido

*/

$delete = $database->exec("DELETE FROM tarefas WHERE id = $id");

if($delete)
    echo 'tarefa apagada com sucesso';
else
    echo 'Não foi possivel apagar a tarefa';

echo "<br><br><a href='select.php'>Voltar</a>";