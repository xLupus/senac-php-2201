<?php

require_once '../cadastro/conexao.php';

$id = preg_replace('/\D/','',$_POST['id']);

var_dump($id);

if( isset($_POST['tarefa']) ) {

    $arquivoEnviado = '';

    if( $_FILES['figura']['error'] == 0  && $_FILES['figura']['size'] > 0){

        $mimeType = mime_content_type($_FILES['figura']['tmp_name']);

        $campos = explode('/', $mimeType);
        $tipo = $campos[0];
        $ext = $campos[1];

        if( $tipo == 'image'){
            
            $arquivoEnviado = 'img/' . $_FILES['figura']['name'] . '_' . md5( rand(-99999,99999). microtime() ) . '.' . $ext;

            move_uploaded_file($_FILES['figura']['tmp_name'], "$arquivoEnviado");
        }else{
            echo 'Usuario, So pode enviar imagens';
        }
    }

    $stmt = $database->prepare('UPDATE tarefas 
                                SET descricao = :descricao, imagem = :imagem
                                WHERE id = :id');

    $stmt->bindParam(':descricao', $_POST['tarefa']);
    $stmt->bindParam(':imagem', $arquivoEnviado);
    $stmt->bindParam(':id', $id);

    if( $stmt->execute() )
        echo 'tarefa atualizada';
    else
        echo 'erro ao atualizar a tarefa';
}


$stmt = $database->query("SELECT descricao, imagem FROM tarefas WHERE id = $id");
$stmt->execute();
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);

$img = 'N/D';

if( !empty($tarefa['imagem']) ){
    if( is_file($tarefa['imagem']) ){
        $img = "<img src='{$tarefa['imagem']}'></img>";
    }
}

echo "

    <form method='POST' enctype='multipart/form-data'>

        <label for='tarefa'>Tarefa</label>

        <input type='text' id='tarefa' name='tarefa' value='{$tarefa['descricao']}'><br><br>

        $img;

        <input type='hidden' name='id' value='$id'><br><br>

        <input type='file' name='figura'> <br><br>

        <input type='submit' value='Atualizar'>

    </form>
    <a href='select.php'>Voltar</a>
";
