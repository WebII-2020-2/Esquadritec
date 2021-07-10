<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$user->name}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
    <script>
    // corrigir essa funçaõ para passar valor pela url
    </script>
</head>

<body>
    <x-layout/>
    <h2>{{$user->name}}</h2>

    <div class="card-generico table">
        <table class="table table-sm center">
            <thead>
                <tr>
                    <th class="table_first_row">NOME</th>
                    <th class="table_first_row">EMAIL</th>
                    <th class="table_first_row">ADMIN</th>
                    <th class="table_first_row">CRIADO</th>
                    <th class="table_first_row">ATUALIZADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->admin==1?'SIM':'NÃO'}}</td>
                    <td>{{$user->created_at->format('d/m/Y')}} as {{$user->created_at->format('H:i')}}</td>
                    <td>{{$user->updated_at->format('d/m/Y')}} as {{$user->updated_at->format('H:i')}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-footer/>
    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>