<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Orçamento</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <x-content/>
    </head>

    <body>
    
        <x-layout/>
        <div class="py-4 center">

            <h2 class="text-dark font-monospace py-2" style="text-transform: uppercase;">Novo Orçamento</h2>

            <div class="card-generico center-div text-white" style="min-width: 500px; width: 500px; height: 100%;">
                <form class="" style="height: 100%; width: 100%;" method="POST" action="{{route('orcamento_set')}}">
                    @csrf
                    <div class="d-flex center-div justify-content-start flex-column px-0" style="width:312px;">
                        <div class="d-flex align-items-center justify-content-start full-width mb-2 center-div p-0 pt-2" style="width: 463px;">
                            <label class="m-1" for="cliente">Cliente:</label>
    
                            <select id="cliente" class="input-3" name="cliente" required>
                                @foreach ($clientes as $cli)
                                    <option value="{{$cli->id}}">{{$cli->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="full-width d-flex justify-content-center mb-2 center">
                        <textarea id="observation" name="observacao" placeholder="Observações"
                            style="height: 100px; width: 65%; border-radius: 10px;"></textarea>
                    </div>

                    <div class="pt-3 pb-2">
                        <a class="rounded-pill btn btn-sm btn-cancelar mx-4" href="{{route('dashboard')}}" type="reset">Cancelar</a>
                        <button class="rounded-pill btn btn-sm btn-success ml-5" style="width:70.89px;" type="submit">Seguir</button>
                    </div>
                </form>
            </div>
        </div>

        <x-footer/>
    </body>
</html>