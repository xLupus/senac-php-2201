<?php

$dns = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$database = new PDO($dns,$user,$pass);

$update = $database->exec('UPDATE tarefas 
                           SET descricao = "Tarefa atualizada 2.0" 
                           WHERE id = 11;');

var_dump($update);

if($update)
    echo 'Atualizou';
else
    echo 'Não atualizou';

