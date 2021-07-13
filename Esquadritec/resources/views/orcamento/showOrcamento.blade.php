<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela novo modelo">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">


    <title>Orçamento de {{ $orcamento['cliente']['name'] }}</title>
</head>

<body>
    <x-layout />
    <div>
        <h2 class="text-black font-monospace" style="text-align: center;">Orçamento de
            {{ $orcamento['cliente']['name'] }}</h2>
        <h4>DADOS DO CLIENTE</h4>

        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col" class="table_first_row">CLIENTE</th>
                    @if ($orcamento['cliente']['cpf'])
                        <th scope="col" class="table_first_row">CPF</th>
                    @else
                        <div class="full-width mb-2 center">
                            <th scope="col" class="table_first_row">CNPJ</th>

                        </div>
                    @endif
                    <th scope="col" class="table_first_row">E-MAIL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $orcamento['cliente']['name'] }}</td>
                    @if ($orcamento['cliente']['cpf'])
                        <td>{{ $orcamento['cliente']['cpf'] }}</td>
                    @else
                        <td>{{ $orcamento['cliente']['cnpj'] }}</td>
                    @endif

                    <td>{{ $orcamento['cliente']['email'] }}</td>
                </tr>
            </tbody>
        </table>
        <table class="table table-sm">
            <thead>
                <tr>
                    <h4 class="card-title">DADOS DO ORÇAMENTO</h4>
                    <th scope="col" class="table_first_row">Observação</th>
                    <th scope="col" class="table_first_row">Desconto</th>
                    <th scope="col" class="table_first_row">Status</th>
                    <th scope="col" class="table_first_row">Valor total</th>
                    <th scope="col" class="table_first_row">Valor final</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    @if ($orcamento['observacao'])
                        <td>{{ $orcamento['observacao'] }}</td>
                    @endif
                    <td>{{ $orcamento['desconto'] }}%</td>
                    <td>{{ strtoupper($orcamento['status']) }}</td>
                    <td>{{ $orcamento['valor_t_b'] }}</td>
                    <td>{{ $orcamento['valor_f'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="card-body">

        @foreach ($produtos as $produto)
            <div style="margin-top:50px; border-bottom:2px solid black; width:100%;">
                <h4 class="card-title">PRODUTO {{ strtoupper($produto['nome']) }}</h4>

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
                            <td>{{ $produto['nome'] }}</td>
                            <td>{{ $produto['valor'] }}</td>
                            <td>{{ $produto['modelo']['modelo'] }}</td>
                            <td>{{ $produto['linha']['linha'] }}</td>
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
                        @foreach ($produto['materiais'] as $material)
                            <tr>
                                <td>{{ $material['nome'] }}</td>
                                <td>{{ $material['codigo'] }}</td>
                                <td>{{ $material['valor'] }}</td>
                                <td>{{ $material['unidade_medida']['unidade'] }}</td>
                                <td>{{ $material['quantidade'] }} {{ $material['unidade_medida']['unidade'] }}
                                </td>
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

    <x-footer />
</body>

<button id="btnPDF" onClick="PDF()" class="rounded-pill" type="reset">PDF</button>

<x-footer />
</body>

</html>
