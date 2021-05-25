<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela nova linha">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">


    <title>Nova Linha</title>
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
        <h2 class="text-main font-monospace ">NOVA LINHA</h2>
    </div>
    <div class="container card center" style="width: 500px;">

        <div class="row justify-content-md-center pt-4" style="text-align: center;">
            <div class="col-md-auto">
                <form class="g-5">
                    @csrf
                    <div class="row p-3 center">
                        <label for="linha" class="pr-2" style="color: white">LINHA:</label>
                        <input type="text" class="form-control" id="linha" style="width: 200px;" placeholder="">
                    </div>
                    <div class="pt-4 g-4">
                        <button class="rounded-pill btn btn-md btn-cancelar" type="submit">Cancelar</button>
                        <button class="rounded-pill btn btn-md btn-green" type="submit">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>

</html>
