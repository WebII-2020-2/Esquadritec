<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela novo modelo">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-content/>

    <title>editar modelo {{$orcamento['cliente']['name']}}</title>
    <style>
        @media (max-width: 496px){
            .titulo_form{
                font-size: 25px;
            }
        }
    </style>
</head>
    <body>
        <x-layout/>
        <h2 class="text-black font-monospace py-4 center">Editar Orçamento de {{mb_strtoupper($orcamento['cliente']['name'])}}</h2>
        <div class="py-4 center card-generico editar-orcamento" style="min-height: 200px;">
            <div class="editar-orcamento-cliente bg-dark">
                <h1 class="text-white center">CLIENTE</h1>
                <div class="center text-white">
                    <div class="row">
                        <div class="col right">Cliente: </div>
                        <div class="col text-left" style="margin-left: -2%;">{{$orcamento['cliente']['name']}}</div>
                    </div>
                    <div class="row">
                        @if($orcamento['cliente']['cpf'])
                        <div class="col right">CPF:</div>
                        @else
                        <div class="col right">CNPJ:</div>
                        @endif
                        @if($orcamento['cliente']['cpf'])
                        <div class="col text-left" style="margin-left: -2%;">{{$orcamento['cliente']['cpf']}}</div>
                        @else
                        <div class="col text-left" style="margin-left: -2%;">{{$orcamento['cliente']['cnpj']}}</div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col right">EMAIL:</div>
                        <div class="col text-left" style="margin-left: -2%;">{{$orcamento['cliente']['email']}}</div>
                    </div>
                </div>
            </div>
            <div class="editar-orcamento-orcamento" style="background: #799091;">
                <form method="POST" action="{{route('edite_orcamento_do')}}">
                    @csrf
                    <h1 class="titulo_form text-white">ORÇAMENTO</h1>
                    <input type="hidden" name="id" value="{{$orcamento['id']}}">
                    <input type="hidden" name="valor_t" value="{{$orcamento['valor_t_b']}}">
                    <input id="statusHid" type="hidden" name="status" value="{{strtoupper($orcamento['status'])}}"/>
                    @if($orcamento['observacao'])
                    <div class="text-white">Observação:</div>
                    @endif
                    @if($orcamento['observacao'])
                    <textarea class="form-control" style="width:50%; margin:2% 0% 2% 26%;">{{$orcamento['observacao']}}</textarea>
                    @endif
                    <div class="row">
                        <div class="col right text-white">Desconto(%):</div>
                        <div class="col form-group text-left" style="margin-left: -2%;"><input type="text" style="width: 40px; border-radius: 4px; border:0px;" name="desconto" value="{{$orcamento['desconto']}}"></div>
                    </div>
                    <div class="row" style="margin:1%;">
                        <div class="col right">Status:</div>
                        <div class="col text-left" style="margin-left: -2%;"><input id="status" type="button" name="status" onClick="setStatus()" value="{{strtoupper($orcamento['status'])}}" class="btn btn-primary" /></div>
                    </div>
                    <div class="row text-white">
                        <div class="col right">Valor Total:</div>
                        <div class="col text-left" style="margin-left: -2%;">R$ {{$orcamento['valor_t_b']}}</div>
                    </div>
                    <div class="row text-white">
                        <div class="col right">Valor Final:</div>
                        <div class="col text-left" style="margin-left: -2%;">R$ {{$orcamento['valor_f']}}</div>
                    </div>
                    <div class="center" style="margin-top:2%;">
                        <button class="rounded-pill btn btn-sm btn-cancelar mx-4" onClick="goBack()" type="reset">Cancelar</button>
                        <button class="rounded-pill btn btn-sm btn-green" type="submit">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>

        <x-footer/>
    </body>
</html>
   