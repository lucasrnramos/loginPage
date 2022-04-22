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
    <h1>Cadastrado</h1>
    <?php
       echo "O nome completo é: " . $_POST['name'] . "</br>";
       echo "O e-mail cadastro é: " . $_POST['email'] . "</br>";
       echo "O <strong> CPF </strong> digitado é: " . $_POST['cpf'] . "</br>";
       $_vPasswordIsTrue = isset($_POST['password']);
       $_vResponse = $_vPasswordIsTrue == 1 ? true : false;
       echo $_vResponse; 
     ?>
</body>
</html>