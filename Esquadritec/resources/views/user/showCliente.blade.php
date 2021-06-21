<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>USUÁRIOS CADASTRADOS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">
    </head>
    <body>
    <div class="card table">
        <table class="table table-sm center">
            <thead>
                <tr>
                <th scope="col" class="table_first_row">CLIENTE</th>
                <th scope="col" class="table_first_row">CPF</th>
                <th scope="col" class="table_first_row">CNPJ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($cliente as $cli)
                        <td class="table_rows">Eleanor Pena</td>
                        <td class="table_rows">111.111.111-22</td>
                        <td class="table_rows">-</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>


        <script src="{{ asset('site/jquery.js') }}" async defer></script>
        <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
    </body>
</html>