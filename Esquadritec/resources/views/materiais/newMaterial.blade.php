<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">

    <title>Cadastro material</title>
</head>
<body>

    <x-layout />
    <div class="py-4 center">
            <h2 class="text-dark font-monospace py-4">Novo Material</h2>

            @if(session()->has('errors'))
                <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:9999;">
                    <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('errors')}}</p>
                </div>
            @elseif(session()->has('succes'))
                <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:9999;">
                    <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
                </div>
            @endif

            <div class="card center-div text-white" style="width: 500px;height: 100%;">
                <form class="" style="height: 100%; width: 100%;" method="POST" action="{{route('new_material_do')}}">
                    @csrf
                    <div class="row" style="margin-bottom: 2%; margin-top:4%;">
                        <div class="col">
                            <label for="material">Material:</label>
                            <input id="material" class="input-3" type="text" name="nome" required>
                        </div>
                        <div class="col">
                            <label for="value" class="">Valor:</label>
                            <input id="value" class="input-3" style="width: 35%;" type="number" name="valor">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 2%;">
                        <div class="col-6" style="margin-left: 1%;">
                        <label for="codigo">Código:</label>
                        <input id="codigo"class="input-3" type="text" name="codigo">
                        </div>
                    </div>

                    <div class="row" style="margin-left: 6%;">
                        <label for="inputInudadeMedida">Unidade de Medida:</label>
                            <select id="inputUnidadeMedida" name="unidade_medida" class="form-select form-control space" style="margin-left: 1%; width: 15%; font-size:11px;">

                                @foreach ($unidades as $unidade)

                                <option value="{{ $unidade->id }}">{{ $unidade->unidade }}</option>

                                @endforeach

                            </select>
                    </div>

                    <div class="pt-4" style="margin-bottom:4%;">
                        <a href="{{route('dashboard')}}" class="rounded-pill btn btn-sm btn-danger mr-5" type="reset">Cancelar</a>
                        <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Confirmar</button>
                    </div>
                </form>
    </div>
    <x-footer/>

</body>

</html>
