<?php

require_once 'cadastro/conexao.php';

$email = trim( $_POST['email'] ?? '');
$senha = trim( $_POST['senha'] ?? '');

if(empty($email) || empty($senha)){
    header('location inde.php');
}


$stmt = $database->prepare("SELECT senha FROM usuarios WHERE id = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();

$val = $stmt->fetch(PDO::FETCH_ASSOC);

if( password_verify( $senha, $val['senha']) ){
    $_SESSION['id'] = $email;

    echo 'blabla';
    header('location: inde.php');
}else
    echo "Credenciais invalidas<br><br><a href='inde.php'></a>";



/*
trim() - retira os espaços no começo e no final da string
str_replace()

??
    se n existir o que ta aqui ?? atribua o que ta aqui
*/