<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela nova linha">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">


    <title>Nova Unidade de Medida</title>
</head>

<body>
    <x-layout/>
    <div class="py-4 center" style="min-height: 200px;">
        <h2 class="text-main font-monospace ">NOVA UNIDADE DE MEDIDA</h2>

        <div class="card-generico center-div" style="width: 500px;min-height: 100%;">
            <form class="" style="height: 100%;" action="{{route('new_unidade_do')}}" method="POST">
                @csrf
                <div class="row p-3 center-div pt-5" style="width: 300px;">
                    <label for="unidade" class="pr-2 col-form-label   " style="color: white">UNIDADE:</label>
                    <input id="unidade" type="text" name="unidade" class="form-control" placeholder="">
                </div>
                <div class="center-div bottom-div w-auto">
                    <button class="rounded-pill btn btn-md btn-cancelar mx-4" onClick="goBack()" type="reset">Cancelar</button>
                    <button class="rounded-pill btn btn-md btn-green" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
    <x-footer/>
</body>

</html>
