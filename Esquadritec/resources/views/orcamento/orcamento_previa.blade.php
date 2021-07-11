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
        <h2 class="text-dark font-monospace py-4 center">Emitir orçamento</h2>
            
        <div class="card card-orcamento-previo-principal">
            <div class="row center" style="margin-bottom: 2%;">
                <div class="col-4">
                    <label>Cliente: </label>
                </div>
                <div class="col-4" style="margin-left: -15%;">
                    <div class="card text-left" style="padding-left:1%;">{{$orcamento['cliente']['name']}}</div>
                </div>
                <div class="col-3">
                    <label>Data:</label>
                </div>
                <div class="col-3" style="margin-left: -12%;">
                    <!--Colocar uma data real-->
                    <div class="card text-left" style="padding-left: 2%;width: 37%;">23/04/2020</div>
                </div>
            </div>

            <div class="card card-orcamento-previo">
                <table class="table table-sm center">
                    <thead>
                        <tr class="text-white bg-dark">
                            <th scope="col" class="table_first_row">PRODUTO</th>
                            <th scope="col" class="table_first_row">MEDIDA</th>
                            <th scope="col" class="table_first_row">VALOR/UNI</th>
                            <th scope="col" class="table_first_row">AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orcamento['produtos'] as $key => $produto)
                        <tr class="text-white">
                            <td>{{$produto['nome']}}</td>
                            <!--Temos que decidir se adicionamos valores aqui ou se readaptamos a tabela-->
                            <td>Vazio</td>
                            <!--Fui pegar o valor unitário do produto em outra tabela, porém não deu certo-->
                            <td>Vazio</td>
                            <td class="row">
                                    <!--Dar funcionalidade ao botão de excluir-->
                                    <form method="GET" style="margin-left: 41%;" action="">
                                        <button class="btn" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row right" style="margin-bottom: 2%; margin-top: 2%;">
                <div class="col">
                    <label>Mão de obra: </label>
                </div>
                <div class="col" style="margin-left: -1%;">
                    <div class="card text-left" style="padding-left:2%;">R$300,00</div>
                </div>
                <div class="col">
                    <label>Desconto:</label>
                </div>
                <div class="col" style="margin-left: -1%;">
                    <div class="card text-left" style="padding-left:3%; width: 23%;">5%</div>
                </div>
                <div class="col">
                    <label>Total:</label>
                </div>
                <div class="col" style="margin-left: -1%;">
                    <div class="card text-left" style="padding-left:4%; width: 50%;">R$700,00</div>
                </div>
            </div>
            <form method="POST" action="{{route('new_orcamento_do')}}">
                @csrf
                <div class="center" style="margin-bottom: 2%;">
                    <a class="rounded-pill btn btn-sm btn-cancelar mx-4" style="width: 72.88px;" href="{{route('dashboard')}}">Cancelar</a>
                    <button class="rounded-pill btn btn-sm btn-cancelar mx-4" style="width: 72.88px;" onClick="goBack()" type="reset">Voltar</button>
                    <button class="rounded-pill btn btn-sm btn-success mx-4" type="submit">Registrar</button>
                </div>
            </form>
        </div>
        <x-footer/>
    </body>
</html>