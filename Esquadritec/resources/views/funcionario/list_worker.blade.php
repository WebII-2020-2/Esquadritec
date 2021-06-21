<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Funcionários</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
</head>

<body>
    <h2>Lista de Funcionários</h2>
    <button type="button" class="btn btn-primary btn-sm">ADICIONAR +</button>

    <div class="card table">
        <table class="table table-sm center">
            <thead>
                <tr>
                <th scope="col" class="table_first_row">NOME</th>
                <th scope="col" class="table_first_row">CPF</th>
                <th scope="col" class="table_first_row">CNPJ</th>
                <th scope="col" class="table_first_row">EMAIL</th>
                <th scope="col" class="table_first_row">CIDADE</th>
                <th scope="col" class="table_first_row">RUA</th>
                <th scope="col" class="table_first_row">BAIRRO</th>
                <th scope="col" class="table_first_row">OBSERVAÇÃO</th>
                <th scope="col" class="table_first_row">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="table_rows">Annette Black</td>
                <td class="table_rows">333.333.333.34</td>
                <td class="table_rows">-</td>
                <td class="table_rows">willie.jennings@example.com</td>
                <td class="table_rows">Port Elena</td>
                <td class="table_rows">0570 Ruskin Pass</td>
                <td class="table_rows">-</td>
                <td class="table_rows">-</td>
                <td class="table_rows">editar  excluir</td>
                </tr>
                <tr>
                <td class="table_rows">Savannah Nguyen</td>
                <td class="table_rows">123.456.789-02</td>
                <td class="table_rows">-</td>
                <td class="table_rows">tanya.hill@example.com</td>
                <td class="table_rows">East Marleeville</td>
                <td class="table_rows">6 Laurel Pass</td>
                <td class="table_rows">-</td>
                <td class="table_rows">-</td>
                <td class="table_rows">editar  excluir</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>