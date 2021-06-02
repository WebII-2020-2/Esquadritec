<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Modelos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
</head>

<body>
    <h2>Lista de Modelos</h2>
    <button type="button" class="btn btn-primary btn-sm">ADICIONAR +</button>

    <div class="card table">
        <table class="table table-sm center">
            <thead>
                <tr>
                <th scope="col" class="table_first_row">NOME</th>
                <th scope="col" class="table_first_row">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="table_rows">2 folhas</td>
                <td class="table_rows">editar  excluir</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>