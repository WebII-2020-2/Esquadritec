<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela novo modelo">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">


    <title>editar modelo {{$modelo->modelo}}</title>
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

    }

    .navbar.custom {
        width: 50%;
    }

    .right-addon input {
        padding-right: 30px;
    }

    .inner-addon {
        position: relative;
    }
</style>
    <body>
        <x-layout/>
        <div class="py-4 center" style="min-height: 200px;">
            <h2 class="text-main font-monospace ">EDITAR MODELO {{strtoupper($modelo->modelo)}}</h2>

            @if(session()->has('errors'))
                <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
                    <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('errors')}}</p>
                </div>
            @elseif(session()->has('succes'))
                <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
                    <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
                </div>
            @endif

            <div class="card center-div" style="width: 500px;min-height: 100%;">
                <form class="" style="height: 100%;" method="POST" action="{{ route('edite_modelo_do') }}">
                    @csrf
                    <div class="row p-3 center-div pt-5" style="width: 300px;">
                        <label for="modelo" class="pr-2 col-form-label" style="color: white">MODELO:</label>
                        <input type="hidden" name="id" value="{{$modelo->id}}">
                        <input type="text" name="modelo" class="form-control" value="{{$modelo->modelo}}">
                    </div>
                    <div class="center-div bottom-div w-auto">
                        <button class="rounded-pill btn btn-md btn-cancelar mx-4" onClick="goBack()" type="reset">Cancelar</button>
                        <button class="rounded-pill btn btn-md btn-green" type="submit">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
    </body>
</html>
   