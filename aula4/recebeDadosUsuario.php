<?php

//include não da erro fatal;
//Require Da erro fatal
//Require_once verifica se voce ja incluiu o arquivo

require 'funcoes/funcoesAluno.php';  
require_once 'funcoes/funcoesAluno.php';  

//$_POST - $_GET - $_REQUEST -- Vetor Super Global

$matricula = $_POST['matricula'];
$aluno = $_POST['aluno'];

if(cadastraAluno([ 'matricula' => $matricula,'aluno' => $aluno])){

    echo "$aluno, voce foi matriculado com sucesso";

}else{

    echo "$aluno, alguma coisa deu errado :-(";

}

echo "<br><br><a href='dadosUsuario.php'>Cadastrar outro</a> <a href='listarUsuarios.php'>Listar alunos</a>";


//cadastraAluno($_POST);