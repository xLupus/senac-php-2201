<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud usuarios</title>
</head>
<body>
    <form action="insertUsuario.php" method="POST">
        <input type="email" id='email' placeholder="Digite o email" name="email">
        <br>
        <input type="text" id='nome' placeholder="digite o nome de usuario" name="nome">
        <br>
        <input type="password" id='senha' placeholder="Digite sua senha" name="senha">
        <br>
        <input type="password" id='confirmacao_senha' placeholder="confirme sua senha" name="confirmacao_senha">
        <br>

        <input type="submit" value="ENVIAR">
    </form>
    <a href="selectUsuarios.php">Listar</a>
</body>
</html>