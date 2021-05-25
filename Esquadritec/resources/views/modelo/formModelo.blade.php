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

    label {
        color: white;
    }
</style>

<body>
    <div class="py-4" style="text-align: center;">
        <h2 class="text-main font-monospace ">NOVO MODELO</h2>
    </div>
    <div class="container card center" style="width: 500px;">

        <div class="row justify-content-md-center pt-4" style="text-align: center;">
            <div class="col-md-auto">
                <form class="g-5">
                    @csrf
                    <div class="row p-3 center">
                        <label for="modelo" class="pr-2" style="color: white">Modelo:</label>
                        <input type="text" class="form-control" id="modelo" style="width: 200px;" placeholder="">
                    </div>
                    <div class="pt-4 g-4">
                        <button class="rounded-pill btn btn-sm btn-green" type="submit">Cadastrar</button>

                        <button class="rounded-pill btn btn-sm btn-cancelar" type="submit">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>

</html>
