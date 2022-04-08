<?php

include_once '../conexao.php';

$stmt = $database->query('SELECT * FROM tarefas;'); 

$stmt->execute(); 


echo "<form method='post'>
    <table border=1>
        <tr>
            <td>ID</td><td>Descrição</td><td>&nbsp;</td><td>&nbsp;</td>
        </tr>
";

while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
            <td>{$registro['id']}</td>
            <td>{$registro['descricao']}</td>
            <td><button type='submit' formaction='delete.php' name='id' value='{$registro['id']}'>Apagar</button></td>
            <td><button type='submit' formaction='update.php' name='id' value='{$registro['id']}'>Editar</button></td>
          </tr>
    ";
};

echo "</table>
    </form>
";

