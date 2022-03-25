<?php

include 'conexao.php';

$stmt = $database->query('SELECT * FROM tarefas;'); 

$stmt->execute(); 


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

