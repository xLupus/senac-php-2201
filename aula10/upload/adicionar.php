<?php

require_once '../cadastro/conexao.php';

var_dump($_FILES);

$descricao = $_POST['descricao'];

$arquivoEnviado = '';

if( $_FILES['imagem']['error'] == 0  && $_FILES['imagem']['size'] > 0){

    $mimeType = mime_content_type($_FILES['imagem']['tmp_name']);

    $campos = explode('/', $mimeType);
    $tipo = $campos[0];
    $ext = $campos[1];

    if( $tipo == 'image'){
        
        $arquivoEnviado = 'img/' . $_FILES['imagem']['name'] . '_' . md5( rand(-99999,99999). microtime() ) . '.' . $ext;

        move_uploaded_file($_FILES['imagem']['tmp_name'], "$arquivoEnviado");
    }else{
        echo 'Usuario, So pode enviar imagens';
    }
}

$stmt = $database->prepare('INSERT INTO tarefas (descricao,imagem)
                            VALUES (:tarefa, :imagem)');

$stmt->bindParam(':tarefa', $descricao);
$stmt->bindParam(':imagem', $arquivoEnviado);

if ( $stmt->execute() ){
    echo 'INSERIDO COM SUCESSO';
} else {
    echo 'NÂO INSERIDO';
}

echo '<br><a href="form.html">Voltar</a>';