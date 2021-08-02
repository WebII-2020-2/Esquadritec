<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$unidade->unidade}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-content/>
    <script>
    // corrigir essa funçaõ para passar valor pela url
    </script>
</head>

<body>
    <x-layout/>
    <h2 class="text-black font-monospace py-4" style="margin:0px;">{{$unidade->unidade}}</h2>

    <div class="card1">
        <table class="tabela_lista">
            <thead>
                <tr style="background: #295C8A; color: white;">
                    <th scope="col" class="table_first_row">NOME</th>
                    <th scope="col" class="table_first_row">CRIADO</th>
                    <th scope="col" class="table_first_row">ATUALIZADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table_rows">{{$unidade->unidade}}</td>
                    @if($unidade->created_at)
                        <td class="table_rows">{{$unidade->created_at->format('d/m/Y')}} as {{$unidade->created_at->format('H:i')}}</td>
                    @else
                        <td class="table_rows">--------</td>
                    @endif
                    @if($unidade->updated_at)
                        <td class="table_rows">{{$unidade->updated_at->format('d/m/Y')}} as {{$unidade->updated_at->format('H:i')}}</td>
                    @else
                        <td class="table_rows">--------</td>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>

    <x-footer/>
</body>

</html>