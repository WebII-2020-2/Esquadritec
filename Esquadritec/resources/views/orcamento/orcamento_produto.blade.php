<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Orçamento</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">

    </head>

    <body>
    
        <x-layout/>
        @if(session()->has('errors'))
            <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
                <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('errors')}}</p>
            </div>
        @elseif(session()->has('succes'))
            <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
                <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
            </div>
        @endif

        <h2 class="text-dark font-monospace py-4 center">Produtos</h2>
        <div class="col-lg-12" style="text-align: right; margin-bottom: 5px;">
            <a type="button" class="btn btn-primary btn-sm" href="{{route('orcamento_p_add')}}">+ PRODUTO</a>
        </div>
        <div class="card-generico table">
        <table class="table table-sm center">
            <thead>
                <tr>
                    <th scope="col" class="table_first_row text-center">NOME</th>
                    <th scope="col" class="table_first_row text-center">LINHA</th>
                    <th scope="col" class="table_first_row text-center">MODELO</th>
                    <th scope="col" class="table_first_row text-center">VALOR</th>
                    <th scope="col" class="table_first_row text-center">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($orcamento['produtos'] as $key => $produto)
                    <tr>
                        <td>{{$produto['nome']}}</td>
                        <td>{{$produto['linha']['linha']}}</td>
                        <td>{{$produto['modelo']['modelo']}}</td>
                        <td>{{$produto['valor']}}</td>

                        <td class="row">
                            <form method="GET" style="margin-left: 41%;" action="{{route('orcamento_p_rem',['id'=>$key])}}">
                                <button class="btn" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <form method="GET" style="margin-left: 38%;" action="{{route('orcamento_next')}}">
            <div>
                <a class="rounded-pill btn btn-sm btn-cancelar mx-4" href="{{route('dashboard')}}" type="reset">Cancelar</a>
                <button class="rounded-pill btn btn-sm btn-cancelar mx-4" onClick="goBack()" type="reset">Voltar</button>
                @if(count($orcamento['produtos'])>0)
                <button class="rounded-pill btn btn-sm btn-success mx-4" type="submit">Seguir</button>
                @endif
            </div>
        </form>
    </div>
    <x-footer/>
    </body>
</html>