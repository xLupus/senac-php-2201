<?php

//Read
$f = fopen('usuarios.csv','r');

echo "<table border='1'>
        <tr>
            <td>Nome</td><td>Repetiçoes</td>
        </tr>
";

while($linha = fgets($f)){

    $campos = explode(';', $linha);
    $nome = $campos[0];
    $rep = $campos[1];

    echo "
        <tr>
        <td>$nome</td><td>$rep</td>
        </tr>
    ";
};

echo "</table>";

//explode(o caractere delimitador como ex: virgula, variavel);