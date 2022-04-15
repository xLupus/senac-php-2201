<?php

require '../controle-acesso.php';

include_once './conexao.php';

$stmt = $database->query('SELECT id, nome FROM usuarios;'); 

$stmt->execute(); 


echo "
    <a href='formUsuario.php'>+ novo usuario</a>
    <br>
    <form method='post'>
        <table border=1>
            <tr>
                <td>Email</td><td>nome</td><td>&nbsp;</td><td>&nbsp;</td>
            </tr>
";

while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
            <td>{$registro['id']}</td>
            <td>{$registro['nome']}</td>
            <td><button type='submit' formaction='deleteUsuario.php' name='id' value='{$registro['id']}'>Apagar</button></td>
            <td><button type='submit' formaction='updateUsuario.php' name='id' value='{$registro['id']}'>Editar</button></td>
          </tr>
    ";
};

echo "</table>
    </form>
    <a href=''></a>
";