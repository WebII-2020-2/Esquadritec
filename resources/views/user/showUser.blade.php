<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$user->name}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-content/>
    <script>
    // corrigir essa funçaõ para passar valor pela url
    </script>
</head>

<body>
    <x-layout/>
    <h2 style="margin-left: 5px;">{{ucfirst($user->name)}}</h2>

    <div class="card1">
        <table class="tabela tabela_lista">
            <thead>
                <tr style="background-color: #295C8A; color: white;">
                    <th scope="col" class="table_first_row">NOME</th>
                    <th scope="col" class="table_first_row">EMAIL</th>
                    <th scope="col" class="table_first_row">ADMIN</th>
                    <th scope="col" class="table_first_row">CRIADO</th>
                    <th scope="col" class="table_first_row">ATUALIZADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table_rows">{{$user->name}}</td>
                    <td class="table_rows">{{$user->email}}</td>
                    <td class="table_rows">{{$user->admin==1?'SIM':'NÃO'}}</td>
                    <td class="table_rows">{{$user->created_at->format('d/m/Y')}} as {{$user->created_at->format('H:i')}}</td>
                    <td class="table_rows">{{$user->updated_at->format('d/m/Y')}} as {{$user->updated_at->format('H:i')}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-footer/>
    <script src="{{ asset('site/jquery.js') }}" async defer></script>
    <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
</body>

</html>