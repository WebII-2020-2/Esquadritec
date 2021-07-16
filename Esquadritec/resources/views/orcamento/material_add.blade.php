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

            <h2 class="text-dark font-monospace py-4">Adicionar material</h2>

            <div class="card-generico center-div text-white pt-5" style="min-width: 700px;height: 100%;">
                <form class="" style="height: 100%; width: 100%;" method="POST" action="{{route('orcamento_material_add')}}">
                    @csrf
                    <div class="full-width mb-2 center">
                        <label for="modelo">Material:</label>

                        <select id="material" class="input-3" name="material" required>
                            @foreach ($materiais as $mat)
                                <option value="{{$mat->id}}">{{$mat->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row p-3 center-div" style="width: 456px;">
                        <label for="quantidade" class="pr-2 col-form-label" style="color: white">Quantidade:</label>
                        <input id="quantidade" style="width: 21%;" type="number" name="quantidade" class="form-control" placeholder="">
                    </div>

                    <div class="pt-4">
                        <button class="rounded-pill btn btn-sm btn-cancelar mx-4" style="width: 76.64px;" onClick="goBack()" type="reset">Cancelar</button>
                        <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>

        <x-footer/>
    </body>
</html>