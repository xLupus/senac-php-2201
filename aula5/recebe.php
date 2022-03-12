<?php

echo "{$_POST['usuario']}, seja bem-vindo <br>";

//$repeticao = $repeticao > 1000 ? 1000 : $repeticao;
//for($i = 1; $i < $repeticao && $repeticao < 1000; $i++) 

for($i = 1; $i <= $_POST['numero']; $i++)
{ 
    echo "{$_POST['numero']} <br>";

    //if ($i > 1000) break;
}

//Create
$f = fopen('usuarios.csv','a');
fwrite($f,"{$_POST['usuario']}\t{$_POST['numero']}\n");
fclose($f);



/*
O indice do vetor é o nome no atributo NAME no formulario

E possivel Atribuir o valor de um indice a uma variavel exclusiva como por exemplo

$usuario = $_POST['usuario'];
$numero = $_POST['numero'];

*/