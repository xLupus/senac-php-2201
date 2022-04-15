<?php

require_once 'cadastro/conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $database->prepare("SELECT senha FROM usuarios WHERE id = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();

$val = $stmt->fetch(PDO::FETCH_ASSOC);

if( password_verify( $senha, $val['senha']) ){
    $_SESSION['id'] = $email;

    echo 'blabla';
    //header('location: inde.php');
}else
    echo 'Credenciais invalidas';



/*
sessão
    cookie ou uma informaçao no formulario
*/