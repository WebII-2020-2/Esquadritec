<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$modelo->modelo}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-content/>
</head>

<body>
    <x-layout/>
    <h2 class="text-black font-monospace py-4">{{$modelo->modelo}}</h2>

    <div class="card1" style="height: 100%; padding-bottom: 0;">
        <table class="tabela_lista">
            <thead style="background-color: #295C8A; color: white;">
                <tr>
                    <th class="table_first_row">NOME</th>
                    <th class="table_first_row">CRIADO</th>
                    <th class="table_first_row">ATUALIZADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table_rows">{{$modelo->modelo}}</td>
                    <td class="table_rows">{{$modelo->created_at->format('d/m/Y')}} as {{$modelo->created_at->format('H:i')}}</td>
                    <td class="table_rows">{{$modelo->updated_at->format('d/m/Y')}} as {{$modelo->updated_at->format('H:i')}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-footer/>
</body>

</html>