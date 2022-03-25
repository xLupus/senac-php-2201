<?php

$dns = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';

$database = new PDO($dns,$user,$pass);


$stmt = $database->query('SELECT * FROM tarefas;'); //Preparando a consulta
$stmt->execute(); //Executando a consulta



//$registro = $stmt->fetch(PDO::FETCH_ASSOC); //Pegando o primeiro registro


echo "<table border=1>
        <tr>
            <td>ID</td><td>Descrição</td>
        </tr>
";

while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
            <td>{$registro['id']}</td><td>{$registro['descricao']}</td>
          </tr>
    ";
};

echo "</table>";














//stmt = statement