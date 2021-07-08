<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Orçamento</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">
    </head>

    <body>
    
        <x-layout/>
        <h2 class="text-dark font-monospace py-4">Orçamento</h2>
        <div class="col-lg-12" style="text-align: right; margin-bottom: 5px;">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col" class="table_first_row text-center">CLIENTE</th>
                        <th scope="col" class="table_first_row text-center">VALOR BRUTO</th>
                        <th scope="col" class="table_first_row text-center">DESCONTO</th>
                        <th scope="col" class="table_first_row text-center">VALOR FINAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$orcamento['cliente']['name']}}</td>
                        <td>R$ {{$orcamento['valor_total']}}</td>
                        <td>{{$orcamento['desconto']}} %</td>
                        <td>R$ {{$orcamento['valor_final']}}</td>
                    </tr>
                </tbody>
            </table>

        <div class="card table">
        <h2 class="text-dark font-monospace py-4">Produtos</h2>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col" class="table_first_row text-center">NOME</th>
                    <th scope="col" class="table_first_row text-center">LINHA</th>
                    <th scope="col" class="table_first_row text-center">MODELO</th>
                    <th scope="col" class="table_first_row text-center">VALOR</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($orcamento['produtos'] as $key => $produto)
                    <tr>
                        <td>{{$produto['nome']}}</td>
                        <td>{{$produto['linha']['linha']}}</td>
                        <td>{{$produto['modelo']['modelo']}}</td>
                        <td>{{$produto['valor']}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <form method="POST" action="{{route('new_orcamento_do')}}">
            @csrf
            <div class="pt-4">
                <a class="rounded-pill btn btn-md btn-cancelar mx-4" href="{{route('dashboard')}}">Cancelar</a>
                <button class="rounded-pill btn btn-md btn-cancelar mx-4" onClick="goBack()" type="reset">Voltar</button>
                <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Registrar</button>
            </div>
        </form>
    </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>

        @endif

        @if($errors->all())
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif

        <x-footer/>
    </body>
</html>