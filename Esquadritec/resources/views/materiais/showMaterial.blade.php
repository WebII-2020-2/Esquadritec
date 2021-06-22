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
    <a type="button" class="btn btn-primary btn-sm" href="{{route('new_modelo')}}">ADICIONAR +</a>

    @if(session()->has('errors'))
    <div style="position: absolute; text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
        <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('errors')}}</p>
    </div>
    @elseif(session()->has('succes'))
    <div style="position: absolute; text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
        <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
    </div>
    @endif

    <div class="card table">
        <table class="table table-sm center">
            <thead>
                <tr>
                    <th class="table_first_row">id</th>
                    <th class="table_first_row">NOME</th>
                    <th class="table_first_row">UNIDADE DE MEDIDA</th>
                    <th class="table_first_row">VALOR</th>
                    <th class="table_first_row">CODIGO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($material as $material)

                    <td class="table_rows">{{ $material->id }}</td>
                    <td class="table_rows">{{ $material->nome}}</td>
                    <td class="table_rows">{{ $material->unidade_medida->unidade }}</td>
                    <td class="table_rows">{{ $material->valor }}</td>
                    <td class="table_rows">{{ $material->codigo }}</td>

                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>
