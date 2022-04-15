<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action='entrar.php' method='post'>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" autocomplete='off'>
        </div>

        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" autocomplete='off'>
        </div>

        <input type="submit" value="Entrar">
        
    </form>
</body>
</html>