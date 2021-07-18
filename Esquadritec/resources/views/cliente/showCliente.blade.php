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
        <x-layout/>
        <h1 class="text-black font-monospace py-4 center">{{ $cliente->name }}</h1>
        <div class="card1 center-div" style="width:98%; height: 100%; padding-bottom: 0;">
            <table class="tabela_lista">
                <thead style="background-color: #295C8A; color: white;">
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
        <div class="center-div card-generico text-white" style="width: 98%; margin-top:3%; padding: 3%;">
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
        </div>
        <x-footer/>
    </body>
</html>