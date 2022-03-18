<?php

//Inicio do processo de conexão no Banco de Dados

$dns = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$database = new PDO($dns, $user, $pass);

//

/*INSERT

$inseriu = $database->exec('INSERT INTO tarefas 
                                (descricao) 
                            VALUES 
                                ("Tarefa inserida por PHP")');

*/



//DELETE

$apagou = $database->exec('DELETE FROM 
                                tarefas 
                            WHERE 
                                id = 13');

if($apagou){
    echo 'Gravou';
} else{
    echo 'Ai meu Deus';
}

//

