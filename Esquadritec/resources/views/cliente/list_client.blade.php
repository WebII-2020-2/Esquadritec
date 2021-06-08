<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Clientes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
</head>

<body>
    <h2>Lista de Clientes</h2>
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
                <td class="table_rows">Eleanor Pena</td>
                <td class="table_rows">111.111.111-22</td>
                <td class="table_rows">123.456.789/0001-91</td>
                <td class="table_rows">kenzi.lawson@example.com</td>
                <td class="table_rows">Guanambi</td>
                <td class="table_rows">R. Augustina, 45 </td>
                <td class="table_rows">Vilia Nova</td>
                <td class="table_rows">-</td>
                <td class="table_rows">editar  excluir</td>
                </tr>
                <tr>
                <td class="table_rows">Jacob Jones</td>
                <td class="table_rows"> 222.222.222-TX</td>
                <td class="table_rows">321.654.987/0001-45</td>
                <td class="table_rows">jjone@gmail.com</td>
                <td class="table_rows">Guanambi</td>
                <td class="table_rows">Trav. João do Pulo, 369</td>
                <td class="table_rows">Lagoinha</td>
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