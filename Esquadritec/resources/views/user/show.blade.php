<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>USUÁRIOS CADASTRADOS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">
    </head>
    <body>
        <label for="nome" >NOME: </label>
        <h4 id="nome">{{ $user->name }}</h4>
        <label for="nome" >EMAIL: </label>
        <h4 id="nome">{{ $user->email }}</h4>
        @if ($user->cpf)
            <label for="nome" >CPF: </label>
            <h4 id="nome">{{ $user->cpf }}</h4>
        @endif

        @if ($user->cnpj)
            <label for="nome" >CNPJ: </label>
            <h4 id="nome">{{ $user->cnpj }}</h4>
        @endif


        <script src="{{ asset('site/jquery.js') }}" async defer></script>
        <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
    </body>
</html>