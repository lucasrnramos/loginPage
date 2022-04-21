<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucas Rodrigues da Nova Ramos">
    <meta name="generator" content="Visual Studio Code">
    <meta name="keywords" content="Login, Página">
    <meta name="description" content="Página de Login">
    <meta name="application-name" content="Página de Login">
    <title>Página de Login</title>
</head>
<body>
    <form action="loged.php" method="post">
        <label for="name">Digite seu nome completo</label>
        <input type="text" id="name">
        <br>
        <label for="email">Digite seu endereço de e-mail</label>
        <input type="email" name="E-mail" id="email">
        <br>
        <label for="cpf">Digite os números de seu <strong>CPF</strong></label>
        <input type="text" name="CPF" id="cpf">
        <br>
        <label for="password">Crie uma senha</label>
        <input type="password" name="Password" id="password">

        <input type="submit" value="Concluir">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>