<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>USUÁRIOS CADASTRADOS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <label for="nome" >NOME: </label>
        <h4 id="nome">{{ $cliente->name }}</h4>
        <label for="nome" >EMAIL: </label>
        <h4 id="nome">{{ $cliente->email }}</h4>
        @if ($cliente->cpf)
            <label for="nome" >CPF: </label>
            <h4 id="nome">{{ $cliente->cpf }}</h4>
        @endif

        @if ($cliente->cnpj)
            <label for="nome" >CNPJ: </label>
            <h4 id="nome">{{ $cliente->cnpj }}</h4>
        @endif

        <label for="nome" >BAIRRO: </label>
        <h4 id="nome">{{ $endereco->bairro }}</h4>
        <label for="nome" >CIDADE: </label>
        <h4 id="nome">{{ $endereco->cidade }}</h4>
        <label for="nome" >NUMERO: </label>
        <h4 id="nome">{{ $endereco->numero }}</h4>
        <label for="nome" >OBSERVAÇÃO: </label>
        <h4 id="nome">{{ $endereco->observacao }}</h4>
    </body>
</html>