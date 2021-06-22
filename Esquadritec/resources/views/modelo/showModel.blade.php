<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$modelo->modelo}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
    <script>
    // corrigir essa funçaõ para passar valor pela url
    </script>
</head>

<body>
    <x-layout/>
    <h2>{{$modelo->modelo}}</h2>
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
                    <th class="table_first_row">NOME</th>
                    <th class="table_first_row">CRIADO</th>
                    <th class="table_first_row">ATUALIZADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$modelo->modelo}}</td>
                    <td>{{$modelo->created_at->format('d/m/Y')}} as {{$modelo->created_at->format('H:i')}}</td>
                    <td>{{$modelo->updated_at->format('d/m/Y')}} as {{$modelo->updated_at->format('H:i')}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-footer/>
</body>

</html>