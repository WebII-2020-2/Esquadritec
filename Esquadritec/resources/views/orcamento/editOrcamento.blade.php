<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela novo modelo">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">


    <title>editar modelo {{$orcamento['cliente']['name']}}</title>
</head>
    <body>
        <x-layout/>
            <div class="py-4 center" style="min-height: 200px;">
                <div class="card center-div bg-main" style="width: 500px;min-height: 100%;">
                    <h2 class="text-black font-monospace ">Editar Orçamento de {{strtoupper($orcamento['cliente']['name'])}}</h2>

                    @if(session()->has('errors'))
                        <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
                            <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('errors')}}</p>
                        </div>
                    @elseif(session()->has('succes'))
                        <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
                            <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
                        </div>
                    @endif
                </div>
                <div>
                        <h1>CLIENTE</h1>
                        <div class="full-width mb-2 center">
                            <label>Cliente:</label>
                            <p>{{$orcamento['cliente']['name']}}</p>
                        </div>
                        @if($orcamento['cliente']['cpf'])
                            <div class="full-width mb-2 center">
                                <label>CPF:</label>
                                <p>{{$orcamento['cliente']['cpf']}}</p>
                            </div>
                        @else
                            <div class="full-width mb-2 center">
                                <label>CNPJ:</label>
                                <p>{{$orcamento['cliente']['cnpj']}}</p>
                            </div>
                        @endif
                        <div class="full-width mb-2 center">
                            <label>EMAIL:</label>
                            <p>{{$orcamento['cliente']['email']}}</p>
                        </div>
                    </div>
                <div>
                    <form method="POST" action="{{route('edite_orcamento_do')}}">
                        @csrf
                        <h1>ORÇAMENTO</h1>
                        <input type="hidden" name="id" value="{{$orcamento['id']}}">
                        <input type="hidden" name="valor_t" value="{{$orcamento['valor_t_b']}}">
                        <input id="statusHid" type="hidden" name="status" value="{{strtoupper($orcamento['status'])}}"/>
                        @if($orcamento['observacao'])
                            <div class="full-width mb-2 center">
                                <label>Observação:</label>
                                <textarea name="observacao" class="form-control">{{$orcamento['observacao']}}</textarea>
                            </div>
                        @endif
                        <div class="full-width mb-2 center">
                            <label>Desconto(%):</label>
                            <input type="text" name="desconto" value="{{$orcamento['desconto']}}">
                        </div>
                        <div class="full-width mb-2 center">
                            <label>Status:</label>
                            <input id="status" type="button" name="status" onClick="setStatus()" value="{{strtoupper($orcamento['status'])}}" class="btn btn-primary" />
                        </div>
                        <div class="full-width mb-2 center">
                            <label>Valor Total:</label>
                            <p>{{$orcamento['valor_t_b']}}</p>
                        </div>

                        <div class="full-width mb-2 center">
                            <label>Valor Final:</label>
                            <p>{{$orcamento['valor_f']}}</p>
                        </div>
                        <div class="center-div bottom-div w-auto">
                            <button class="rounded-pill btn btn-md btn-cancelar mx-4" onClick="goBack()" type="reset">Cancelar</button>
                            <button class="rounded-pill btn btn-md btn-green" type="submit">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>

        <x-footer/>
    </body>
</html>
   