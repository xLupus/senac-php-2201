<?php

require_once '../cadastro/conexao.php';

$stmt = $database->query('SELECT * FROM tarefas WHERE apagado = 1');
$stmt->execute();

echo "<form method='post'>
    <table border=1>
        <tr>
            <td>ID</td><td>Descrição</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        </tr>
";
while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
   
    $img = 'N/D';

    if( !empty($registro['imagem']) ){

        if(is_file($registro['imagem'])){
            $img = "<img src='{$registro['imagem']}'></img>";
        }
    }

    echo "<tr>
            <td>{$registro['id']}</td>

            <td>$img</td>

            <td>{$registro['descricao']}</td>

            <td><button type='submit' formaction='lixeira-delete.php' name='id' value='{$registro['id']}'>Apagar</button></td>

            <td><button type='submit' formaction='lixeira-recovery.php' name='id' value='{$registro['id']}'>Recuperar</button></td>
          </tr>
    ";
}

echo "</table>
    </form>
";

