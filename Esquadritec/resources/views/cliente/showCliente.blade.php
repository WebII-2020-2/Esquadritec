<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>USUÁRIOS CADASTRADOS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <x-content/>
    </head>
    <body>
        <h1 class="text-black font-monospace py-4 center">{{ $cliente->name }}</h1>
        <div class="card table card-generico">
            <table class="table table-sm center" style="width:100%;">
                <thead>
                    <tr>
                        @if ($cliente->cpf)
                        <th scope="col" class="table_first_row">CPF</th>
                        @endif
                        @if ($cliente->cnpj)
                        <th scope="col" class="table_first_row">CNPJ</th>
                        @endif
                        <th scope="col" class="table_first_row">EMAIL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @if ($cliente->cpf)
                        <td class="table_rows">{{$cliente->cpf}}</td>
                        @endif
                        @if ($cliente->cnpj)
                        <td class="table_rows">{{$cliente->cnpj}}</td>
                        @endif
                        <td class="table_rows">{{$cliente->email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
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
        <x-footer/>
    </body>
</html>