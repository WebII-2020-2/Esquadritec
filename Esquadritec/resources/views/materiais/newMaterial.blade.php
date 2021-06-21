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

    label {
        color: white;
    }

    h2 {
        font-size: 30px;
        font-weight: 650;
        line-height: 49px;
        text-align: center;

    }
</style>

<body>


    <div class="container" style="width: 100%">
        <div class="row">
            <div class="col">
                <h2 class="text-main font-monospace ">NOVA MATERIAL</h2>
            </div>
        </div>

    </div>
    <div class="card center-div" style="width: 600px;min-height: 100%;">
        <form action="{{ route('new_material_do') }}" class=" g-3 pt-4" method="POST">
            @csrf
            <div class="full-width form-group row px-0">
                <label for="material" class="col-form-label pl-4" style="color: white;">MATERIAL:</label>
                <div class="col-sm-4 pl-1">
                    <input id="material" type="text" name="material" class="form-control px-1" placeholder=""
                        style="width: 110px">
                </div>
                <label for="valor" class="col-form-label pl-5" style="color: white;">VALOR:</label>
                <div class="col-sm-4 pl-1">
                    <input id="valor" type="number" name="valor" class="form-control  px-1" style="width: 70px"
                        placeholder="">
                </div>
            </div>
            <div class="full-width form-group row pt-3">

                <label for="inputUnidadeMedida" class="col-form-label pl-4">UNIDADE DE
                    MEDIDA:</label>
                <div class="col-sm-8 pl-1">

                    <select id="inputUnidadeMedida" class="form-select form-control px-1" style="width: 92px;">

                        @foreach ($unidades as $unidade)
                        $id = unidade->id;
                        <option>{{ $unidade->unidade }}</option>

                        @endforeach

                    </select>

                </div>
            </div>

            <div class="full-width row pt-4" style="text-align: center">

                <div class="center-div w-auto">
                    <button class="rounded-pill btn btn-md btn-cancelar mx-5" onClick="goBack()"
                        type="reset">Cancelar</button>
                    <button class="rounded-pill btn btn-md btn-green " type="submit">Adicionar</button>
                </div>
            </div>
        </form>
    </div>
    </div>

</body>

</html>
