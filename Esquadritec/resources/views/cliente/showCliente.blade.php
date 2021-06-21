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

        @foreach($endereco as $key => $adress)
            <h1>{{$key+1}} - ENDEREÇO(S)</h1>
            
            <label for="nome" >CIDADE: </label>
            <h4 id="nome">{{ $adress->cidade }}</h4>
            <label for="nome" >BAIRRO: </label>
            <h4 id="nome">{{ $adress->bairro }}</h4>
            <label for="nome" >NUMERO: </label>
            <h4 id="nome">{{ $adress->numero }}</h4>
            <label for="nome" >RUA: </label>
            <h4 id="nome">{{ $adress->rua }}</h4>
            <label for="nome" >OBSERVAÇÃO: </label>
            <h4 id="nome">{{ $adress->observacao }}</h4>
        @endforeach

        <h1>CONTATO(S)</h1>
            
        <label for="nome" >TELEFONE: </label>
        @foreach($telefone as $key => $fone)
            <h4 id="nome">{{$key+1}} - {{ $fone->numero }}</h4>
        @endforeach

        
    </body>
</html>