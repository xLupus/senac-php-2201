<?php

//Sorting Array

$usuario[0] = ['nome' => 'Luiz',
               'senha' => '123'];

$usuario[1] = ['nome' => 'fer',
               'senha' => '321'];

$usuario[2] = ['nome' => 'Bono',
               'senha' => '627'];


echo '  <table border="1">
        <tr>
            <td>ID</td><td>Nome</td><td>Senha</td> 
        </tr>
     ';

foreach($usuario as $id => $valor){
    echo '<tr>';
    echo "<td> $id</td><td> {$valor['nome']}</td><td> {$valor['senha']}</td>";
    echo '<tr>';
};

echo '</table>';

// as = a cada interação o vetor vai ser ....

// => = serve para atribuir um valor a uma chave especifica na definição um array e também para separar chave de um valor em um foreach;

// id = indice, podendo ser numerico ou alpha numerico;

// valor = o que tiver associado com o indice - valor por assim dizer ;


$dias = [ 'Dom' => ['Domingo','Domingo'],
          'Seg' => ['Segundo','Segundo'],
          'Ter' => ['Terça','Terça'],
          'Qua' => ['Quarta','Quarta'],
          'Qui' => ['Quinta','Quinta'],
          'Sex' => ['Sexta','Sexta'],
          'Sab' => ['Sabado','Sabado']];

/* Vetor simples

foreach($dias as $abreviacao => $nomeCompleto){
    echo "$abreviacao: $nomeCompleto<br>";
};

*/

/*Vetor com vetor nas posições #1

foreach($dias as $abreviacao => $nomes ){
    echo "$abreviacao: {$nomes[0]} ou {$nomes[1]}<br>";
};
*/

//Vetor com vetor nas posições #2
foreach($dias as $abreviacao => [$nomeSimples , $nomeCompleto]){
    echo "$abreviacao: $nomeSimples ou $nomeCompleto <br>";
};

