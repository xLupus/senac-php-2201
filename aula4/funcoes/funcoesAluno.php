<?php

function cadastraAluno(array $aluno):bool 
{
        $f = fopen('alunos.csv', 'a');
        $escreveu = fwrite($f, "{$aluno['matricula']};\" {$aluno['aluno']}\"\n");
        fclose($f);

        if($escreveu){
            return true;
        }else{
            return false;
        }
}

//: retorna o tipo de resposta

function listarAlunos():array
{
    $alunos = [];

    $f = fopen('alunos.csv', 'r');

    while($linha = fgets($f)){

        var_dump($linha);

    }

    return $alunos;
}