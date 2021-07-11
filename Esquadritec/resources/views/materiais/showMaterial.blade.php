<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$material->nome}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
    <script>
        // corrigir essa funçaõ para passar valor pela url
    </script>
</head>

<body>
    <x-layout />
    <h2>{{$material->nome}}</h2>

    <div class="card-generico table">
        <table class="table table-sm center">
            <thead>
                <tr>
                    <th class="table_first_row">NOME</th>
                    <th class="table_first_row">UNIDADE DE MEDIDA</th>
                    <th class="table_first_row">VALOR</th>
                    <th class="table_first_row">CODIGO</th>
                    <th class="table_first_row">CRIADO</th>
                    <th class="table_first_row">ATUALIZADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table_rows">{{ $material->nome}}</td>
                    <td class="table_rows">{{ $material->unidade_medida->unidade }}</td>
                    <td class="table_rows">{{ $material->valor }}</td>
                    <td class="table_rows">{{ $material->codigo }}</td>
                    <td>{{$material->created_at->format('d/m/Y')}} as {{$material->created_at->format('H:i')}}</td>
                    <td>{{$material->updated_at->format('d/m/Y')}} as {{$material->updated_at->format('H:i')}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-footer />
</body>

</html>
