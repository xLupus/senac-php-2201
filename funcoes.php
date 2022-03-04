<?php

/*

funções
string, int, array, bool
parametro opcional = [...] , parametro = 0)
parametro opcional sempre a direita, por ultimo

*/

//function cadastraAluno(string $nome, int $matricula = 0):bool

function cadastraAluno(array $aluno):bool 
// escopo de variavel/função,
{
        $f = fopen('alunos.csv', 'a'); // fopen('nomeDoArquivo', 'ComoAbrir');
        $escreveu = fwrite($f, "{$aluno['matricula']};\" {$aluno['nome']}\"\n");
        fclose($f);

        if($escreveu){
            return true;
        }else{
            return false;
        }

};

$funcionou = cadastraAluno(['matricula' => 784540235 , 'nome' => 'Ramon']);

if($funcionou){
    echo "<br> Aluno cadastrado com sucesso";
}else{
    echo "<br> Erro ao cadastrar o aluno";
}

$var = 10;

function soma($var){

    return $var + 10;
}

echo "<br>variavél antes: $var";

soma($var);

echo "<br>Variavél depois: $var";