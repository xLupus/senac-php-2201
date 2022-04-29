<?php

require '../controle-acesso.php';

include './conexao.php';

$email = $_POST['email']; //dado inseguro
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$confirm_senha = $_POST['confirmacao_senha'];


if($senha != $confirm_senha){
    echo "senha diferentes 
          <br>
          <a href='formUsuario.php'> </a>";
    exit();
}

$senha = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $database->prepare('INSERT INTO usuarios (id,nome,senha)
                            VALUES (:id,:nome,:senha)');


$stmt->bindParam(':id', $email);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':senha', $senha);


if ( $stmt->execute() ){
    echo 'INSERIDO COM SUCESSO';
} else {
    echo 'NÂO INSERIDO';
}


echo '<br><a href="formUsuario.php">Voltar</a>';