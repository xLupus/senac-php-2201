<?php

//Comentario em linha

/*
Comentario de bloco
*/

//$nome = Declara Variavel
//define(); = Define uma constante

define( "XPTO", "Valor sempre igual"); //define("nome da constante", "Conteudo da Constante");
echo XPTO;

$num = 2;
$var = '<br>' . "Ola mundo! $num";
echo $var;

echo '<br><br><h1>Vamo tomar um cafe!</h1>';

//echo $var;
//var_dump($var);
//phpinfo(); - Mostra informações importantes, como variaveis de ambiente

//Vetores

$diaSemana = ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sabado'];

$contatos = ['Mae','Pai','Primo'];

//echo '<pre>';
var_dump($contatos);

echo "<br>Hoje é {$contatos[2]}"; //interpolação com Vetores
echo '<br>Hoje é ' . $contatos[2]; //Sem interpolação com Vetores

//Atribuir posição

$contato = [
            2 => 'Mae',
            4 => 'Pai',
            5 => 'Primo <br>'
        ];

/*
$contato = [
            'Mom' => 'Mae',
            'Dad' => 'Pai',
            'Cous' => 'Primo'
        ]; 

echo $contato['Mom'];   
*/

//



/*
$usuario['nome'] = 'Luiz';
$usuario['senha'] = '123';
*/


$usuario[0] = ['nome' => 'Luiz',
               'senha' => '123'];

$usuario[1] = ['nome' => 'fer',
               'senha' => '321'];

$usuario[2] = ['nome' => 'Bono',
               'senha' => '627'];

//looping do vetor

for($i = 0; $i <=2; $i++){
    echo '<pre>';
    var_dump($usuario[$i]);
};

//echo '<pre>';

//var_dump($usuario);


//Atribuição na unha

/*
$contato = [0] = 'pa'
$contato = [2] = 'pi'


echo $contato[2];
*/