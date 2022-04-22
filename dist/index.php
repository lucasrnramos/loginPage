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
    <script src="js/index.js" defer></script>
</head>
<body>
    <form id="form" name="form" action="loged.php" method="post">
        <label for="name">Digite seu nome completo</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Digite seu endereço de e-mail</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="cpf">Digite os números de seu <strong>CPF</strong></label>
        <input type="text" name="cpf" id="cpf">
        <br>
        <label for="password">Crie uma senha</label>
        <input type="password" name="password" id="password" required size="10" maxlength="10">
        <label for="repeat_password">Repita a senha</label>
        <input type="password" name="repeat_password" id="repeat_password" required size="10" maxlength="10" onblur="passwordValidate('password','repeat_password')">

        <input type="submit" name="button" id="button" value="Concluir">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>