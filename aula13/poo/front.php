<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <div>
        <form method='POST'>
            <label for="num1">Numero 1:</label>
            <input type="number" name="num1" id="num1" value="<?= $n1;?>">

            <label for="num2">Numero 2:</label>
            <input type="number" name="num2" id="num2" value="<?= $n2;?>">

            <label for="operacao">Operação</label>
            <select name="operacao" id='operacao'>
                <option value="soma" <?= $_POST['operacao'] == 'soma' ? 'selected' : '' ?>>Somar</option>
                <option value="subtracao" <?= $_POST['operacao'] == 'subtracao' ? 'selected' : '' ?>>Subtrair</option>
                <option value="divisao" <?= $_POST['operacao'] == 'divisao' ? 'selected' : '' ?>>Dividir</option>
                <option value="multiplicacao" <?= $_POST['operacao'] == 'multiplicacao' ? 'selected' : '' ?>>multiplicar</option>
            </select>

            <input type="submit" value="Calcular">

        </form>
    </div>
    <div>
        Resultado: <?= $resultado ?? '';?>
    </div>
</body>
</html>