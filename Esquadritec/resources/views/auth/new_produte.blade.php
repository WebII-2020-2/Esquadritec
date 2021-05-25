<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Produto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">
    </head>

    <body>
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col" class="border border-dark">PRODUTO</th>
                    <th scope="col">MEDIDA</th>
                    <th scope="col">R$/UN</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>ALUMÍNIO</td>
                    <td>20 KG</td>
                    <td>R$ 20</td>
                    <td>Excluir  Editar</td>
                    </tr>
                    <tr>
                    <td>VIDRO</td>
                    <td>10 M</td>
                    <td>R$ 30</td>
                    <td>Excluir  Editar</td>
                    </tr>
                    <tr>
                    <td>MAÇANETA</td>
                    <td>5 UN</td>
                    <td>R$ 25</td>
                    <td>Excluir  Editar</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <script src="{{ asset('site/jquery.js') }}" async defer></script>
        <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
    </body>

</html>