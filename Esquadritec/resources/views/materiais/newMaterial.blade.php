<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">

    <title>Cadastro material</title>
</head>

<style>
.card {
                background-color: #318A90;
                border-radius: 28px;
                height: 255px;
            }

            .center {
                text-align: center;
            }

            .center-div {
                margin: auto;
                width: 50%;
                padding: 10px;
            }

            .form-control {
                width: 65%;
            }

            .bottom-div {
                position: absolute;
                bottom: 20%;
                left: 25%;
            }

            #body {
                color: blue;
            }

            .full-width {
                width: 100%;
            }

            .input {
                position: relative;
                padding-top: 10px;
                margin-top: 10px;
            }

            .card {
                padding: 20px;
                background-color: #295C8A;
                border-radius: 28px;
            }

            .btn {
                height: 30px;
                text-align: center;
            }

            .right {
                text-align: right;
            }

            .input-3 {
                width: 20%;
                border-radius: 10px;
                border: solid 1px white;
            }

            .space {
                margin-left: 20%;
            }

            h2 {
                font-size: 30px;
                font-weight: 650;
            }
   
</style>

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

            <div class="card center-div text-white" style="min-width: 500px;height: 100%;">
                <form class="" style="height: 100%; width: 100%;" method="POST" action="{{route('new_material_do')}}">
                    @csrf
                    <div class="full-width mb-2 center">
                        <label for="material">Material:</label>
                        <input id="material" class="input-3" type="text" name="material" required>

                        <label for="value" class="space">Valor:</label>
                        <input id="value" class="input-3" style="width: 10%;" type="number" name="value">

                    </div>

                    <div class="full-width mb-2" style="margin-left: -19%;">
                        <label for="codigo" style="margin-left: 12px;">Código:</label>
                        <input id="codigo" class="input-3" type="text" name="codigo">
                    </div>

                    <div class="full-width mb-2" style="margin-left: -19%;">
                        <label for="inputInudadeMedida">Unidade de Medida:</label>
                            <select id="inputUnidadeMedida" name="unidade_medida" class="form-select form-control space" style="width: 10%;">

                                @foreach ($unidades as $unidade)

                                <option value="{{ $unidade->id }}">{{ $unidade->unidade }}</option>

                                @endforeach

                            </select>
                    </div>

                    <div class="pt-4">
                        <a href="{{route('dashboard')}}" class="rounded-pill btn btn-sm btn-danger mr-5" type="reset">Cancelar</a>
                        <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Confirmar</button>
                    </div>
                </form>
    </div>
    <x-footer/>

</body>

</html>
