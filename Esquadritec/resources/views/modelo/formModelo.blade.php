<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela novo modelo">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">


    <title>Novo modelo</title>
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
</style>

<body>

    <div class="py-4 center" style="min-height: 200px;">
        <h2 class="text-main font-monospace ">NOVO MODELO</h2>

        <div class="card center-div" style="width: 500px;min-height: 100%;">
            <form class="" style="height: 100%;">
                @csrf
                <div class="row p-3 center-div pt-5" style="width: 300px;">
                    <label for="linha" class="pr-2 col-form-label" style="color: white">MODELO:</label>
                    <input id="linha" type="text" name="linha" class="form-control" placeholder="">
                </div>
                <div class="center-div bottom-div w-auto">
                    <button class="rounded-pill btn btn-md btn-cancelar mx-4" type="submit">Cancelar</button>
                    <button class="rounded-pill btn btn-md btn-green" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
