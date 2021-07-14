<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Materiais</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
</head>
<style>
    tr {
        color: white;
    }

    .table_rows {
        color: black;
        border: rgba(204, 204, 204, 0.952) solid 1px;

    }

    .card1 {}

    .tabela {
        border: rgba(204, 204, 204, 0.952) solid 1px;
        width: 100%;
        text-align: center;
    }

    .botao {
        font-size: 15px;
        background: #295C8A;
        border-radius: 3px;
        color: white;
        padding: 5px;

    }

    .botao:hover {
        color: white;
        background: #28A745;
        background: bottom, #295d8ac5, #295C8A;
        transition: 0.5;
        background-image: linear-gradient(#295d8ae3, #28a746bd);

        text-decoration: none;
    }

    .div_botao {
        padding: 0;
    }

    .row_options {
        width: 136px;
        display: flex;
        flex-direction: row;
        justify-content: center;

    }

    .cabecalho th {
        border: rgba(204, 204, 204, 0.952) solid 1px;
    }

    /* .svg_show:hover {
        background: white;
    } */


</style>

<body>
    <script>
        function icons(id) {
            var doc = document.getElementById(id);
            if (doc.style.display != "block") {
                doc.style.display = "block"
            } else {
                doc.style.display = "none"
            }
        }
    </script>
    <x-layout />

    <h2 class="text-black font-monospace py-4 text-center">Lista de Materiais</h2>
    <div class="div_botao col-lg-12" style="text-align: right; margin-bottom: 5px;">
        <a type="button" class="botao" href="{{ route('new_material') }}">ADICIONAR +</a>
    </div>

    <div class="card1" style="height: 100%;  padding-bottom: 0%;">
        <table class="tabela">

            <thead class="cabecalho">
                <tr style="background: #295C8A;">
                    <th scope="col" class="table_first_row">Nome</th>
                    <th scope="col" class="" style="width: 200px;">Unidade de Medida</th>
                    <th scope="col" class="table_first_row">Valor</th>
                    <th scope="col" class="table_first_row">Código</th>
                    <th scope="col" class="" style="width: 135px;">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($materiais as $material)
                    <tr class="">
                        <td class="table_rows">{{ $material->nome }}</td>
                        <td class="table_rows">{{ $material->unidade_medida->unidade }}</td>
                        <td class="table_rows">{{ $material->valor }}</td>
                        <td class="table_rows">{{ $material->codigo }}</td>

                        <td class="row_options">
                            <form method="GET" action="{{ route('show_material', ['id' => $material->id]) }}">
                                <button class="btn" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="" viewBox="0 0 16 16">
                                        <path
                                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path
                                            d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                    </svg>
                                </button>
                            </form>

                            <form method="GET" action="{{ route('edite_material', ['id' => $material->id]) }}">
                                <button class="btn" type="submit">
                                    <svg class="svg_show" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </button>
                            </form>

                            <form method="GET" action="{{ route('delete_material', ['id' => $material->id]) }}">
                                <button class="btn" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach



            </tbody>
        </table>
    </div>

    <x-footer />
</body>

</html>
