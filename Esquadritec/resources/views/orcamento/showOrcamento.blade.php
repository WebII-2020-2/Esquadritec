<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela novo modelo">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">


    <title>Orçamento de {{$orcamento['cliente']['name']}}</title>
</head>
    <body>
        <x-layout/>
            <div>
                <h2 class="text-black font-monospace ">Orçamento de {{$orcamento['cliente']['name']}}</h2>
                <div>
                        <h1>DADOS DO CLIENTE</h1>
                        <div class="full-width mb-2 center">
                            <label>Cliente:</label>
                            <p>{{$orcamento['cliente']['name']}}</p>
                        </div>
                        @if($orcamento['cliente']['cpf'])
                            <div class="full-width mb-2 center">
                                <label>CPF:</label>
                                <p>{{$orcamento['cliente']['cpf']}}</p>
                            </div>
                        @else
                            <div class="full-width mb-2 center">
                                <label>CNPJ:</label>
                                <p>{{$orcamento['cliente']['cnpj']}}</p>
                            </div>
                        @endif
                        <div class="full-width mb-2 center">
                            <label>EMAIL:</label>
                            <p>{{$orcamento['cliente']['email']}}</p>
                        </div>
                    </div>
                <div>

                <div class="card-body">
                    <h3 class="card-title">DADOS DO ORÇAMENTO</h3>

                    @if($orcamento['observacao'])
                        <div class="full-width mb-2 center">
                            <label>Observação:</label>
                            <p>{{$orcamento['observacao']}}</p>
                        </div>
                    @endif
                    <div class="full-width mb-2 center">
                        <label>Desconto(%):</label>
                        <p>{{$orcamento['desconto']}}%</p>
                    </div>
                    <div class="full-width mb-2 center">
                        <label>Status:</label>
                        <p>{{strtoupper($orcamento['status'])}}</p>
                    </div>
                    <div class="full-width mb-2 center">
                        <label>Valor Total:</label>
                        <p>{{$orcamento['valor_t_b']}}</p>
                    </div>

                    <div class="full-width mb-2 center">
                        <label>Valor Final:</label>
                        <p>{{$orcamento['valor_f']}}</p>
                    </div>
                </div>

                <div class="card-body">

                    @foreach($produtos as $produto)
                        <div style="margin-top:50px; border-bottom:2px solid black; width:100%;">
                            <h3 class="card-title">PRODUTO {{strtoupper($produto['nome'])}}</h3>

                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col" class="table_first_row">NOME</th>
                                        <th scope="col" class="table_first_row">VALOR</th>
                                        <th scope="col" class="table_first_row">MODELO</th>
                                        <th scope="col" class="table_first_row">LINHA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$produto['nome']}}</td>
                                        <td>{{$produto['valor']}}</td>
                                        <td>{{$produto['modelo']['modelo']}}</td>
                                        <td>{{$produto['linha']['linha']}}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h3 class="card-title">MATERIAIS</h3>

                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col" class="table_first_row">NOME</th>
                                        <th scope="col" class="table_first_row">CÓDIGO</th>
                                        <th scope="col" class="table_first_row">VALOR</th>
                                        <th scope="col" class="table_first_row">UNIDADE DE MEDIDA</th>
                                        <th scope="col" class="table_first_row">QUANTIDADE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($produto['materiais'] as $material)
                                        <tr>
                                            <td>{{$material['nome']}}</td>
                                            <td>{{$material['codigo']}}</td>
                                            <td>{{$material['valor']}}</td>
                                            <td>{{$material['unidade_medida']['unidade']}}</td>
                                            <td>{{$material['quantidade']}} {{$material['unidade_medida']['unidade']}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="">
                <button class="rounded-pill btn btn-md btn-cancelar" onClick="goBack()" type="reset">Voltar</button>
            </div>

        <x-footer/>
    </body>
</html>
   