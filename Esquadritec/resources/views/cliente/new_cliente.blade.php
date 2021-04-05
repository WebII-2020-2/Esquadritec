<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Usuário</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <form method="POST" action="{{ route('user_store') }}">
            @csrf
            <input type="text" name="name" placeholder="NOME">
            <input type="text" name="cpf" placeholder="CPF">
            <input type="text" name="cnpj" placeholder="CNPJ">
            <input type="text" name="email" placeholder="EMAIL">
            <input type="text" name="password" placeholder="SENHA">
            <input type="text" name="password_2" placeholder="CONFIRMAR SENHA">
            <label for="admin">ADMIN</label>
            <input id="admin" type="checkbox" name="admin" value="1">
            <input type="submit" value="ENVIAR">
        </form>
        <script src="" async defer></script>
    </body>
</html>